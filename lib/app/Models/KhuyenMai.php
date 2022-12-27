<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhuyenMai extends Model
{
   protected $table="khuyen_mai";
}
 public function product(){
        return $this->belongsTo('App\Models\Product','id_pro','id');
    }
