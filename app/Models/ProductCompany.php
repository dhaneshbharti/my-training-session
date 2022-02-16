<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 class ProductCompany extends Model
{
    use HasFactory;

    protected $table="product_company";

    public function ProductAccessories(){
        return $table->belongsToMany(ProductAccessories::class);
    }
}
