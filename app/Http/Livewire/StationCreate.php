<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Station;

class StationCreate extends Component
{
	public $name;
	public $country;

	protected $rules = [
        'name' => ['required', 'unique:stations'], 
        'country' => ['required'],
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function addStation()
    {
        $data = $this->validate();
  
        Station::create([
            'name' => $this->name,
            'country' => $this->country,           
        ]);

        $this->name = '';
        $this->country = '';

        session()->flash('station-saved', 'Station successfully saved.'); 
    }

    public function render()
    {
        return view('livewire.station-create');
    }
}
