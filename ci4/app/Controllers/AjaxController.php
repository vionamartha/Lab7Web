<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ArtikelModel;

class AjaxController extends Controller
{
    public function index()
    {
        $data = ['title' => 'Halaman AJAX Artikel'];
        return view('ajax/index', $data);
    }

    public function getData()
    {
        $model = new ArtikelModel();
        $data = $model->findAll();
        return $this->response->setJSON($data);
    }

    public function getArtikelById($id)
    {
        $model = new ArtikelModel();
        $data = $model->find($id);

        if ($data) {
            return $this->response->setJSON(['status' => 'OK', 'data' => $data]);
        } else {
            return $this->response->setJSON(['status' => 'Error', 'message' => 'Artikel tidak ditemukan'], 404);
        }
    }

    public function create()
    {
        $model = new ArtikelModel();
        $status = strtolower(trim($this->request->getPost('status')));
        $statusInt = ($status === 'publish') ? 1 : 0;

        $data = [
            'judul' => $this->request->getPost('judul'),
            'isi' => $this->request->getPost('isi'),
            'status' => $statusInt,
        ];

        $model->insert($data);
        return $this->response->setJSON(['status' => 'OK', 'message' => 'Artikel berhasil ditambah']);
    }

    public function update($id)
    {
        $model = new ArtikelModel();
        $status = strtolower(trim($this->request->getPost('status')));
        $statusInt = ($status === 'publish') ? 1 : 0;

        $data = [
            'judul' => $this->request->getPost('judul'),
            'isi' => $this->request->getPost('isi'),
            'status' => $statusInt,
        ];

        $model->update($id, $data);
        return $this->response->setJSON(['status' => 'OK', 'message' => 'Artikel berhasil diubah']);
    }

    public function delete($id)
    {
        $model = new ArtikelModel();
        $model->delete($id);
        return $this->response->setJSON(['status' => 'OK']);
    }
}
