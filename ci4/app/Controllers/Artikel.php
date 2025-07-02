<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use App\Models\KategoriModel;

class Artikel extends BaseController
{
    public function admin_index()
    {
        $title = 'Daftar Artikel (Admin)';
        $model = new ArtikelModel();

        $q = $this->request->getVar('q') ?? '';
        $kategori_id = $this->request->getVar('kategori_id') ?? '';
        $page = $this->request->getVar('page') ?? 1;
        $sort_by = $this->request->getVar('sort_by') ?? 'artikel.id';
        $sort_dir = $this->request->getVar('sort_dir') ?? 'desc';

        $allowedSorts = ['artikel.id', 'artikel.judul', 'kategori.nama_kategori', 'artikel.status'];
        $allowedDirs = ['asc', 'desc'];

        if (!in_array($sort_by, $allowedSorts)) {
            $sort_by = 'artikel.id';
        }
        if (!in_array(strtolower($sort_dir), $allowedDirs)) {
            $sort_dir = 'desc';
        }

        $artikel = $model->getArtikelDenganKategori(10, $page, $q, $kategori_id, $sort_by, $sort_dir);
        $pager = $model->pager;

        $data = [
            'title' => $title,
            'q' => $q,
            'kategori_id' => $kategori_id,
            'artikel' => $artikel,
            'pager' => $pager,
            'page' => $page,
            'sort_by' => $sort_by,
            'sort_dir' => $sort_dir,
        ];

        if ($this->request->isAJAX()) {
            return $this->response->setJSON($data);
        } else {
            $kategoriModel = new KategoriModel();
            $data['kategori'] = $kategoriModel->findAll();
            return view('artikel/admin_index', $data);
        }
    }

    public function add()
    {
        $kategoriModel = new KategoriModel();

        if ($this->request->getMethod() === 'post') {
            $rules = [
                'judul' => 'required',
                'isi' => 'required',
                'id_kategori' => 'required|integer',
                'status' => 'required|in_list[0,1]',
            ];

            if ($this->validate($rules)) {
                $model = new ArtikelModel();
                $model->insert([
                    'judul' => $this->request->getPost('judul'),
                    'isi' => $this->request->getPost('isi'),
                    'slug' => url_title($this->request->getPost('judul'), '-', true),
                    'id_kategori' => $this->request->getPost('id_kategori'),
                    'status' => (int) $this->request->getPost('status'),
                ]);
                return redirect()->to('/admin/artikel');
            }

            $data = [
                'title' => 'Tambah Artikel',
                'kategori' => $kategoriModel->findAll(),
                'validation' => $this->validator,
                'judul' => $this->request->getPost('judul'),
                'isi' => $this->request->getPost('isi'),
                'id_kategori' => $this->request->getPost('id_kategori'),
                'status' => $this->request->getPost('status'),
            ];

            return view('artikel/form_add', $data);
        }

        $data = [
            'title' => 'Tambah Artikel',
            'kategori' => $kategoriModel->findAll(),
            'validation' => \Config\Services::validation(),
            'judul' => '',
            'isi' => '',
            'id_kategori' => '',
            'status' => '1',
        ];

        return view('artikel/form_add', $data);
    }

    public function edit($id)
    {
        $model = new ArtikelModel();
        $artikel = $model->find($id);

        if (!$artikel) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Artikel tidak ditemukan');
        }

        if ($this->request->getMethod() === 'post') {
            $rules = [
                'judul' => 'required',
                'id_kategori' => 'required|integer',
                'status' => 'required|in_list[0,1]',
            ];

            if (!$this->validate($rules)) {
                $kategoriModel = new KategoriModel();
                $data = [
                    'title' => 'Edit Artikel',
                    'artikel' => $artikel,
                    'kategori' => $kategoriModel->findAll(),
                    'validation' => $this->validator,
                    'judul' => $this->request->getPost('judul'),
                    'isi' => $this->request->getPost('isi'),
                    'id_kategori' => $this->request->getPost('id_kategori'),
                    'status' => $this->request->getPost('status'),
                ];
                return view('artikel/form_edit', $data);
            }

            $model->update($id, [
                'judul' => $this->request->getPost('judul'),
                'isi' => $this->request->getPost('isi'),
                'id_kategori' => $this->request->getPost('id_kategori'),
                'status' => (int) $this->request->getPost('status'),
            ]);

            return redirect()->to('/admin/artikel');
        }

        $kategoriModel = new KategoriModel();
        $data = [
            'title' => 'Edit Artikel',
            'artikel' => $artikel,
            'kategori' => $kategoriModel->findAll(),
            'validation' => \Config\Services::validation(),
            'judul' => $artikel['judul'],
            'isi' => $artikel['isi'],
            'id_kategori' => $artikel['id_kategori'],
            'status' => $artikel['status'],
        ];

        return view('artikel/form_edit', $data);
    }

    public function toggle_status($id)
    {
        $model = new ArtikelModel();
        $artikel = $model->find($id);

        if (!$artikel) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Artikel tidak ditemukan');
        }

        $newStatus = ($artikel['status'] == 1) ? 0 : 1;
        $model->update($id, ['status' => $newStatus]);

        return redirect()->to('/admin/artikel');
    }

    public function delete($id)
    {
        $model = new ArtikelModel();
        $artikel = $model->find($id);

        if (!$artikel) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Artikel tidak ditemukan');
        }

        $model->delete($id);
        return redirect()->to('/admin/artikel');
    }

    public function view($slug)
    {
        $model = new ArtikelModel();
        $data['artikel'] = $model->where('slug', $slug)->first();

        if (empty($data['artikel'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the article.');
        }

        $data['title'] = $data['artikel']['judul'];
        return view('artikel/detail', $data);
    }
}
