<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Station;

class StationController extends Controller
{
    public function index()
    {
        //$stations = Station::all();

        return view('admiral.stations.index');
    }

    public function create()
    {
        return view('admiral.stations.create');
    }
}
