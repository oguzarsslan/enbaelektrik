<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title_tr',
        'title_en',
        'body_tr',
        'body_en',
        'seen',
    ];

    public function images()
    {
        return $this->hasMany(Image::class, 'type_id');
    }
}
