<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    public function kategori()
    {
    	return $this->belongsTo(Kategori::class);
    }
    public function varian()
    {
    	return $this->hasMany(VarianBarang::class);
    }
}
