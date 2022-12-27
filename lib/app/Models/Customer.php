<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table="customer";
   protected $fillable = [
       'id', 'id_user', 'gender', 'note'
    ];
        
     
    public function bill(){
        return $this->hasMany('App\Models\Bill','id_customer','id');
    }
    public function users(){
        return $this->belongsTo('App\\Models\User','id_user','id');
    }

}
