<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{

            protected $fillable = [
            'idCategory',
            'idBDSType',
            'address',
            'title',
            'desc',
            'dt',
            'image',
            'price',
            'slug',
            'status'
            ];
        public function category()
        {
            return $this->belongsTo(Category::class,'idCategory','id');
        }
        public function bdsType()
        {
            return $this->belongsTo(BDSType::class,'idBDSType','id');
        }
        public function images()
        {
            return $this->hasMany(Image::class,'content_id','id');
        }
}
