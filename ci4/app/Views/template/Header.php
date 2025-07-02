<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Portal Berita</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

    <style>
        /* Reset dan dasar body flex column agar footer selalu di bawah */
        html, body {
            height: 100%;
            margin: 0; padding: 0;
            display: flex;
            flex-direction: column;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        /* Container utama flexible supaya konten mengisi ruang antara header dan footer */
        #page-content {
            flex: 1 0 auto;
            max-width: 1100px;
            width: 90%;
            margin: 40px auto 20px auto;
            padding: 25px 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }

        /* Header */
        header {
            background-color: #007bff;
            padding: 20px 0;
            border-radius: 8px 8px 0 0;
            text-align: center;
            color: white;
            font-weight: 700;
            font-size: 1.8rem;
            letter-spacing: 2px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        /* Navbar */
        nav {
            background-color: #0056b3;
            padding: 10px 0;
            text-align: center;
            border-radius: 0 0 8px 8px;
            box-shadow: inset 0 -2px 5px rgba(255,255,255,0.15);
        }

        nav a {
            color: white;
            margin: 0 18px;
            font-weight: 600;
            font-size: 1.1rem;
            text-decoration: none;
            transition: text-decoration 0.3s;
        }

        nav a:hover, nav a.active {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<header>
    Portal Berita
</header>
<nav>
    <a href="<?= base_url('/') ?>" class="<?= uri_string() === '' ? 'active' : '' ?>">Home</a>
    <a href="<?= base_url('artikel') ?>" class="<?= uri_string() === 'artikel' ? 'active' : '' ?>">Artikel</a>
    <a href="<?= base_url('about') ?>" class="<?= uri_string() === 'about' ? 'active' : '' ?>">About</a>
    <a href="<?= base_url('kontak') ?>" class="<?= uri_string() === 'kontak' ? 'active' : '' ?>">Kontak</a>
</nav>

<!-- START page content wrapper -->
<div id="page-content">
