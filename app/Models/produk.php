<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    public function kategori(){
        return $this->belongsTo(Kategori::class, "kategori_id");
    }
    public function curr(){
        return $this->belongsTo(Curr::class, "currency_id");
    }
}
