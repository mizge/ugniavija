<?php

namespace App\Http\Controllers;

use App\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function get()
    {
        return view('films.create');
    }
    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        Film::create($attributes);
        return $this->show();
    }
    public function show()
    {
        $films = Film::all();
        return view('films.show',['films'=>$films]);
    }
}
