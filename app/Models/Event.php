<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description', 'event_date', 'image'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function getEventDateAttribute($value)
    // {
    //     return Carbon::parse($value)->format('d/m/Y');
    // }

    protected static function boot()
    {
        parent::boot();

        static::updating(function ($event) {
            $event->slug = Str::slug($event->title);
        });

        static::creating(function ($event) {
            
            $event->slug = Str::slug($event->title);

            if (auth()->check())
                $event->user_id = auth()->id();
        });
    }
}
