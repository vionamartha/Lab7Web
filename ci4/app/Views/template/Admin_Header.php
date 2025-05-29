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
      .navbar {
        margin-bottom: 20px;
      }
    </style>
</head>
<body>
  <div id="container">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <a class="navbar-brand" href="#">Admin Portal Berita</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a
                class="nav-link active"
                href="<?= base_url('/admin/dashboard'); ?>"
                >Dashboard</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/admin/artikel'); ?>"
                >Artikel</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="<?= base_url('/admin/artikel/add'); ?>"
                >Tambah Artikel</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
