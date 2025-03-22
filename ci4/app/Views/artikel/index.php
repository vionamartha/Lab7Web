<?= $this->include('template/header'); ?>

<?php if ($artikel): ?>
    <?php foreach ($artikel as $row): ?>
        <article class="entry">
            <h2>
                <a href="<?= base_url('/artikel/' . $row['slug']); ?>">
                    <?= $row['judul']; ?>
                </a>
            </h2>

            <?php if (!empty($row['gambar']) && file_exists(FCPATH . 'gambar/' . $row['gambar'])): ?>
                <img src="<?= base_url('/gambar/' . $row['gambar']); ?>" alt="<?= $row['judul']; ?>">
            <?php else: ?>
                <p><em>(Gambar tidak tersedia)</em></p>
            <?php endif; ?>

            <p><?= nl2br($row['isi']); ?></p> 
        </article>
        <hr class="divider" />
    <?php endforeach; ?>
<?php else: ?>
    <article class="entry">
        <h2>Belum ada data.</h2>
    </article>
<?php endif; ?>

<?= $this->include('template/footer'); ?>
