<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use Session;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //create a variable and store all records in it
        //$jobs = Job::all();
        $jobs = Job::orderBy('startDate', 'DESC')->get();

        //return a view and pass in the above variable
        return view('jobs.index')->withJobs($jobs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the form data
        $this->validate($request, [
            'job' => 'required|max:255',
            'employer' => 'required|max:255',
            'startDate' => 'required|max:255',
            'endDate' => 'required|max:255',
            'description' => 'required'
        ]);

        //store in the database
        $job = new Job;

        $job->job = $request->job;
        $job->employer = $request->employer;
        $job->startDate = $request->startDate;
        $job->endDate = $request->endDate;
        $job->description = $request->description;
        $job->accomplishments = $request->accomplishments;

        $job->save();

        //success message
        Session::flash('Success', 'The job was successfully saved.');

        //redirect to another page
        return redirect()->route('jobs.show', $job->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = Job::find($id);
        return view('jobs.show')->withJob($job);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the record to be updated
        $job = Job::find($id);

        //return the edit view passing the above record
        return view('jobs.edit')->withJob($job);
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
        //validate form data
        $this->validate($request, [
            'job' => 'required|max:255',
            'employer' => 'required|max:255',
            'startDate' => 'required|max:255',
            'endDate' => 'required|max:255',
            'description' => 'required'
        ]);

        //store in database
        $job = Job::find($id);

        $job->job = $request->job;
        $job->employer = $request->employer;
        $job->startDate = $request->startDate;
        $job->endDate = $request->endDate;
        $job->description = $request->description;
        $job->accomplishments = $request->accomplishments;

        $job->save();

        //success message
        Session::flash('Success', 'The job was successfully updated.');

        //redirect to another page
        return redirect()->route('jobs.show', $job->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //find the record to delete
        $job = Job::find($id);

        //delete the record
        $job->delete();

        //session message
        Session::flash('Success', 'The job has been successfully deleted.');

        //redirect to another page
        return redirect()->route('jobs.index');
    }

    public function getTest () {
        return view('jobs.test');
    }
}
