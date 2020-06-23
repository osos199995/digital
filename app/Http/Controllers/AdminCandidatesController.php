<?php

namespace App\Http\Controllers;

use App\Candidates;
use Illuminate\Http\Request;

class AdminCandidatesController extends Controller
{
    public function store($id, Request $request){
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

            return redirect('/');
        }
         return redirect('/');
    }

    public function index(){
        $candidates=Candidates::all();
        return view('admin.candidates.index',compact('candidates'));
    }

    public function destroy($id){
        $candidate=Candidates::find($id)->delete();
        return redirect()->back();
    }
}
