<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Video;
use App\Models\Banner;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        # $events = Event::latest()->limit(3)->get();
        $events = Event::latest()->get();
        # $videos = Video::all();
        $videos = Video::latest()->limit(4)->get();

        $banners = Banner::latest()->limit(3)->get();

        return view('site.home', compact('events', 'videos', 'banners'));
    }

    public function event($slug)
    {
        $event = Event::where('slug', $slug)->first();
        return view('site.events', compact('event'));
    }

    public function banner($slug)
    {
        $banner = Banner::where('slug', $slug)->first();
        return view('site.banners', compact('banner'));
    }
}
