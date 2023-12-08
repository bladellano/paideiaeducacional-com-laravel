<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::latest()->get();

        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'resume' => 'required|max:255',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Lidar com o upload da imagem
        if ($request->hasFile('image'))
            $data['image'] = $request->file('image')->store('images/articles', 'public');

        Article::create($data);

        return redirect()->route('articles.index')->with('message', 'Registro criado com sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Article $article
     * @return void
     */
    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Article $article
     * @return void
     */
    public function update(Request $request, Article $article)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'resume' => 'required|max:255',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Lidar com o upload da imagem
        if ($request->hasFile('image')) {

            if (Storage::disk('public')->exists($article->image));
            Storage::disk('public')->delete($article->image);

            $data['image'] = $request->file('image')->store('images/articles', 'public');
        }

        $article->update($data);

        return redirect()->route('articles.index')->with('message', 'Registro atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Article $article
     * @return void
     */
    public function destroy(Article $article)
    {

        if (Storage::disk('public')->exists($article->image));
        Storage::disk('public')->delete($article->image);

        $article->delete();

        return redirect()->route('articles.index')->with('message', 'Registro excluído com sucesso!');
    }
}
