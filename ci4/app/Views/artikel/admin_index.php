<?= $this->include('template/admin_header'); ?>

<!-- Isi Konten -->
<div class="container">
    <h2><?= $title; ?></h2>

    <!-- Form Search di sini -->
    <form method="get" class="form-search mb-3">
        <input type="text" name="q" value="<?= htmlspecialchars($q); ?>" placeholder="Cari data" class="form-control d-inline w-auto">

        <select name="kategori_id" class="form-control d-inline w-auto ms-2">
            <option value="">Semua Kategori</option>
            <?php foreach ($kategori as $k): ?>
                <option value="<?= $k['id_kategori']; ?>" <?= ($kategori_id == $k['id_kategori']) ? 'selected' : ''; ?>><?= $k['nama_kategori']; ?></option>
            <?php endforeach; ?>
        </select>

        <input type="submit" value="Cari" class="btn btn-primary ms-2">
    </form>

    <table class="table">
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Kategori</th> <!-- Tambahan -->
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($artikel): ?>
                <?php foreach ($artikel as $row): ?>
                    <tr>
                        <td><?= $row['id']; ?></td>
                        <td>
                            <b><?= $row['judul']; ?></b>
                            <p><small><?= substr($row['isi'], 0, 50); ?></small></p>
                        </td>
                        <td><?= $row['nama_kategori']; ?></td> <!-- Tambahan -->
                        <td>
                            <span class="badge bg-<?= ($row['status'] == 0) ? 'warning' : 'success'; ?>">
                                <?= ($row['status'] == 0) ? 'Draft' : 'Published'; ?>
                            </span>
                        </td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="<?= base_url('/admin/artikel/edit/' . $row['id']); ?>">
                                <i class="fas fa-edit"></i> Ubah
                            </a>
                            <a class="btn btn-sm btn-danger" onclick="return confirm('Yakin menghapus data?');" 
                               href="<?= base_url('/admin/artikel/delete/' . $row['id']); ?>">
                                <i class="fas fa-trash"></i> Hapus
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" class="text-center">Belum ada data.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <!-- pagination -->
    <div class="mt-3">
        <?= $pager->only(['q', 'kategori_id'])->links(); ?>
    </div>
</div>

<?= $this->include('template/admin_footer'); ?>
