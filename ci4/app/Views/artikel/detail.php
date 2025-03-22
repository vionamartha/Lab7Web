<?= $this->include('template/header'); ?>

<article class="entry">
    <h2><?= $artikel['judul']; ?></h2>

    <?php if (!empty($artikel['gambar']) && file_exists(FCPATH . 'gambar/' . $artikel['gambar'])): ?>
        <img src="<?= base_url('/gambar/' . $artikel['gambar']); ?>" 
             alt="<?= $artikel['judul']; ?>">
    <?php else: ?>
        <p><em>(Gambar tidak tersedia)</em></p>
    <?php endif; ?>

    <p><?= nl2br($artikel['isi']); ?></p>
</article>

<?= $this->include('template/footer'); ?>
