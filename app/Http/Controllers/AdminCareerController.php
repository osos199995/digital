<?php

namespace App\Http\Controllers;

use App\Careers;
use App\jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminCareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careers=Careers::all();
        return  view('admin.career.index',compact('careers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
return view('admin.career.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->hasfile('image'))
        {

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
                $file->move('uploads/images/', $filename);

        Careers::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'image'=>$filename,
        ]);
            Session::flash('success','career  Added Successfully');
        return redirect('admin_careers');
    }
        Session::flash('danger','cant add career');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $career=Careers::find($id);
        return view('admin.career.edit',compact('career'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $career = Careers::find($id);

        if($request->image != ''){
            $path = public_path().'/uploads/images/';

            //code for remove old file
            if($career->image != ''  && $career->image != null){
                $file_old = $path.$career->image;
//                unlink($file_old);
            }

            //upload new file
            $file = $request->image;
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);

            //for update in table
            $career->update([
                'image' => $filename,
                'title'=>$request->title,
                'description'=>$request->description,
            ]);
            Session::flash('success','career  edited Successfully');
            return redirect('admin_careers');
        }

        $career->update([
            'image' => $career->image,
            'title'=>$request->title,
            'description'=>$request->description,
        ]);
        Session::flash('success','career  edited Successfully');
        return redirect('admin_careers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jobs=jobs::where('careers_id',$id)->delete();
       $career=Careers::find($id)->delete();

        return redirect()->back();
    }
}
