<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Line;

class LineStations extends Component
{
	public $line;

    //update line stations pivot price
    public $editingPriceId;
    public $price;

    //update line stations pivot time
    public $editingTimeId;
    public $time;

	public function mount(Line $line)
    {
        $this->line = $line;
    }

    public function sendId($id)
    {
        $this->editingPriceId = $id;

        $station = $this->line->stations->find($id);
        $this->price = $station->pivot->price;

        $this->emit('incremented'); //emit focus action
    }

    public function updatePrice()
    {
        $this->line->stations()->updateExistingPivot($this->editingPriceId, ['price' => $this->price]);

        $this->editingPriceId = "";
        $this->price = "";
    }

    public function sindId($id)
    {
        $this->editingTimeId = $id;

        $station = $this->line->stations->find($id);
        $this->time = $station->pivot->time;

        $this->emit('incremented'); //emit focus action
    }

    public function updateTime()
    {
        $this->line->stations()->updateExistingPivot($this->editingTimeId, ['time' => $this->time]);

        $this->editingTimeId = "";
        $this->time = "";
    }

    public function render()
    {
        return view('livewire.line-stations', [
        	'stations' => $this->line->stations()->orderBy('pivot_order')->get(),
        ]);
    }
}