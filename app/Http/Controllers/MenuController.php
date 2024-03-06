<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $menu = file_get_contents(config_path('menu-site.php'));

        return view('admin.site-menu.index', compact('menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (file_put_contents(config_path('menu-site.php'), $request->get('menu'))) :
            return redirect()->route('site-menu.index')->with('message', 'Registro alterado com sucesso!');
        else :
            return redirect()->route('site-menu.index')->with('message', 'Problema em alterar o registro! :(');
        endif;
    }
}
