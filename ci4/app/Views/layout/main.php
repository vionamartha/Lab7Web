<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'My Website' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
</head>
<body>
    <div id="container">
        <!-- Header -->
        <header>
            <h1>Layout Sederhana</h1>
        </header>

        <!-- Navigation -->
        <nav>
            <a href="<?= base_url('/'); ?>" class="active">Home</a>
            <a href="<?= base_url('/artikel'); ?>">Artikel</a>
            <a href="<?= base_url('/about'); ?>">About</a>
            <a href="<?= base_url('/contact'); ?>">Kontak</a>
        </nav>

        <section id="wrapper">
            <!-- Main Content -->
            <section id="main">
                <?= $this->renderSection('content') ?>
            </section>

            <!-- Sidebar -->
            <aside id="sidebar" >
            <?= view_cell('App\\Cells\\ArtikelTerkini::tampil', ['kategori' => 'Sport']) ?>

           <!-- Widget Header -->
            <div class="card mb-3 widget-box">
                <div class="card-header">Widget Header</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Widget Link</li>
                    <li class="list-group-item">Widget Link</li>
                </ul>
            </div>

            <!-- Widget Text -->
            <div class="card mb-3 widget-box">
                <div class="card-header">Widget Text</div>
                <div class="card-body">
                    <p class="card-text">
                        Vestibulum lorem elit, iaculis in nisl volutpat, malesuada tincidunt arcu.
                        Proin in leo fringilla, vestibulum mi porta, faucibus felis.
                        Integer pharetra est nunc, nec pretium nunc pretium ac.
                    </p>
                </div>
            </div>

            </aside>
        </section>

       <!-- Footer -->
        <footer class="bg-dark text-white py-3">
            <div class="container text-center">
                <p class="mb-0">&copy; 2025 - Universitas Pelita Bangsa</p>
            </div>
        </footer>
    </div>
</body>
</html>
