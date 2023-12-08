<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::latest()->get();

        return view('admin.banners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banners.create');
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data['show_title'] = $request->get('show_title') == 'on' ? 1 : 0;

        // Lidar com o upload da imagem
        if ($request->hasFile('image'))
            $data['image'] = $request->file('image')->store('images/banners', 'public');

        Banner::create($data);

        return redirect()->route('banners.index')->with('message', 'Registro criado com sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Banner $banner
     * @return void
     */
    public function edit(Banner $banner)
    {
        return view('admin.banners.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Banner $banner
     * @return void
     */
    public function update(Request $request, Banner $banner)
    {

        $data = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data['show_title'] = $request->get('show_title') == 'on' ? 1 : 0;

        // Lidar com o upload da imagem
        if ($request->hasFile('image')) {

            if (Storage::disk('public')->exists($banner->image));
            Storage::disk('public')->delete($banner->image);

            $data['image'] = $request->file('image')->store('images/banners', 'public');
        }

        $banner->update($data);

        return redirect()->route('banners.index')->with('message', 'Registro atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Banner $banner
     * @return void
     */
    public function destroy(Banner $banner)
    {

        if (Storage::disk('public')->exists($banner->image));
        Storage::disk('public')->delete($banner->image);

        $banner->delete();

        return redirect()->route('banners.index')->with('message', 'Registro excluído com sucesso!');
    }
}
