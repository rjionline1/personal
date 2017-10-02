<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;
use Session;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //create a variable and store all skills in it
        $skills = Skill::all();

        //return a view and pass in the above variable
        return view('skills.index')->withSkills($skills);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('skills.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate form data
        $this->validate($request, [
            'skill' => 'required|max:255'
        ]);

        //store in database
        $skill = new Skill;

        $skill -> skill = $request->skill;

        $skill -> save();

        //success message
        Session::flash("Success", "The skill was successfully created.");

        //redirect to another page
        return redirect()->route('skills.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $skill = Skill::find($id);
        return view('skills.show')->withSkill($skill);
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
        $skill = Skill::find($id);

        //return the edit view passing the above record
        return view('skills.edit')->withSkill($skill);
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
            'skill' => 'required|max:255'
        ]);

        //store in database
        $skill = Skill::find($id);

        $skill->skill = $request->skill;

        $skill -> save();

        //success message
        Session::flash("Success", "The skill was successfully saved.");

        //redirect to another page
        return redirect()->route('skills.show', $skill->id);
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
        $skill = Skill::find($id);

        //delete the record
        $skill->delete();

        //session message
        Session::flash("Success", "The skill was successfully deleted.");

        //redirect to another page
        return redirect()->route('skills.index');


    }
}