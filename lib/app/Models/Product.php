<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table="products";
    protected $fillable = ['pro_name', 'id_type', 'description', 'parameter', 'unit_price'];
    public function product_type(){
        return $this->belongsTo('App\Models\ProductType','id_type','id');
    }

    public function bill_detail(){
        return $this->hasMany('App\Models\BillDetail','id_product','id');
    }
    public function product_altr(){
        return $this->hasMany('App\Models\ProductAltr','id_pro','id');
    }
     public function khuyen_mai(){
        return $this->belongsTo('App\Models\KhuyenMai','id_pro','id');
    }
}
