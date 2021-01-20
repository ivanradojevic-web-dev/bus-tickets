<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Line;

class LineCreate extends Component
{
	public $name;

	protected $rules = [
        'name' => ['required', 'unique:lines'], 
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function addLine()
    {
        $this->validate();
  
        $line = Line::create([
            'name' => $this->name,         
        ]);

        $this->name = '';

        session()->flash('line-saved', 'Line successfully saved. Select station for the line'); 

        return redirect()->route('admiral-lines.select', $line->id);
    }

    public function render()
    {
        return view('livewire.line-create');
    }
}
