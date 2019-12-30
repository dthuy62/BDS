<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BDSType extends Model
{

    protected $fillable = [
        'idCategory','name','slug','status'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class,'idCategory','id');
    }
    public function buy()
    {
        return $this->hasMany(BUy::class,'idBDSType','id');
    }
}
