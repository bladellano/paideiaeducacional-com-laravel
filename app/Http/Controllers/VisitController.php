<?php

namespace App\Http\Controllers;

use App\Models\Visit;

class VisitController extends Controller
{
    public function index()
    {
        $visits = Visit::all();
        return view('admin.visits.index', compact('visits'));
    }
}
