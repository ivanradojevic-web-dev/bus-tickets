<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Station;
use Livewire\WithPagination;

class StationTable extends Component
{
	use WithPagination;

    //render sorting
	public $sortField = '';
	public $sortDirection = 'asc';

    //editing
    public $showEditModal = false;
    public $editingId = '';
    public $name = '';
    public $editingCountry = '';

    //delete
    public $showDeleteModal = false;
    public $deleteId = "";
    public $forbiddenMessage;

	public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = !$this->sortDirection;
        } else {
            $this->sortDirection = 'asc';
        }
        $this->sortField = $field;
    }

    public function edit(Station $station)
    {
        $this->editingId = $station->id;
        $this->name = $station->name;  
        $this->editingCountry = $station->country;

        $this->showEditModal = true;
    }

    public function putStation()
    {
        $this->validate([
            'name' => 'sometimes|required|unique:stations,name,'.$this->editingId, 
            'editingCountry' => ['required'], 
        ]);

        $station = Station::find($this->editingId);
        $station->name = $this->name;
        $station->country = $this->editingCountry;
        $station->save();

        return $this->showEditModal = false;
    }

    public function deleteModal($id)
    {
        $this->deleteId = $id;
        $this->showDeleteModal = true;    
    }

    public function deleteStation()
    {
        $station = Station::find($this->deleteId);
        if ( $station->lines()->exists() ) {
            //session()->flash('station_forbidden', 'Sorry, this station have line');
            $this->showDeleteModal = false;
            $this->forbiddenMessage = "Sorry, this station have line";
        } else {
            Station::destroy($this->deleteId);
            $this->showDeleteModal = false; 
        }
    }

    public function render()
    {
        return view('livewire.station-table', [
        	'stations' => Station::query()
        		->when($this->sortField, function ($query) {
        	    $query->orderBy($this->sortField, $this->sortDirection ? 'asc' : 'desc');
        	    })->paginate(10),
        ]);
    }
}
