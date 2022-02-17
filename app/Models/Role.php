<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table="roles";
    public function roles(){
        return $this->belongsToMany(Roles::class,'customer_accessories','user_id','accessories_id');
    }
}
