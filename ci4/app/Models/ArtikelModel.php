<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table = 'artikel';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul', 'isi', 'slug', 'id_kategori', 'status'];

    public function getArtikelDenganKategori($perPage = 10, $page = 1, $q = '', $kategori_id = '', $sort_by = 'artikel.id', $sort_dir = 'desc')
    {
        $builder = $this->select('artikel.*, kategori.nama_kategori')
                        ->join('kategori', 'kategori.id_kategori = artikel.id_kategori');

        if ($q !== '') {
            $builder->like('artikel.judul', $q);
        }

        if ($kategori_id !== '') {
            $builder->where('artikel.id_kategori', $kategori_id);
        }

        $builder->orderBy($sort_by, $sort_dir);

        return $builder->paginate($perPage, 'default', $page);
    }
}
