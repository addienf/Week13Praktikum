<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;
use Barryvdh\DomPDF\Facade\Pdf;

class ProdukController extends Controller
{
    //
    public function index()
    {
        $data['produk'] = produk::join('kategori', 'produk.id_kategori', '=', 'kategori.id_kategori')
            ->select('produk.*', 'kategori.deskripsi')
            ->get();
        return view('content.dashboard-produk', $data);
    }

    public function create()
    {
        $data['kategori'] = kategori::all();
        return view('Content.dashboard-tambah-produk', $data);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        produk::create($input);
        return redirect('dashboard-produk');
    }

    public function print()
    {
        $data['produk'] = produk::join(
            'kategori',
            'produk.id_kategori',
            '=',
            'kategori.id_kategori'
        )
            ->select('produk.*', 'kategori.deskripsi')
            ->get();

        $pdf = PDF::loadView('Content.print-pdf', $data);
        return $pdf->stream();
    }
}
