<?= $this->include('template/header'); ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

<style>
body {
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}
header, footer {
    background-color: #007bff;
    color: white;
    padding: 12px 0;
    text-align: center;
    font-weight: bold;
}
footer {
    position: relative;
    bottom: 0;
    width: 100%;
}
.container-ajax {
    max-width: none;
    width: 100%;
    margin: 40px 0 60px 0;
    padding: 0 30px;
    background-color: transparent;
    border-radius: 0;
    box-shadow: none;
}
#wrapper {
    display: flex;
    gap: 30px;
    align-items: flex-start;
    width: 100%;
    padding: 25px 0;
    box-sizing: border-box;
}
#main {
    flex-grow: 1;
    background-color: #fff;
    padding: 25px 30px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0,0,0,0.1);
}
#sidebar {
    width: 280px;
    background-color: #e9f1ff;
    padding: 15px 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.05);
}
.widget-box {
    margin-bottom: 25px;
}
.widget-box .title {
    font-weight: 700;
    background-color: #007bff;
    color: #fff;
    padding: 8px 14px;
    border-radius: 5px;
    margin-bottom: 12px;
    font-size: 1.1rem;
}
.widget-box ul {
    list-style: none;
    padding-left: 0;
    margin: 0;
}
.widget-box ul li {
    padding: 7px 10px;
    border: 1px solid #ccc;
    margin-bottom: 6px;
    border-radius: 5px;
    background-color: #fff;
}
.widget-box ul li a {
    text-decoration: none;
    color: #007bff;
    font-weight: 500;
}
.widget-box p {
    font-size: 0.9rem;
    line-height: 1.5;
    color: #3a3a3a;
}
table {
    width: 100%;
    border-collapse: collapse;
    font-size: 0.9rem;
}
table th, table td {
    border: 1px solid #ccc;
    padding: 8px 10px;
    text-align: left;
}
table thead {
    background-color: #c7dfff;
    font-weight: 700;
}
table tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}
.btn-warning {
    background-color: #ffc107;
    border-color: #ffc107;
    color: #212529;
}
.btn-warning:hover {
    background-color: #e0a800;
    border-color: #d39e00;
    color: #212529;
}
.btn-danger {
    background-color: #dc3545;
    border-color: #dc3545;
    color: #fff;
}
.btn-danger:hover {
    background-color: #b02a37;
    border-color: #a52834;
}
.badge.bg-success {
    background-color: #198754 !important;
    font-weight: 600;
}
.badge.bg-secondary {
    background-color: #6c757d !important;
    font-weight: 600;
}
@media (max-width: 991px) {
    #wrapper {
        flex-direction: column;
    }
    #sidebar {
        width: 100%;
        margin-top: 30px;
    }
}
/* Toast container */
#toastContainer {
    position: fixed;
    top: 20px;
    right: 20px;
    z-index: 1080;
}
</style>

