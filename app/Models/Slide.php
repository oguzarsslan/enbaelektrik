<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $fillable = [
        'title_tr',
        'title_en',
        'desc_tr',
        'desc_en',
    ];

    public function images()
    {
        return $this->hasMany(Image::class, 'type_id');
    }
}
