<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
   protected $table="type_products";
   public function product(){
       return $this->hashMany('App\Models\Product','id_type','id');
   }
}
