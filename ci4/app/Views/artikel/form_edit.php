<?= $this->include('template/admin_header'); ?>

<div class="container-fluid mt-4 mb-5 px-4">
    <h2 class="mb-4"><?= esc($title); ?></h2>

    <form action="<?= base_url('admin/artikel/add') ?>" method="post">
        <?= csrf_field(); ?>

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" name="judul" id="judul" class="form-control"
                   value="<?= old('judul', isset($judul) ? $judul : ''); ?>" required>
            <?php if (isset($validation) && $validation->hasError('judul')): ?>
                <small class="text-danger"><?= $validation->getError('judul'); ?></small>
            <?php endif; ?>
        </div>

        <div class="mb-3">
            <label for="isi" class="form-label">Isi</label>
            <textarea name="isi" id="isi" rows="6" class="form-control" required><?= old('isi', isset($isi) ? $isi : ''); ?></textarea>
            <?php if (isset($validation) && $validation->hasError('isi')): ?>
                <small class="text-danger"><?= $validation->getError('isi'); ?></small>
            <?php endif; ?>
        </div>

        <div class="mb-3">
            <label for="id_kategori" class="form-label">Kategori</label>
            <select name="id_kategori" id="id_kategori" class="form-select" required>
                <option value="">-- Pilih Kategori --</option>
                <?php foreach ($kategori as $kat): ?>
                    <option value="<?= $kat['id_kategori']; ?>" <?= (old('id_kategori', isset($id_kategori) ? $id_kategori : '') == $kat['id_kategori']) ? 'selected' : ''; ?>>
                        <?= esc($kat['nama_kategori']); ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <?php if (isset($validation) && $validation->hasError('id_kategori')): ?>
                <small class="text-danger"><?= $validation->getError('id_kategori'); ?></small>
            <?php endif; ?>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select" required>
                <option value="1" <?= (old('status', isset($status) ? $status : '') == '1') ? 'selected' : ''; ?>>Published</option>
                <option value="0" <?= (old('status', isset($status) ? $status : '') == '0') ? 'selected' : ''; ?>>Draft</option>
            </select>
            <?php if (isset($validation) && $validation->hasError('status')): ?>
                <small class="text-danger"><?= $validation->getError('status'); ?></small>
            <?php endif; ?>
        </div>

        <button type="submit" class="btn btn-success">
            <i class="bi bi-save"></i> Simpan Perubahan
        </button>
        <a href="<?= base_url('/admin/artikel'); ?>" class="btn btn-secondary">Batal</a>
    </form>
</div>

<?= $this->include('template/admin_footer'); ?>
