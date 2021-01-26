<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Timetable;
use Livewire\WithPagination;
use Carbon\Carbon;

class TimetableTable extends Component
{
    use WithPagination;

    //query lines
	public $lineselect;

    //query filter
    public $sortField = '';
    public $sortDirection = 'asc';


    public $filters = [
        'search' => '',
        'paginate' => 10,
        'date-min' => null,
        'date-max' => null,
    ];

    //checkboxes
    public $selectedPage = false;
    public $selected = [];

    public function updatingFilters()
    {
        $this->resetPage();
        $this->selected = [];
    }

    public function updatingSelectedPage($value)  
    {
        if ($value) {
            $this->selected = $this->timetableQuery->pluck('id')->map(function ($id) {
                return (string) $id;    
            });
        } else {
            $this->selected = [];
        }
    }
    
    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = !$this->sortDirection;
        } else {
            $this->sortDirection = 'asc';
        }
        $this->sortField = $field;
    }

    public function getTimetableQueryProperty()
    {
        return Timetable::where(function ($query) {  
                $query->where ('start_day', 'like', '%' . $this->filters['search'] . '%')
                    ->orWhere('end_day', 'like', '%' . $this->filters['search'] . '%');
            })->when($this->lineselect, function ($query) {
                $query->where('line_id', $this->lineselect);
            })->when($this->sortField, function ($query) {
                $query->orderBy($this->sortField, $this->sortDirection ? 'asc' : 'desc');
            })->when($this->filters['date-min'], function($query, $date) {
                    $query->where('start_day', '>=', Carbon::parse($date));
            })->when($this->filters['date-max'], function($query, $date) {
                    $query->where('start_day', '<=', Carbon::parse($date));
            })->paginate($this->filters['paginate']);         
    }

    public function render()
    {
        return view('livewire.timetable-table', [
            'timetables' => $this->timetableQuery,  //getTimetableQueryProperty()
        ]);
    }
}
