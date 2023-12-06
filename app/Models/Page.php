<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Page extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::updating(function ($page) {
            $page->slug = Str::slug($page->title);
        });

        static::creating(function ($page) {

            $page->slug = Str::slug($page->title);

            if (auth()->check())
                $page->user_id = auth()->id();
        });
    }
}
