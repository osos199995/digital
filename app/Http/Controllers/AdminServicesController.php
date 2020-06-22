<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminServicesController extends Controller
{
    public function index()
    {
        $services=Service::all();
        return  view('admin.service.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
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

            Service::create([
                'title'=>$request->title,
                'category'=>$request->category,
                'description1'=>$request->description1,
                'description2'=>$request->description2,
                'forward'=>$request->forward,
                'date'=>$request->date,
                'image'=>$filename,
            ]);
            Session::flash('success','career  Added Successfully');
            return redirect('admin_service');
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
        $service=Service::find($id);
        return view('admin.service.edit',compact('service'));
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
        $service = Service::find($id);

        if($request->image != ''){
            $path = public_path().'/uploads/images/';

            //code for remove old file
            if($service->image != ''  && $service->image != null){
                $file_old = $path.$service->image;
//                unlink($file_old);
            }

            //upload new file
            $file = $request->image;
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);

            //for update in table
            $service->update([
                'title'=>$request->title,
                'category'=>$request->category,
                'description1'=>$request->description1,
                'description2'=>$request->description2,
                'forward'=>$request->forward,
                'date'=>$request->date,
                'image'=>$filename,
            ]);
            Session::flash('success','services  edited Successfully');
            return redirect('admin_service');
        }

        $service->update([
            'image' => $service->image,
            'title'=>$request->title,
            'category'=>$request->category,
            'description1'=>$request->description1,
            'description2'=>$request->description2,
            'forward'=>$request->forward,
            'date'=>$request->date,

        ]);
        Session::flash('success','services  edited Successfully');
        return redirect('admin_service');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $service=Service::find($id)->delete();

        return redirect()->back();
    }
}
