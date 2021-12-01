<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }
    public function create(){
        return view('session.create');
    }
    public function store(Request $request){
        $attributes= request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(Auth::attempt($attributes)){
            $request->session()->regenerate();
            return redirect('/');
        }
        throw ValidationException::withMessages([
            'email'=>'Neteisingas el. paštas'
        ]);
    }
}
