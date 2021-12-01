<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //
    public function create(){
        return view('register.create');
    }
    public function store(){
        //var_dump(request()->all());
        $attributes = request()->validate([
            'username' => 'required',
            'email' => 'required |email',
            'password' => 'required',
        ]);
        $attributes['password'] = bcrypt(($attributes['password']));
        $user = User::create($attributes);
        Auth::login($user);
        return redirect('/');
    }
}
