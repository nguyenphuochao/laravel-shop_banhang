<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
  protected $table="altributes";
  public function pro_altr(){
    return $this->hashMany('App\Models\ProductAltr','id_altr','id');
}
}
