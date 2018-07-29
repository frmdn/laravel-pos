<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VarianBarang extends Model
{
    public function barang()
    {
    	return $this->belongsTo(Barang::class);
    }
}
