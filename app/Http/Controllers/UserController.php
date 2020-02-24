<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show ($name){
        //$user = \DB::table('users') -> where('name', $name)->first();

        //dd($user);
        /*if(! $user){
            abort(404);
        }*/

        return view('users', ['user' => User::where('name', $name)->firstOrFail()]);
    }
}
