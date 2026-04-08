<?php

namespace App\Cells;

use CodeIgniter\View\Cell;
use App\Models\ArtikelModel;

class ArtikelTerkini
{
    public function tampil($kategori = null)
    {
        $model = new ArtikelModel();

        if ($kategori) {
            $artikel = $model
                ->where('kategori', $kategori)
                ->orderBy('id', 'DESC')
                ->limit(5)
                ->findAll();
        } else {
            $artikel = $model
                ->orderBy('id', 'DESC')
                ->limit(5)
                ->findAll();
        }

        return view('components/artikel_terkini', [
            'artikel' => $artikel
        ]);
    }
}