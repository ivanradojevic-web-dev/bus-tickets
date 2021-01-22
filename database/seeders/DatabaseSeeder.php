<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Station;
use App\Models\Line;
use App\Models\Timetable;
use App\Models\Basket;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Station::insert([
            ['name' => 'Niš', 'country' => 'Srbija'],
    		['name' => 'Novi Sad', 'country' => 'Srbija'],
    		['name' => 'Beč', 'country' => 'Austrija'],
    		['name' => 'Salcburg', 'country' => 'Austrija'],
            ['name' => 'Beograd', 'country' => 'Srbija'],
    		['name' => 'Cirih', 'country' => 'Švajcarska'],
            ['name' => 'Štutgart', 'country' => 'Nemačka'],
            ['name' => 'Sent Galen', 'country' => 'Švajcarska'],
            ['name' => 'Kladovo', 'country' => 'Srbija'],
            ['name' => 'Minhen', 'country' => 'Nemačka'],
        ]);

        Line::insert([
            ['name' => 'Kladovo - Cirih'],
    		['name' => 'Kladovo - Cirih return'],
    		['name' => 'Niš - Frankfurt'],
            ['name' => 'Niš - Frankfurt return'],
        ]);

        //Line::factory(3)->create();

        $line1 = Line::find(1);
        $line1->stations()->attach([
        	1 => ['order' => 1, 'price' => 0],
        	2 => ['order' => 4, 'price' => 15],
        	3 => ['order' => 2, 'price' => 3],
        	4 => ['order' => 5, 'price' => 60],
        	5 => ['order' => 3, 'price' => 5],
        	6 => ['order' => 6, 'price' => 90]
        ]);

        Timetable::create([
            'line_id' => 1,
            'start_time' => 1400,
            'end_time' => 1600,
            'start_day' => Carbon::now()->addDays(6),
            'end_day' => Carbon::now()->addDays(7),
        ]);

        Timetable::create([
            'line_id' => 1,
            'start_time' => 1500,
            'end_time' => 1700,
            'start_day' => Carbon::now()->addDays(8),
            'end_day' => Carbon::now()->addDays(9),
        ]);

        Basket::create([
            'timetable_id' => 2,
            'ticket_price' => 90,
            'quantity' => 3,
            'total_price' => 270,
            'start_station' => 'Kladovo',
            'end_station' => 'Cirih',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
