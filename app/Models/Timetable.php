<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    use HasFactory;

    protected $guarded = [
    ];

    public $timestamps = false;

    protected $casts = [
        'start_day' => 'datetime',
        'end_day' => 'datetime',
    ];

    public function line()
    {
        return $this->belongsTo(Line::class);
    }

    const PERIOD = [
        '3' => '3 Months',
        '6' => '6 Months',
        '12' => 'One Year',
    ];
}
