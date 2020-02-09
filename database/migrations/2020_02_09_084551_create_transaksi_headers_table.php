<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_headers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_ref');
            $table->string('tanggal');
            $table->double('jumlah');
            $table->string('account_card');
            $table->string('type_pembayaran');
            $table->string('kasir');
            $table->string('status');
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
        Schema::dropIfExists('transaksi_headers');
    }
}
