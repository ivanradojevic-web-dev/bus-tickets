<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Line;
use App\Models\Station;
use App\Models\LineStation;

class LineSelect extends Component
{
	public $line;
    //public $selectedstations;

	public $selected = [];

	public function mount(Line $line)
    {
        $this->line = $line;
        //$this->selected = $selectedstations;
    }

    public function selectStations()
    {
        foreach ($this->selected as $key => $name) {
            LineStation::create([
                'line_id' => $this->line->id,
                'station_id' => Station::where("name", $name)->first()->id,
                'order' => $key + 1,
                'price' => 0,              
            ]);
        }

        session()->flash('line-selected', 'Stations are selected. Now reorder line'); 

        return redirect()->route('admiral-lines.order', $this->line->id);
    }

    public function render()
    {
        return view('livewire.line-select', [
        	'stations' => Station::orderBy('name')->get(),
        ]);
    }
}
