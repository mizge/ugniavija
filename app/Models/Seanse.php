<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seanse extends Model
{
    protected $guarded=[];
    public function film()
    {
        return $this->belongsTo(Film::class);
    }
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
