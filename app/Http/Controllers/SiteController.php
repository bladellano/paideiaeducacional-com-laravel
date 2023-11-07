<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Video;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        # $events = Event::latest()->limit(3)->get();
        $events = Event::all();
        # $videos = Video::all();
        $videos = Video::latest()->limit(3)->get();

        return view('site.home', compact('events','videos'));
    }
}
