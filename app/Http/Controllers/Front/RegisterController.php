<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function handleRegistration( Request $request ){
        //dd( $request->all() );
        $request->validate([
            'first_name' => 'required|string',
            'email' => 'required|email',
        ]);
        $first_name = $request->first_name;
        $subscribed = $request->input('subscribe', 0);
        return view('front.success')->with(compact('first_name', 'subscribed'));
    }
}
