<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        # $events = Event::latest()->limit(3)->get();
        $events = Event::all();

        return view('site.home', compact('events'));
    }
}
