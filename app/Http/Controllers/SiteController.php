<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Event;
use App\Models\Video;
use App\Models\Banner;
use App\Models\Article;
use App\Models\Testimonial;
use App\Models\ImageGallery;

class SiteController extends Controller
{

    private $menu;

    public function __construct()
    {
        $this->menu = config('menu-site');
    }

    public function home()
    {
        /** Estrutura do Menu do Site */
        $menu = $this->menu;

        # $events = Event::latest()->limit(3)->get();
        $events = Event::latest()->get();
        # $videos = Video::all();
        $videos = Video::latest()->limit(4)->get();

        $banners = Banner::latest()->limit(5)->get();

        $articles = Article::latest()->limit(4)->get();

        $testimonials = Testimonial::latest()->limit(3)->get();

        $sobre = Page::where('slug', 'assessoria-e-consultoria-em-projetos-educacionais-e-empresariais')->first();
        $canal =  Page::where('slug', 'seja-bem-vindo-ao-canal-da-paideia-educacional')->first();

        $rssItems = (new \App\Services\RssService)->getRssFeed();

        $gallery = ImageGallery::latest()->limit(9)->get();

        return view('site.home', compact('events', 'videos', 'banners', 'sobre', 'canal', 'articles', 'testimonials', 'rssItems', 'gallery', 'menu'));
    }

    public function page($slug)
    {
        $menu = $this->menu;
        $page = Page::where('slug', $slug)->first();
        return view('site.pages', compact('menu', 'page'));
    }

    public function event($slug)
    {
        $menu = $this->menu;
        $event = Event::where('slug', $slug)->first();
        return view('site.events', compact('menu', 'event'));
    }

    public function banner($slug)
    {
        $menu = $this->menu;
        $banner = Banner::where('slug', $slug)->first();
        return view('site.banners', compact('menu', 'banner'));
    }

    public function article($slug)
    {
        $menu = $this->menu;
        $article = Article::where('slug', $slug)->first();
        return view('site.articles', compact('menu', 'article'));
    }

    public function allArticles()
    {
        $menu = $this->menu;
        $articles = Article::all();
        return view('site.all-articles', compact('menu', 'articles'));
    }

    public function allImagesGallery()
    {
        $menu = $this->menu;
        $gallery = ImageGallery::all();
        return view('site.all-images-gallery', compact('menu', 'gallery'));
    }
}
