<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAltr extends Model
{
    protected $table="product_altributes";
  protected $fillable=['id_pro','id_altr'];
  public function products(){
    return $this->belongsTo('App\Models\Product','id_pro','id');
  }
  public function pro_altr(){
    return $this->belongsTo('App\Models\Attribute','id_altr','id');
  }
}
