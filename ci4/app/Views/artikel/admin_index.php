<?= $this->include('template/admin_header'); ?>

<div class="container-fluid mt-4 mb-5 px-4">
    <h2 class="fs-3 mb-4"><?= esc($title); ?></h2>

    <form id="filter-form" class="row gy-2 gx-3 align-items-center mb-4">
        <div class="col-md-4 col-lg-3">
            <input type="text" name="q" id="search-box" value="<?= esc($q); ?>" placeholder="Cari judul artikel" class="form-control">
        </div>
        <div class="col-md-3 col-lg-3">
            <select name="kategori_id" id="category-filter" class="form-select">
                <option value="">Semua Kategori</option>
                <?php foreach ($kategori as $k): ?>
                    <option value="<?= $k['id_kategori']; ?>" <?= ($kategori_id == $k['id_kategori']) ? 'selected' : ''; ?>>
                        <?= esc($k['nama_kategori']); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-md-3 col-lg-3">
            <select id="sort-select" class="form-select">
                <option value="artikel.id|desc" <?= ($sort_by == 'artikel.id' && $sort_dir == 'desc') ? 'selected' : ''; ?>>ID Descending</option>
                <option value="artikel.id|asc" <?= ($sort_by == 'artikel.id' && $sort_dir == 'asc') ? 'selected' : ''; ?>>ID Ascending</option>
                <option value="artikel.judul|asc" <?= ($sort_by == 'artikel.judul' && $sort_dir == 'asc') ? 'selected' : ''; ?>>Judul A-Z</option>
                <option value="artikel.judul|desc" <?= ($sort_by == 'artikel.judul' && $sort_dir == 'desc') ? 'selected' : ''; ?>>Judul Z-A</option>
                <option value="kategori.nama_kategori|asc" <?= ($sort_by == 'kategori.nama_kategori' && $sort_dir == 'asc') ? 'selected' : ''; ?>>Kategori A-Z</option>
                <option value="kategori.nama_kategori|desc" <?= ($sort_by == 'kategori.nama_kategori' && $sort_dir == 'desc') ? 'selected' : ''; ?>>Kategori Z-A</option>
                <option value="artikel.status|asc" <?= ($sort_by == 'artikel.status' && $sort_dir == 'asc') ? 'selected' : ''; ?>>Status Ascending</option>
                <option value="artikel.status|desc" <?= ($sort_by == 'artikel.status' && $sort_dir == 'desc') ? 'selected' : ''; ?>>Status Descending</option>
            </select>
        </div>
        <div class="col-md-2 col-lg-2 d-grid">
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-search"></i> Cari
            </button>
        </div>
        <div class="col-md-12 col-lg-1 text-lg-end d-grid d-lg-flex justify-content-lg-end">
            <a href="<?= base_url('/admin/artikel/add'); ?>" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Tambah Artikel
            </a>
        </div>
    </form>

    <div id="article-container"></div>
    <div id="pagination-container" class="d-flex justify-content-center mt-3"></div>

    <div id="loading-indicator" style="display:none; text-align:center; margin-top:20px;">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</div>

