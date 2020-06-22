<?php

namespace App\Http\Controllers;

use App\Careers;
use App\jobs;
use App\Service;
use Illuminate\Http\Request;

class CareersController extends Controller
{
    public function index(){
        $services=Service::all();
        return view('index',compact('services'));
    }

    public function Careers(){
        $careers=Careers::all();
        return view('front.careers',compact('careers'));
    }


    public function open($id){

        $jobs=jobs::where('careers_id',$id)->get();

        return view('front.openposition',compact('jobs'));
    }



    public function Details($id){
        $job=jobs::where('careers_id',$id)->first();
        return view('front.details',compact('job'));
    }
}
