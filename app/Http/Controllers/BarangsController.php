<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Kategori;


class BarangsController extends Controller
{
    public function index()
    {
    	$data = Barang::all();
        $kategori = Kategori::all();
    	return view('barang.index', compact('data','kategori'));
    }

    public function show($id)
    {
    	$data = Barang::find($id);
    	return view('barang.show', compact('data'));
    }

    public function store(Request $request)
    {
        $data = new Barang;

        $data->name = request('name');
        $data->kategori_id = request('kategori_id');
        $data->save();

        return redirect('/barangs');
    }
}
