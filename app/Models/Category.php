<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name','slug','status'
    ];
    public function buys()
    {
        return $this->hasMany(Buy::class,'idCategory','id');
    }
    public function BDSTypes()
    {
        return $this->hasMany(BDSType::class,'idCategory','id');
    }
}
