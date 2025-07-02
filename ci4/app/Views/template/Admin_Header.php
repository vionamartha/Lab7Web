<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin Portal Berita</title>

    <!-- Bootstrap CSS -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    />
    
    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />

    <!-- Bootstrap Icons -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
        rel="stylesheet"
    />

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            height: 100%;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        #container {
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        .navbar-nav .nav-link {
            margin-left: 10px;
        }
    </style>
</head>
<body>
  <div id="container">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid px-4">
        <a class="navbar-brand fw-bold" href="<?= base_url('/admin'); ?>">
          Admin Portal Berita
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a
                class="nav-link <?= uri_string() == 'admin/dashboard' ? 'active' : '' ?>"
                href="<?= base_url('/admin/dashboard'); ?>"
              >Dashboard</a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link <?= uri_string() == 'admin/artikel' ? 'active' : '' ?>"
                href="<?= base_url('/admin/artikel'); ?>"
              >Artikel</a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link <?= uri_string() == 'admin/artikel/add' ? 'active' : '' ?>"
                href="<?= base_url('/admin/artikel/add'); ?>"
              >Tambah Artikel</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
