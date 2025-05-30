<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categories extends Model
{
    use HasFactory , SoftDeletes;
    protected $guarded = [];

    public function Produits(){
        return $this->hasMany(Produits::class);
    }

}
