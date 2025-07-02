<?= $this->include('template/header'); ?> 

<article class="entry">
    <h2><?= esc($artikel['judul']); ?></h2>

    <?php if (!empty($artikel['gambar']) && file_exists(FCPATH . 'gambar/' . $artikel['gambar'])): ?>
        <img src="<?= base_url('gambar/' . $artikel['gambar']); ?>" 
             alt="<?= esc($artikel['judul']); ?>" style="max-width:100%; height:auto;">
    <?php else: ?>
        <p><em>(Gambar tidak tersedia)</em></p>
    <?php endif; ?>

    <p><?= nl2br(esc($artikel['isi'])); ?></p>
</article>

<?= $this->include('template/footer'); ?> 
