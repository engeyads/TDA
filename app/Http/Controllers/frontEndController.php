<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontEndController extends Controller
{
    public function istanbulproperties(){
        $results = DB::select('select * from users where id = ?', array(1));
        return view('frontend.istanbulproperties');
    }
    public function properties(){
        return view('frontend.properties');
    }
    public function wednesday(){
        return view('frontend.wednesday');
    }
    public function rent(){
        return view('frontend.rent');
    }
    public function froud(){
        return view('frontend.froud');
    }
    public function blog(){
        return view('frontend.blog');
    }
    public function channel(){
        return view('frontend.channel');
    }
    public function about(){
        return view('frontend.about');
    }
    public function dictionary(){
        return view('frontend.dictionary');
    }
}
