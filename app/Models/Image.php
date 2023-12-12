<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'category_id',
        'type_id',
        'desc',
        'image',
    ];

    public function posts()
    {
        return $this->belongsTo(Post::class, 'type_id');
    }

    public function slides()
    {
        return $this->belongsTo(Slide::class, 'type_id');
    }
}
