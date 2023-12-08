<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Video;
use App\Models\Banner;
use App\Models\Page;
use App\Models\Article;

class SiteController extends Controller
{
    public function home()
    {
        # $events = Event::latest()->limit(3)->get();
        $events = Event::latest()->get();
        # $videos = Video::all();
        $videos = Video::latest()->limit(4)->get();

        $banners = Banner::latest()->limit(3)->get();

        $articles = Article::latest()->limit(4)->get();

        $sobre = Page::where('slug', 'assessoria-e-consultoria-em-projetos-educacionais-e-empresariais')->first();
        $canal =  Page::where('slug', 'seja-bem-vindo-ao-canal-da-paideia-educacional')->first();

        return view('site.home', compact('events', 'videos', 'banners', 'sobre', 'canal','articles'));
    }

    public function page($slug)
    {
        $page = Page::where('slug', $slug)->first();
        return view('site.pages', compact('page'));
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

    public function article($slug)
    {
        $article = Article::where('slug', $slug)->first();
        return view('site.articles', compact('article'));
    }

    public function allArticles()
    {
        $articles = Article::all();
        return view('site.all-articles', compact('articles'));
    }
}
