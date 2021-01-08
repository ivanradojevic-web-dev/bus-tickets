<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Station;
use Livewire\WithPagination;

class StationTable extends Component
{
	use WithPagination;

	public $sortField = '';
	public $sortDirection = 'asc';

	public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = !$this->sortDirection;
        } else {
            $this->sortDirection = 'asc';
        }
        $this->sortField = $field;
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
