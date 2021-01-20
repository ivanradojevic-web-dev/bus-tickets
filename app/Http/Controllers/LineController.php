<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Line;
use App\Models\Station;

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
        $selectedstations = $line->stations()->pluck('station_id');

        return view('admiral.lines.select', compact('line', 'selectedstations'));
    }

    public function order($id)
    {
        $line = Line::findOrFail($id);

        //$notstations = Station::whereDoesntHave('lines', function($query) use ($line){
        //    $query->where('line_id', $line->id);
        //})->get();
        //$selectedstations = $line->stations()->pluck('station_id');

        return view('admiral.lines.order', compact('line'));
    }
}
