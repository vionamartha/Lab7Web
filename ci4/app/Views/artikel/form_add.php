<?= $this->include('template/admin_header'); ?>

<div class="container mt-4">
    <h2><?= $title; ?></h2>
    <form action="" method="post">
        <div class="mb-3">
            <label for="judul" class="form-label">Judul Artikel</label>
            <input type="text" name="judul" id="judul" class="form-control">
        </div>
        <div class="mb-3">
            <label for="isi" class="form-label">Isi Artikel</label>
            <textarea name="isi" id="isi" cols="50" rows="10" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
</div>

<?= $this->include('template/admin_footer'); ?>