<div class="container-ajax">
    <h1 class="mb-4">Data Artikel</h1>

    <div id="wrapper">
        <section id="main">
            <button id="btnTambah" class="btn btn-primary mb-3" type="button">
                <i class="bi bi-plus-lg me-1"></i> Tambah Artikel
            </button>

            <table class="table table-striped table-bordered" id="artikelTable">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </section>

        <aside id="sidebar">
            <div class="widget-box">
                <h3 class="title">Widget Header</h3>
                <ul>
                    <li><a href="#">Widget Link</a></li>
                    <li><a href="#">Widget Link</a></li>
                </ul>
            </div>
            <div class="widget-box">
                <h3 class="title">Widget Text</h3>
                <p>
                    Vestibulum lorem elit, iaculis in nisl volutpat, malesuada tincidunt arcu.
                    Proin in leo fringilla, vestibulum mi porta, faucibus felis.
                    Integer pharetra est nunc, nec pretium nunc pretium ac.
                </p>
            </div>
        </aside>
    </div>

    <!-- Modal Form Tambah/Ubah -->
    <div class="modal fade" tabindex="-1" id="modalForm" aria-labelledby="modalTitle" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="formArtikel" novalidate>
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="modalTitle">Tambah Artikel</h5>
                        <button type="button" class="btn-close" id="closeModal" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="artikelId" />
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" id="judul" required>
                            <div class="invalid-feedback">Judul wajib diisi.</div>
                        </div>
                        <div class="mb-3">
                            <label for="isi" class="form-label">Isi</label>
                            <textarea class="form-control" name="isi" id="isi" rows="3" required></textarea>
                            <div class="invalid-feedback">Isi wajib diisi.</div>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" name="status" id="status" required>
                                <option value="draft">Draft</option>
                                <option value="publish">Publish</option>
                            </select>
                            <div class="invalid-feedback">Pilih status artikel.</div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="btnSave">
                            <i class="bi bi-save2 me-1"></i> Simpan
                        </button>
                        <button type="button" class="btn btn-secondary" id="btnCancel" data-bs-dismiss="modal">
                            <i class="bi bi-x-circle me-1"></i> Batal
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Toast container -->
<div id="toastContainer" class="toast-container"></div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
$(document).ready(function() {
    const modalEl = document.getElementById('modalForm');
    const bsModal = new bootstrap.Modal(modalEl);
    const form = $('#formArtikel');
    const modalTitle = $('#modalTitle');
    const btnSave = $('#btnSave');

    function showToast(message, type = 'success') {
        const toastId = 'toast' + Date.now();
        const toastHtml = `
            <div id="${toastId}" class="toast align-items-center text-bg-${type} border-0" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">${message}</div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>`;
        $('#toastContainer').append(toastHtml);
        const toastEl = document.getElementById(toastId);
        const bsToast = new bootstrap.Toast(toastEl, { delay: 3000 });
        bsToast.show();
        toastEl.addEventListener('hidden.bs.toast', function () {
            $(this).remove();
        });
    }

    function loadData() {
        $.ajax({
            url: "<?= base_url('ajax/getData') ?>",
            method: "GET",
            dataType: "json",
            success: function(data) {
                let tableBody = "";
                data.forEach(function(row) {
                    let statusLabel = row.status == 1 ?
                        '<span class="badge bg-success">Publish</span>' :
                        '<span class="badge bg-secondary">Draft</span>';

                    let statusToggle = `<input type="checkbox" class="status-toggle form-check-input" data-id="${row.id}" ${row.status == 1 ? 'checked' : ''}>`;

                    tableBody += `<tr>
                        <td>${row.id}</td>
                        <td>${row.judul}</td>
                        <td>${statusToggle} ${statusLabel}</td>
                        <td>
                            <button class="btn btn-warning btn-sm btn-edit me-2" data-id="${row.id}">
                                <i class="bi bi-pencil-square"></i> Edit
                            </button>
                            <button class="btn btn-danger btn-sm btn-delete" data-id="${row.id}">
                                <i class="bi bi-trash"></i> Delete
                            </button>
                        </td>
                    </tr>`;
                });
                $('#artikelTable tbody').html(tableBody);
            },
            error: function() {
                $('#artikelTable tbody').html('<tr><td colspan="4" class="text-center">Gagal mengambil data.</td></tr>');
            }
        });
    }

    form.on('submit', function(e) {
        e.preventDefault();
        if (!this.checkValidity()) {
            e.stopPropagation();
            form.addClass('was-validated');
            return;
        }

        const id = $('#artikelId').val();
        const url = id ? "<?= base_url('ajax/update/') ?>" + id : "<?= base_url('ajax/create') ?>";

        $.ajax({
            url: url,
            method: "POST",
            data: form.serialize(),
            dataType: "json",
            success: function(response) {
                showToast(response.message, 'success');
                bsModal.hide();
                form.removeClass('was-validated');
                loadData();
            },
            error: function() {
                showToast('Terjadi kesalahan saat menyimpan data.', 'danger');
            }
        });
    });

    $('#btnTambah').click(function() {
        form.trigger('reset');
        form.removeClass('was-validated');
        $('#artikelId').val('');
        modalTitle.text('Tambah Artikel');
        btnSave.html('<i class="bi bi-save2 me-1"></i> Simpan');
        bsModal.show();
    });

    $(document).on('click', '.btn-edit', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= base_url('ajax/getArtikel/') ?>" + id,
            method: "GET",
            dataType: "json",
            success: function(response) {
                if (response.status === 'OK') {
                    const artikel = response.data;
                    $('#artikelId').val(artikel.id);
                    $('#judul').val(artikel.judul);
                    $('#isi').val(artikel.isi);
                    $('#status').val(artikel.status == 1 ? 'publish' : 'draft');
                    modalTitle.text('Ubah Artikel');
                    btnSave.html('<i class="bi bi-pencil-square me-1"></i> Ubah');
                    form.removeClass('was-validated');
                    bsModal.show();
                } else {
                    showToast('Data artikel tidak ditemukan', 'danger');
                }
            },
            error: function() {
                showToast('Gagal mengambil data artikel', 'danger');
            }
        });
    });

    $(document).on('click', '.btn-delete', function() {
        if (!confirm('Apakah Anda yakin ingin menghapus artikel ini?')) return;
        const id = $(this).data('id');
        $.ajax({
            url: "<?= base_url('ajax/delete/') ?>" + id,
            method: "DELETE",
            success: function(response) {
                if (response.status === 'OK') {
                    showToast('Artikel berhasil dihapus', 'success');
                    loadData();
                } else {
                    showToast('Gagal menghapus data.', 'danger');
                }
            },
            error: function() {
                showToast('Terjadi kesalahan saat menghapus data.', 'danger');
            }
        });
    });

    // Toggle status langsung di tabel
    $(document).on('change', '.status-toggle', function() {
        const id = $(this).data('id');
        const newStatus = $(this).is(':checked') ? 'publish' : 'draft';

        // Ambil judul dari baris tabel agar update lengkap
        const row = $(this).closest('tr');
        const judul = row.find('td:nth-child(2)').text().trim();

        // Ambil isi dari modal jika terbuka atau kosong
        const isi = ''; 

        $.ajax({
            url: "<?= base_url('ajax/update/') ?>" + id,
            method: "POST",
            data: {
                judul: judul,
                isi: isi,
                status: newStatus
            },
            success: function() {
                showToast('Status berhasil diubah.', 'success');
                loadData();
            },
            error: function() {
                showToast('Gagal mengubah status.', 'danger');
                loadData();
            }
        });
    });

    loadData();
});
</script>

<?= $this->include('template/footer'); ?>
