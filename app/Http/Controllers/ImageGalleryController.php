<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ImageGallery;

class ImageGalleryController extends Controller

{
    /**
     * Form create
     *
     * @return void
     */
    public function create()
    {
        $images = ImageGallery::get();
        return view('admin.gallery.create', compact('images'));
    }

    /**
     * Upload image function
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $input['title'] = $request->title;

        if ($request->hasFile('image'))
            $input['image'] = $request->file('image')->store('images/gallery', 'public');

        ImageGallery::create($input);

        return back()->with('success', 'Imagem enviada com sucesso.');
    }


    /**
     * Remove Image function
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ImageGallery::find($id)->delete();
        return back()->with('success', 'Imagem removida com sucesso.');
    }
}
