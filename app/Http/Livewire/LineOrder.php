<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Line;
use App\Models\Station;

class LineOrder extends Component
{
	public $line;

    public $showSelectModal = false;
    public $station;    //model for create
    
    public $showDeleteModal = false;
    public $deleteId = ""; 
    //public $notstations;

	public function mount(Line $line)
    {
        $this->line = $line;
        //$this->notstations = $notstations;
    }

    public function updateItemOrder($list)
    {
        foreach($list as $station) {
            $this->line->stations()->updateExistingPivot($station['value'], ['order' => $station['order']]);
        }
    }

    //public function updateName($id, $name)
    //{
    //    $station = $this->line->stations()->findOrFail($id);
    //    $station->update(['name' => $name]);
    //}

    public function selectModal()
    {
        $this->showSelectModal = true;
    }

    public function addStation()
    {
        $this->validate([
            'station' => ['required'], 
        ]);

        $order = $this->line->stations()->count();
        $this->line->stations()->attach($this->station, [
            'order' => $order + 1, 'price' => 0
        ]);

        $this->showSelectModal = false;
        $this->station = "";
    }

    public function deleteModal($id)
    {
        $this->deleteId = $id;
        $this->showDeleteModal = true;    
    }

    public function deleteStation()
    {
        $station = $this->line->stations()->where("station_id", $this->deleteId)->first();
        $stationOrder = $station->pivot->order;

        foreach ($this->line->stations as $s) {
            if ($s->pivot->order > $stationOrder) {
                $this->line->stations()->updateExistingPivot($s->id, ['order' => $s->pivot->order - 1]);
            }
        }
        
        $this->line->stations()->detach($this->deleteId);
        $this->deleteId = "";
        $this->showDeleteModal = false; 
    }

    public function render()
    {
        $l = $this->line;   //ovo nešto zbog lw-a, neće da prepozna ovu funkciju sa $this->...
        $notstations = Station::whereDoesntHave('lines', function($query) use ($l) {
            $query->where('line_id', $l->id);
        })->get();

        return view('livewire.line-order', [
        	'stations' => $this->line->stations()->orderBy('pivot_order')->get(),
            'notstations' => $notstations,
        ]);
    }
}
