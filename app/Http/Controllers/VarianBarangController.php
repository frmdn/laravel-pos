<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VarianBarang;
use App\Barang;
use App\Kategori;

class VarianBarangController extends Controller
{
	public function index()
	{
		$data = VarianBarang::all();
		$barang = Barang::all();
		return view('barang.varian', compact('data','barang'));
	}

	public function show($id)
	{
		$data = VarianBarang::find($id);
		return view('barang.variandetail', compact('data'));
	}

	public function store(Request $request)
	{
		$data = new VarianBarang;

		$data->barang_id = request('barang_id');
		$data->outlet_id = 0;
		$data->name = request('name');
		$data->sku = request('sku');
		$data->price = request('price');
		$data->save();

		return redirect('/varians');
	}
}
