<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Line;


class LineStations extends Component
{
	
	public $line;

	public function mount(Line $line)
    {
        $this->line = $line;
    }

    public function render()
    {
        return view('livewire.line-stations', [
        	'stations' => $this->line->stations()->orderBy('pivot_order')->get(),
        ]);
    }
}