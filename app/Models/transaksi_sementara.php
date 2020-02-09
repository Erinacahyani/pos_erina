<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi_sementara extends Model
{
    public function produk(){
    return $this->belongsTo(Produk::class, "produk_id");
    }
}
