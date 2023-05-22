<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'video_url',
        'anime_id',
    ];

    public function anime()
    {
        return $this->belongsTo(Genre::class);
    }
}
