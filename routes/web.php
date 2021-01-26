<?php

use Illuminate\Support\Facades\Route;
use App\Models\Station;
use App\Models\Line;
use App\Models\Timetable;
use Carbon\Carbon;

use App\Http\Controllers\StationController;
use App\Http\Controllers\LineController;
use App\Http\Controllers\TimetableController;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use Carbon\CarbonPeriod;

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
    
 return $line->stations()->orderBy("pivot_order", "desc")->get();


//$days = [7, 1];

//$period = CarbonPeriod::between(now(), now()->addMonths(3))->addFilter(function ($date) use ($days) {
//    return in_array($date->dayOfWeekIso, $days);
//});

//    foreach ($period as  $date) {
//        echo $date->addDay();
//    }

    //return Station::whereDoesntHave('lines', function($query) use ($line){
    //    $query->where('line_id', $line->id);
    //})->get();

    //return $line->stations()->where("station_id", 4)->first();
    //return Station::with('lines')->get();
    
    //return Station::where("name", "Majdanpek")->first()->id;

});

Route::get('/search', function () {
	$line = Line::find(1);

	$ok = $line->with('timetables', 'stations')->whereHas('timetables', function ($query) {
		$query->where('start_day', '>=', Carbon::now());
		})->get();

    return $ok;
});

Route::get('/kveri', function () {
    $line = 2;
    return Timetable::when($line, function($query, $line) {
        $query->where("line_id", $line);
    })->get();

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
        Route::get('/create', [StationController::class, 'create'])->name('admiral-stations.create');
    });

    Route::prefix('lines')->group(function () {
        Route::get('', [LineController::class, 'index'])->name('admiral-lines.index');
        Route::get('/create', [LineController::class, 'create'])->name('admiral-lines.create');

        Route::get('/{id}/stations', [LineController::class, 'stations'])->name('admiral-lines.stations');    
        Route::get('/{id}/stations/select', [LineController::class, 'select'])->name('admiral-lines.select');
        Route::get('/{id}/stations/order', [LineController::class, 'order'])->name('admiral-lines.order');
        Route::get('/{id}/stations/return', [LineController::class, 'return'])->name('admiral-lines.return');
    });

    Route::prefix('timetables')->group(function () {
        Route::get('', [TimetableController::class, 'index'])->name('admiral-timetables.index');
        Route::get('/create', [TimetableController::class, 'create'])->name('admiral-timetables.create');
    });
    
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
