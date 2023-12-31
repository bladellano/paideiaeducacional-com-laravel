<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::latest()->get();

        return view('admin.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.events.create');
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
            'event_date' => 'required|date_format:Y-m-d',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Lidar com o upload da imagem
        if ($request->hasFile('image'))
            $data['image'] = $request->file('image')->store('images/events', 'public');

        Event::create($data);

        return redirect()->route('events.index')->with('message', 'Registro criado com sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Event $event
     * @return void
     */
    public function edit(Event $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Event $event
     * @return void
     */
    public function update(Request $request, Event $event)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'event_date' => 'required|date_format:Y-m-d',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Lidar com o upload da imagem
        if ($request->hasFile('image')) {

            if (Storage::disk('public')->exists($event->image));
            Storage::disk('public')->delete($event->image);

            $data['image'] = $request->file('image')->store('images/events', 'public');
        }

        $event->update($data);

        return redirect()->route('events.index')->with('message', 'Registro atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Event $event
     * @return void
     */
    public function destroy(Event $event)
    {

        if (Storage::disk('public')->exists($event->image));
        Storage::disk('public')->delete($event->image);

        $event->delete();

        return redirect()->route('events.index')->with('message', 'Registro excluído com sucesso!');
    }
}
