<?php 

namespace App\Http\Controllers;
use App\Skill;
use App\Job;
use App\School;

class PagesController extends Controller {

	public function getIndex () {

		$skills = Skill::all();
        return view('pages.welcome')->withSkills($skills);
	}

	public function getExperience () {
		//$jobs = Job::all();
		$jobs = Job::orderBy('startDate', 'DESC')->get();
		return view('pages.experience')->withJobs($jobs);
	}

	public function getEducation () {
		$schools = School::all();
		return view('pages.education')->withSchools($schools);
	}

	public function getContact () {
		return view('pages.contact');
	}

}
