<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'name','content_id'
    ];
    public function buy(){
        return $this->belongsTo(Buy::class,'content_id','id');
    }

}
