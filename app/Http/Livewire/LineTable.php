<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Line;
use Livewire\WithPagination;

class LineTable extends Component
{
	use WithPagination;

    //render sorting
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
        return view('livewire.line-table', [
        	'lines' => Line::withCount('stations')
        		->when($this->sortField, function ($query) {
        	    $query->orderBy($this->sortField, $this->sortDirection ? 'asc' : 'desc');
        	    })->paginate(10),
        ]);
    }
}

