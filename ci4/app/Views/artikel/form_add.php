<?= $this->include('template/admin_header'); ?>

<div class="container mt-4 pb-5">
    <h2><?= esc($title); ?></h2>

    <form action="<?= base_url('admin/artikel/add') ?>" method="post">
        <?= csrf_field(); ?>

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" name="judul" id="judul" class="form-control" value="<?= old('judul', $judul ?? ''); ?>" required>
            <?php if (isset($validation) && $validation->hasError('judul')): ?>
                <div class="text-danger"><?= $validation->getError('judul'); ?></div>
            <?php endif; ?>
        </div>

        <div class="mb-3">
            <label for="isi" class="form-label">Isi</label>
            <textarea name="isi" id="isi" cols="50" rows="10" class="form-control" required><?= old('isi', $isi ?? ''); ?></textarea>
            <?php if (isset($validation) && $validation->hasError('isi')): ?>
                <div class="text-danger"><?= $validation->getError('isi'); ?></div>
            <?php endif; ?>
        </div>

        <div class="mb-3">
            <label for="id_kategori" class="form-label">Kategori</label>
            <select name="id_kategori" id="id_kategori" class="form-select" required>
                <option value="">-- Pilih Kategori --</option>
                <?php foreach ($kategori as $kat): ?>
                    <option value="<?= $kat['id_kategori']; ?>" <?= (old('id_kategori', $id_kategori ?? '') == $kat['id_kategori']) ? 'selected' : ''; ?>>
                        <?= esc($kat['nama_kategori']); ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <?php if (isset($validation) && $validation->hasError('id_kategori')): ?>
                <div class="text-danger"><?= $validation->getError('id_kategori'); ?></div>
            <?php endif; ?>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select" required>
                <option value="1" <?= (old('status', $status ?? '') == '1') ? 'selected' : ''; ?>>Published</option>
                <option value="0" <?= (old('status', $status ?? '') == '0') ? 'selected' : ''; ?>>Draft</option>
            </select>
            <?php if (isset($validation) && $validation->hasError('status')): ?>
                <div class="text-danger"><?= $validation->getError('status'); ?></div>
            <?php endif; ?>
        </div>

        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
</div>

<?= $this->include('template/admin_footer'); ?>
