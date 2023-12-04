<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Video extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description', 'url'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::updating(function ($video) {
            $video->slug = Str::slug($video->title);
        });

        static::creating(function ($video) {

            $video->slug = Str::slug($video->title);

            if (auth()->check())
                $video->user_id = auth()->id();
        });
    }
}
