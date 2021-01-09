<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StationCreate extends Component
{
	public $name;
	public $country;

	protected $rules = [
        'name' => ['required'], 
        'country' => ['required'],
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function addStation()
    {
        $data = $this->validate();
    }

    public function render()
    {
        return view('livewire.station-create');
    }
}
