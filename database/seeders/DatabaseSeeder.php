<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Station;
use App\Models\Line;

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
            ['name' => 'Kladovo', 'country' => 'Srbija'],
    		['name' => 'Beograd', 'country' => 'Srbija'],
    		['name' => 'Negotin', 'country' => 'Srbija'],
    		['name' => 'Beč', 'country' => 'Austrija'],
    		['name' => 'Zaječar', 'country' => 'Srbija'],
    		['name' => 'Cirih', 'country' => 'Švajcarska']
        ]);

        Line::insert([
            ['name' => 'Jedan'],
    		['name' => 'Dva'],
    		['name' => 'Tri']
        ]);

        $line1 = Line::find(1);
        $line1->stations()->attach([
        	1 => ['order' => 1],
        	2 => ['order' => 4],
        	3 => ['order' => 2],
        	4 => ['order' => 5],
        	5 => ['order' => 3],
        	6 => ['order' => 6]
        ]);
    }
}
