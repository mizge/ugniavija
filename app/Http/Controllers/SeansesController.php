<?php

namespace App\Http\Controllers;

use App\Film;
use App\Seanse;
use DateTime;
use Illuminate\Http\Request;

class SeansesController extends Controller
{
    public function view()
    {
        $films=Film::all();
        $seanses = Seanse::all();
        $selectedID = 0;

        return view('seanses', compact('films', 'selectedID'));
    }
    public function create()
    {
        $items = Film::pluck('title', 'id');
        $selectedID = 0;
        return view('seanses.create', compact('items', 'selectedID'));
    }
    public function store()
    {
        var_dump(request()->all());
        $current_date=date('Y-m-d h:i', time());
        var_dump($current_date);
        var_dump(request()['date']);
        $attributes = request()->validate([
            'film_id' => 'required',
            'date' => 'required | after: '.$current_date,
            'free_amount' => 'required | integer |min:0|not_in:0',
            'price' => 'required | numeric | min:0 | not_in:0 ',
        ]);
        $attributes['price'] = floatval($attributes['price']);
        $attributes['free_amount'] = (int)$attributes['free_amount'];
        $attributes['bought_amount'] = 0;
        var_dump($attributes);
        $seanse = Seanse::create($attributes);
        return redirect('/');
    }
}
