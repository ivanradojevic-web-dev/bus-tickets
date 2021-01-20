<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Tablesorting extends Component
{
    public $sortField;
    public $sortDirection;
    public $sort;
    public $title;

    public function __construct($sortField, $sortDirection, $sort, $title)
    {
        $this->sortField = $sortField;
        $this->sortDirection = $sortDirection;
        $this->sort = $sort;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tablesorting');
    }
}