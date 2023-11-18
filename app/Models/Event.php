<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['title','description','event_date','image'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getEventDateAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($event) {
            if (auth()->check())
                $event->user_id = auth()->id();
        });
    }
}
