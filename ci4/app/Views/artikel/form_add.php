<?= $this->include('template/admin_header'); ?>

<div class="container mt-4">
    <h2><?= $title; ?></h2>
    <form action="" method="post">
        <div class="mb-3">
            <label for="judul" class="form-label">Judul Artikel</label>
            <input type="text" name="judul" id="judul" class="form-control" value="<?= htmlspecialchars($judul); ?>" required>
        </div>
        <div class="mb-3">
            <label for="isi" class="form-label">Isi Artikel</label>
            <textarea name="isi" id="isi" cols="50" rows="10" class="form-control"><?= htmlspecialchars($isi); ?></textarea>
        </div>
        <div class="mb-3">
            <label for="id_kategori" class="form-label">Kategori</label>
            <select name="id_kategori" id="id_kategori" class="form-control" required>
                <option value="" disabled <?= $id_kategori == '' ? 'selected' : ''; ?>>-- Pilih Kategori --</option>
                <?php foreach ($kategori as $k): ?>
                    <option value="<?= $k['id_kategori']; ?>" <?= ($id_kategori == $k['id_kategori']) ? 'selected' : ''; ?>>
                        <?= $k['nama_kategori']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary mb-4">Kirim</button>
    </form>
</div>

<?= $this->include('template/admin_footer'); ?>
