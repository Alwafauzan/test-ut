<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use App\Models\Produk;
use Illuminate\Http\Request;

class TambahLeadController extends Controller
{
    public function index()
    {
        $sales = Sales::all();
        $produk = Produk::all();
        return view('tambah_lead', compact('sales', 'produk'));
    }

    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            // Aturan validasi untuk setiap field
        ]);

        // Simpan data ke database
        // ...

        return redirect()->route('tambah_lead.index')->with('success', 'Data lead berhasil disimpan');
    }
}
