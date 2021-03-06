<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Film extends Model
{
    protected $fillable=['title', 'description'];
    protected $guarded=[];
    public function seanses()
    {
        return $this->hasMany(Seanse::class);
    }
}
