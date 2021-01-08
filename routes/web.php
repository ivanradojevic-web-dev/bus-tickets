<?php

use Illuminate\Support\Facades\Route;
use App\Models\Station;
use App\Models\Line;
use App\Models\Timetable;
use Carbon\Carbon;

use App\Http\Controllers\StationController;

use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	$line = Line::find(1);

    return $line->stations()->orderBy('pivot_order')->get();
});

Route::get('/search', function () {
	$line = Line::find(1);

	$ok = $line->with('timetables', 'stations')->whereHas('timetables', function ($query) {
		$query->where('start_day', '>=', Carbon::now());
		})->get();

    return $ok;
});

Route::get('/basket', function () {
	return \App\Models\Basket::all();
});

Route::get('/admiral', function () { return view('ladogaboard'); })->name('admiral');
Route::get('/admiral/form', function () { return view('form'); })->name('form');
Route::get('/admiral/table', function () { return view('table'); })->name('table');



Route::prefix('admiral')->group(function () {
    
    Route::prefix('stations')->group(function () {
        Route::get('', [StationController::class, 'index'])->name('admiral-stations.index');
    });
    
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
