<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'show_title', 'slug', 'description', 'image'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::updating(function ($banner) {
            $banner->slug = Str::slug($banner->title);
        });

        static::creating(function ($banner) {

            $banner->slug = Str::slug($banner->title);

            if (auth()->check())
                $banner->user_id = auth()->id();
        });
    }
}
