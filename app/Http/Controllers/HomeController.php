<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class HomeController extends Controller
{
    public function index(){
    	return view('front.revolution');
    }

    public function changeLang( $lang_code ){
      App::setLocale($lang_code);
      session()->put("lang_code",$lang_code);
      return redirect()->back();
    }
}
