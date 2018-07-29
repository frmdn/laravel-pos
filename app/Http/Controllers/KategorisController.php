<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategorisController extends Controller
{
    public function index()
    {
    	$data = Kategori::all();
    	return view('kategori.index', compact('data'));
    }

    public function show($id)
    {
    	$data = Kategori::find($id);
    	return view('kategori.show', compact('data'));
    }

    public function store(Request $request)
    {
        $data = new Kategori;

        $data->name = request('name');
        $data->outlet_id = 0;
        $data->save();

        return redirect('/kategoris');
    }
}
