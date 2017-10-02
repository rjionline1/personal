<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;
use Session;

class SchoolsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = School::all();

        return view('schools.index')->withSchools($schools);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schools.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'school' => 'required|max:255',
            'degree' => 'max:255',
            'details' => 'max:255'
        ]);

        $school = new School;

        $school->school = $request->school;
        $school->degree = $request->degree;
        $school->details = $request->details;

        $school->save();

        Session::flash('Success', 'The school has been successfully created.');

        return redirect()->route('schools.show', $school->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $school = school::find($id);
        return view('schools.show')->withSchool($school);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $school = School::find($id);

        return view('schools.edit')->withSchool($school);
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
        $this->validate($request, [
            'school' => 'required|max:255',
            'degree' => 'max:255',
            'details' => 'max:255'
        ]);

        $school = School::find($id);

        $school->school = $request->school;
        $school->degree = $request->degree;
        $school->details = $request->details;

        $school->save();

        Session::flash('Success', 'The school was successfully updated.');

        return redirect()->route('schools.show', $school->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $school = School::find($id);

        $school->delete();

        Session::flash('Success', 'The school has been successfully deleted.');

        Return redirect()->route('schools.index');
    }
}
