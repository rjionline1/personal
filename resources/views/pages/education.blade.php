@extends('main')

@section('title')
  Education
@endsection

@section('content')

<div class="row">   
    <h4 class="container">
        <div class="col-lg-12"> 
            <h1>Randall James Inverarity - Education</h1>
            <hr>

<strong>COLLEGE/UNIVERSITY PROGRAMS</strong><br />
    <ul>
        @foreach($schools as $school)
        <li><strong>{{$school->school}}</strong> <br>
        {{$school->degree}} <br>
        {{$school->details}}</li>
        <hr>
        @endforeach
    </ul>
<hr />

<strong>PROFESSIONAL DEVELOPMENT/CERTIFICATIONS</strong><br />
    <ul>
        <li>Food Processing Technology Certificate, University of Guelph, 2003 </li>
        <li>Food Handler Training Certificate (2014-3551), 2014</li>
        <li>Certified Ontario Pest Control Operator (lic.# 4485), 2005</li>
        <li>Dale Carnegie Human Relations Skills Course graduate, 1994</li>
        <li>Pathways Management Leaderships Skill Course graduate, 2012</li>
    </ul>
<hr />

        </h4>
    </div>

@endsection

@section('footer')