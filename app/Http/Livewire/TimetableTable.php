<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Timetable;
use Livewire\WithPagination;

class TimetableTable extends Component
{
    use WithPagination;

	public $line;

    public $sortField = '';
    public $sortDirection = 'asc';
    PUBLIC $paginate = 10;

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
        return view('livewire.timetable-table', [
            'timetables' => Timetable::query()
        	->when($this->line, function ($query) {
        	    $query->where('line_id', $this->line);
        	})->when($this->sortField, function ($query) {
                $query->orderBy($this->sortField, $this->sortDirection ? 'asc' : 'desc');
            })->paginate($this->paginate),
        ]);
    }
}
