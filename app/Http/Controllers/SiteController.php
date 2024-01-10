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
    public function home()
    {
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

        return view('site.home', compact('events', 'videos', 'banners', 'sobre', 'canal', 'articles', 'testimonials', 'rssItems','gallery'));
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

    public function allImagesGallery()
    {
        $gallery = ImageGallery::all();
        return view('site.all-images-gallery', compact('gallery'));
    }
}
