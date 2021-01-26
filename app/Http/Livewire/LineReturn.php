<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Line;
use App\Models\LineStation;

class LineReturn extends Component
{
	public $line;

	public function mount(Line $line)
    {
        $this->line = $line;
    }

    public function addReturnLine()
    {
    	$line = Line::create([
            'name' => $this->line->name . " return",
            'parent_id' => $this->line->id,
        ]);

        foreach ($this->line->stations()->orderBy("pivot_order", "desc")->get() as $key => $s) {       	
        	LineStation::create([
        		'line_id' => $line->id,
        		'station_id' => $s->id,
        		'order' => $key + 1,
        	]);
        }     
    }

    public function render()
    {
        return view('livewire.line-return');
    }
}
