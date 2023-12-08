<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'resume', 'slug', 'content', 'image'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::updating(function ($article) {
            $article->slug = Str::slug($article->title);
        });

        static::creating(function ($article) {

            $article->slug = Str::slug($article->title);

            if (auth()->check())
                $article->user_id = auth()->id();
        });
    }
}
