<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){

        return view('index');
    }

    public function Careers(){

        return view('front.careers');
    }


    public function open(){

        return view('front.openposition');
    }



    public function Details(){

        return view('front.details');
    }
}
