<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Line;

class LineSelect extends Component
{
	public $line;

	public function mount(Line $line)
    {
        $this->line = $line;
    }

    public function render()
    {
        return view('livewire.line-select');
    }
}
