<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::latest()->get();

        return view('admin.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.create');
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
            'description' => 'required',
        ]);

        Page::create($data);

        return redirect()->route('pages.index')->with('message', 'Registro criado com sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Page $page
     * @return void
     */
    public function edit(Page $page)
    {
        return view('admin.pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Page $page
     * @return void
     */
    public function update(Request $request, Page $page)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        $page->update($data);

        return redirect()->route('pages.index')->with('message', 'Registro atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Page $page
     * @return void
     */
    public function destroy(Page $page)
    {

        $page->delete();

        return redirect()->route('pages.index')->with('message', 'Registro excluído com sucesso!');
    }
}
