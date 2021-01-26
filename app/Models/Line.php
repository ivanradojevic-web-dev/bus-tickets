<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Line extends Model
{
    use HasFactory;

    protected $guarded = [
    ];

    public $timestamps = false;

    public function stations()
    {
        return $this->belongsToMany(Station::class)->withPivot('order', 'price', 'time');
    }

    public function timetables()
    {
        return $this->hasMany(Timetable::class);
    }

    public function haveChild($id)
    {
        return $this->where('parent_id', $id)->exists();
    }

    public function isChild()
    {
        return $this->parent_id;
    }

}
