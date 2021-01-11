<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Line;

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

    public function stations($id)
    {
    	$line = Line::findOrFail($id);

        return view('admiral.lines.stations', compact('line'));
    }

    public function select($id)
    {
    	$line = Line::findOrFail($id);

        return view('admiral.lines.select', compact('line'));
    }
}
