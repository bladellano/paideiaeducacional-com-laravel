<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Event;
use App\Models\ImageGallery;
use App\Models\Page;
use App\Models\Testimonial;
use App\Models\Visit;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $totalVisits = Visit::count();
        $totalEvents = Event::count();
        $totalPages = Page::count();
        $totalTestemonials = Testimonial::count();
        $totalPhotos = ImageGallery::count();

        return view('admin.home', compact('totalVisits', 'totalEvents', 'totalPages', 'totalTestemonials', 'totalPhotos'));
    }
}
