<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'address'
    ];

    public function machines()
    {
        return $this->hasMany(Machine::class);
    }
}
