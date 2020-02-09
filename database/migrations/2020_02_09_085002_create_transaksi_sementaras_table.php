<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiSementarasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_sementaras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('produk_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('jumlah');
            $table->bigInteger('sub_total');
            $table->bigInteger('status')->default('0');
            $table->string('barcode');
            $table->string('no_ref');
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
        Schema::dropIfExists('transaksi_sementaras');
    }
}
