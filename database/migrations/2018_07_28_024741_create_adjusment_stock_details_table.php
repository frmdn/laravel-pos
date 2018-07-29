<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdjusmentStockDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adjusment_stock_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('adjustment_stock_id');
            $table->integer('varian_barang_id');
            $table->integer('instock');
            $table->integer('actual_stock');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adjusment_stock_details');
    }
}
