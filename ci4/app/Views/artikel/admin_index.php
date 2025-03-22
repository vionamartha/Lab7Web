<?= $this->include('template/admin_header'); ?>

<!-- Isi Konten -->
<div class="container">
    <h2>Daftar Artikel</h2>
    <table class="table">
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>Judul</th>
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
                    <td colspan="4" class="text-center">Belum ada data.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?= $this->include('template/admin_footer'); ?>
