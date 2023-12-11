<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::latest()->get();

        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonials.create');
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
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'phone' => 'string|max:20',
            'email' => 'email',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Lidar com o upload da imagem
        if ($request->hasFile('image'))
            $data['image'] = $request->file('image')->store('images/testimonials', 'public');

        Testimonial::create($data);

        return redirect()->route('testimonials.index')->with('message', 'Registro criado com sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Testimonial $testimonial
     * @return void
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Testimonial $testimonial
     * @return void
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'phone' => 'string|max:20',
            'email' => 'email',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Lidar com o upload da imagem
        if ($request->hasFile('image'))
            $data['image'] = $request->file('image')->store('images/testimonials', 'public');

        $testimonial->update($data);

        return redirect()->route('testimonials.index')->with('message', 'Registro atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Testimonial $testimonial
     * @return void
     */
    public function destroy(Testimonial $testimonial)
    {

        if (Storage::disk('public')->exists($testimonial->image));
            Storage::disk('public')->delete($testimonial->image);

        $testimonial->delete();

        return redirect()->route('testimonials.index')->with('message', 'Registro excluído com sucesso!');
    }
}
