<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LineController extends Controller
{
    public function index()
    {
        return view('admiral.lines.index');
    }

    public function create()
    {
        return view('admiral.lines.create');
    }
}
