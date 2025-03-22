<?php
namespace App\Cells;

use App\Models\ArtikelModel;

class ArtikelTerkini
{
    public function tampil($kategori = null)
    {
        $model = new ArtikelModel();
        $builder = $model->orderBy('created_at', 'DESC')->limit(8);

        if ($kategori) {
            $builder->where('kategori', $kategori);
        }

        $artikel = $builder->findAll();
        return view('components/artikel_terkini', ['artikel' => $artikel]);
    }
}
