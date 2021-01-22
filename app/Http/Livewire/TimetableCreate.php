<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

use App\Models\Timetable;

class TimetableCreate extends Component
{
	public $line;
	public $days = [];
	public $period;
	public $amount = 50;

	protected $rules = [
        'line' => ['required'], 
        'days' => ['required'],
        'period' => ['required'],
        'amount' => ['required', 'integer'],
    ];

	public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function addTimetable()
    {

        $data = $this->validate();

        $weekdays = $this->days; //$weekdays = [1,7];
        
		$period = CarbonPeriod::between(now(), now()->addMonths(1))->addFilter(function ($date) use ($weekdays) {
    		return in_array($date->dayOfWeekIso, $weekdays);
		});

		foreach ($period as $date) {
			Timetable::create([
                'line_id' => $this->line,
                'start_day' => $date,
                'end_day' => $date->copy()->addDay(),	//kžcop jer kao mora nova instanca?
                'amount' => $this->amount,  
                'start_time' => 1400,
                'end_time' => 1500,            
            ]);
		}

		session()->flash('timetable_created', 'Timetable is successfuly created');

    }

    public function render()
    {
        return view('livewire.timetable-create');
    }
}
