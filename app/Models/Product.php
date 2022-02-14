<?php

namespace App\Models;

use App\Http\Controllers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];


    protected  $table ='product';
    public function accessories(){
        return $this->belongsToMany(Accessories::class,'customer_accessories','user_id','accessories_id');
    }

}
