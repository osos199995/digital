<?php

namespace App\Http\Controllers;

use App\Careers;
use App\Countries;
use App\jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminJobsController extends Controller
{
    public function index()
    {
        $jobs=jobs::all();
        return  view('admin.jobs.index',compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $careers=Careers::all();
        return view('admin.jobs.create',compact('careers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input=$request->all();
        jobs::create($input);
        Session::flash('success','jobs  Added Successfully');
        return redirect('admin_jobs');
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
        $job=jobs::find($id);
        $careers=Careers::all();
        return view('admin.jobs.edit',compact('job','careers'));
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

        jobs::find($id)->update([
            'title'=>$request->title,
            'quote'=>$request->quote,
            'job_requirements'=>$request->job_requirements,
            'job_reponsabilities'=>$request->job_reponsabilities,
            'careers_id'=>$request->careers_id,
        ]);
        Session::flash('success','jos Updated Successfully');
        return redirect('admin_jobs');
        }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        jobs::find($id)->delete();
        Session::flash('danger','jobs Deleted Successfully');
        return redirect()->back();
    }
}
