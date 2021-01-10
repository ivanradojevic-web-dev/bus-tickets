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
    public $editing = [
        'id' => '',
        'name' => '',
        'country' => '',
    ];

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
        $this->editing['id'] = $station->id;
        $this->editing['name'] = $station->name;  
        $this->editing['country'] = $station->country;

        $this->showEditModal = true;
    }

    public function putStation()
    {
        $this->validate([
            'editing.name' => ['required'], 
            'editing.country' => ['required'], 
        ]);

        $station = Station::find($this->editing['id']);
        $station->name = $this->editing['name'];
        $station->country = $this->editing['country'];
        $station->save();

        return $this->showEditModal = false;
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
