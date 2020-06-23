<?php

namespace App\Http\Controllers;

use App\Careers;
use App\jobs;
use App\Candidates;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

   public function store(Request $request){
        $request->validate([
            'first_name'=>'required|string',
            'last_name'=>'required|string',
            'position'=>'required|string',
            'cv'=>'required|max:10000|mimes:doc,docx,pdf',

        ]);
        if($request->hasfile('cv'))
        {

            $file = $request->file('cv');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =$request->first_name.$request->last_name.time().'.'.$extension;
            $file->move('uploads/cvs/', $filename);

            Candidates::create([
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'position'=>$request->position,
                'cv'=>$filename,
            ]);
            Session::flash('success',$request->first_name .' congratiulation you applied successfully');
            return redirect()->back();
        }
       Session::flash('danger',$request->first_name.' opps you application failed');
        return redirect()->back();
    }


    public function Details($id){
        $job=jobs::where('careers_id',$id)->first();
        return view('front.details',compact('job'));
    }
}
