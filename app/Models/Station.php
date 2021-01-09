<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;

    protected $guarded = [
    ];

    public $timestamps = false;

    public function lines()
    {
        return $this->belongsToMany(Line::class);
    }

    const COUNTRIES = [
        'Srbija', 'Austrija','Nemačka','Švajcarska',
    ];
}
