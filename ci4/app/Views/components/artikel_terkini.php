<h5 class="sidebar-title fw-semibold mb-3">Artikel Terkini</h5>

<div class="list-group list-group-flush">
    <?php if (!empty($artikel)): ?>
        <?php foreach ($artikel as $row): ?>
            <div class="list-group-item px-2 py-2">
                <a href="<?= base_url('/artikel/' . $row['slug']) ?>" class="fw-semibold text-decoration-none d-block mb-1" style="font-size: 0.9rem;">
                    <?= esc($row['judul']) ?>
                </a>
                <small class="text-muted"><?= date('d M Y', strtotime($row['created_at'])) ?></small>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <div class="list-group-item text-muted">Belum ada artikel.</div>
    <?php endif; ?>
</div>
