<?php
namespace App\Controllers;

use App\Models\ArtikelModel;
use App\Models\KategoriModel;

class Artikel extends BaseController
{
    public function index()
    {
        $title = 'Daftar Artikel';
        $model = new ArtikelModel();
        $artikel = $model->getArtikelDenganKategori(); // Use the new method

        return view('artikel/index', compact('artikel', 'title'));
    }

    public function admin_index()
    {
        $title = 'Daftar Artikel (Admin)';
        $model = new ArtikelModel();

        $q = $this->request->getVar('q') ?? '';
        $kategori_id = $this->request->getVar('kategori_id') ?? '';

        $data = [
            'title' => $title,
            'q' => $q,
            'kategori_id' => $kategori_id,
        ];

        $builder = $model->table('artikel')
                    ->select('artikel.*, kategori.nama_kategori')
                    ->join('kategori', 'kategori.id_kategori = artikel.id_kategori');

        if ($q != '') {
            $builder->like('artikel.judul', $q);
        }
        if ($kategori_id != '') {
            $builder->where('artikel.id_kategori', $kategori_id);
        }

        $data['artikel'] = $builder->paginate(10);
        $data['pager'] = $model->pager;

        $kategoriModel = new KategoriModel();
        $data['kategori'] = $kategoriModel->findAll();

        return view('artikel/admin_index', $data);
    }

    public function add()
    {
        if ($this->request->getMethod() == 'post' && $this->validate([
            'judul' => 'required',
            'id_kategori' => 'required|integer'
        ])) {
            $kategoriModel = new KategoriModel();
            $kategori = $kategoriModel->find($this->request->getPost('id_kategori'));

            $model = new ArtikelModel();
            $model->insert([
                'judul' => $this->request->getPost('judul'),
                'isi' => $this->request->getPost('isi'),
                'slug' => url_title($this->request->getPost('judul')),
                'id_kategori' => $this->request->getPost('id_kategori'),
                'kategori' => $kategori ? $kategori['nama_kategori'] : null,
                'gambar' => null,
                'status' => 1,  // langsung aktif supaya muncul
                'created_at' => date('Y-m-d H:i:s'),
            ]);
            return redirect()->to('/admin/artikel');
        } else {
            $kategoriModel = new KategoriModel();
            $data = [
                'title' => 'Tambah Artikel',
                'kategori' => $kategoriModel->findAll(),
                'judul' => old('judul') ?? '',
                'isi' => old('isi') ?? '',
                'id_kategori' => old('id_kategori') ?? '',
            ];

            return view('artikel/form_add', $data);
        }
    }


    public function edit($id)
    {
        $model = new ArtikelModel();

        if ($this->request->getMethod() == 'post' && $this->validate([
            'judul' => 'required',
            'id_kategori' => 'required|integer'
        ])) {
            $kategoriModel = new KategoriModel();
            $kategori = $kategoriModel->find($this->request->getPost('id_kategori'));

            $model->update($id, [
                'judul' => $this->request->getPost('judul'),
                'isi' => $this->request->getPost('isi'),
                'id_kategori' => $this->request->getPost('id_kategori'),
                'kategori' => $kategori ? $kategori['nama_kategori'] : null,
            ]);
            return redirect()->to('/admin/artikel');
        } else {
            $artikel = $model->find($id);
            $kategoriModel = new KategoriModel();
            $data = [
                'title' => 'Edit Artikel',
                'kategori' => $kategoriModel->findAll(),
                'artikel' => $artikel,
            ];

            return view('artikel/form_edit', $data);
        }
    }

    public function delete($id)
    {
        $model = new ArtikelModel();
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
