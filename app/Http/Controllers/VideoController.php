<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::latest()->get();

        return view('admin.videos.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.videos.create');
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
            'url' => 'required',
        ]);

        Video::create($data);

        return redirect()->route('videos.index')->with('message', 'Registro criado com sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Video $video
     * @return void
     */
    public function edit(Video $video)
    {
        return view('admin.videos.edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Video $video
     * @return void
     */
    public function update(Request $request, Video $video)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'url' => 'required',
        ]);

        $video->update($data);

        return redirect()->route('videos.index')->with('message', 'Registro atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Video $video
     * @return void
     */
    public function destroy(Video $video)
    {

        $video->delete();

        return redirect()->route('videos.index')->with('message', 'Registro excluído com sucesso!');
    }
}
