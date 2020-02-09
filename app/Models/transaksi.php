<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    public function user(){
        return $this->belongsTo("\Admin\User", 'user_id');
    }
}
