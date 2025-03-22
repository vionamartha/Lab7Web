<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Halaman Utama',
            'content' => 'Selamat datang di web praktikum CodeIgniter 4!'
        ];

        return view('home', $data);
    }
}