<?= $this->include('template/admin_footer'); ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    const articleContainer = $('#article-container');
    const paginationContainer = $('#pagination-container');
    const loadingIndicator = $('#loading-indicator');
    const filterForm = $('#filter-form');
    const searchBox = $('#search-box');
    const categoryFilter = $('#category-filter');
    const sortSelect = $('#sort-select');

    let sort_by = '<?= esc($sort_by); ?>' || 'artikel.id';
    let sort_dir = '<?= esc($sort_dir); ?>' || 'desc';

    function fetchArticles(page = 1) {
        const q = searchBox.val();
        const kategori_id = categoryFilter.val();

        loadingIndicator.show();
        articleContainer.hide();
        paginationContainer.hide();

        $.ajax({
            url: '<?= base_url('/admin/artikel'); ?>',
            type: 'GET',
            dataType: 'json',
            data: {
                q: q,
                kategori_id: kategori_id,
                page: page,
                sort_by: sort_by,
                sort_dir: sort_dir
            },
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            },
            success: function(data) {
                renderArticles(data.artikel);
                renderPagination(data.pager, data.q, data.kategori_id);
                loadingIndicator.hide();
                articleContainer.show();
                paginationContainer.show();
            },
            error: function() {
                articleContainer.html('<div class="alert alert-danger">Gagal memuat data.</div>');
                paginationContainer.empty();
                loadingIndicator.hide();
                articleContainer.show();
            }
        });
    }

    function renderArticles(articles) {
        let html = '<table class="table table-bordered align-middle">';
        html += '<thead class="table-light text-center">';
        html += '<tr>';
        html += '<th style="width: 50px;">ID</th>';
        html += '<th style="min-width: 250px;">Judul</th>';
        html += '<th style="width: 150px;">Kategori</th>';
        html += '<th style="width: 100px;">Status</th>';
        html += '<th style="width: 160px;">Aksi</th>';
        html += '</tr></thead><tbody>';

        if (articles.length > 0) {
            articles.forEach(article => {
                const statusBadge = article.status == 1
                    ? '<span class="badge bg-success">Published</span>'
                    : '<span class="badge bg-warning">Draft</span>';

                html += '<tr>';
                html += `<td class="text-center">${article.id}</td>`;
                html += `<td><strong>${escapeHtml(article.judul)}</strong><div><small class="text-muted">${escapeHtml(article.isi.substring(0, 60))}...</small></div></td>`;
                html += `<td>${escapeHtml(article.nama_kategori)}</td>`;
                html += `<td class="text-center">${statusBadge}</td>`;
                html += '<td class="text-center">';
                html += '<div class="d-flex justify-content-center gap-2 flex-wrap">';
                html += `<a href="<?= base_url('/admin/artikel/edit/'); ?>${article.id}" class="btn btn-outline-primary btn-sm" title="Ubah"><i class="bi bi-pencil-square"></i></a>`;
                html += `<a href="<?= base_url('/admin/artikel/toggle_status/'); ?>${article.id}" class="btn btn-outline-secondary btn-sm" title="${article.status == 1 ? 'Draftkan' : 'Publish'}"><i class="bi ${article.status == 1 ? 'bi-eye-slash' : 'bi-eye'}"></i></a>`;
                html += `<a href="<?= base_url('/admin/artikel/delete/'); ?>${article.id}" class="btn btn-outline-danger btn-sm" title="Hapus" onclick="return confirm('Yakin ingin menghapus?')"><i class="bi bi-trash"></i></a>`;
                html += '</div></td>';
                html += '</tr>';
            });
        } else {
            html += '<tr><td colspan="5" class="text-center text-muted">Belum ada artikel ditemukan.</td></tr>';
        }

        html += '</tbody></table>';
        articleContainer.html(html);
    }

    function renderPagination(pager, q, kategori_id) {
        if (!pager || !pager.links || pager.links.length === 0) {
            paginationContainer.empty();
            return;
        }

        let html = '<nav><ul class="pagination">';
        pager.links.forEach(link => {
            let url = link.url ? link.url : '#';
            if (url !== '#') {
                url += (url.indexOf('?') === -1 ? '?' : '&') + `q=${encodeURIComponent(q)}&kategori_id=${encodeURIComponent(kategori_id)}&sort_by=${encodeURIComponent(sort_by)}&sort_dir=${encodeURIComponent(sort_dir)}`;
            }
            const activeClass = link.active ? 'active' : '';
            html += `<li class="page-item ${activeClass}"><a href="${url}" class="page-link">${link.title}</a></li>`;
        });
        html += '</ul></nav>';
        paginationContainer.html(html);
    }

    function escapeHtml(text) {
        return text
            .replace(/&/g, "&amp;")
            .replace(/</g, "&lt;")
            .replace(/>/g, "&gt;")
            .replace(/"/g, "&quot;")
            .replace(/'/g, "&#039;");
    }

    filterForm.on('submit', function(e) {
        e.preventDefault();
        fetchArticles(1);
    });

    sortSelect.on('change', function() {
        const val = $(this).val().split('|');
        sort_by = val[0];
        sort_dir = val[1];
        fetchArticles(1);
    });

    $(document).on('click', '#pagination-container a.page-link', function(e) {
        e.preventDefault();
        const href = $(this).attr('href');
        if (href && href !== '#') {
            const urlParams = new URLSearchParams(href.split('?')[1]);
            const page = urlParams.get('page') || 1;
            fetchArticles(page);
        }
    });

    // Load data awal dengan sorting default dari controller
    fetchArticles(<?= isset($page) ? (int) $page : 1; ?>);
});
</script>
