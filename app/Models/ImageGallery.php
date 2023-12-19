<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ImageGallery extends Model
{
    use HasFactory;

    protected $table = 'image_gallery';
    protected $fillable = ['title', 'image'];
}
