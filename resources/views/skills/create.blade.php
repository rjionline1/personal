@extends('main')

@section('styles')
	<link rel="stylesheet" href="/css/parsley.css" class="style">
@endsection

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<h1>Create New Skill</h1>
			<hr>
			{!! Form::open(['route' => 'skills.store', 'data-parsley-validate' => '']) !!}
				{{ Form::label('skill', 'Skill:') }}
				{{ Form::text('skill', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '255']) }}

				{{ Form::submit('Create Skill', ['class' => 'btn btn-success btn-lg btn-block spacing-top']) }}
			{!! Form::close() !!}
		</div>
	</div>
</div>



@endsection

@section('footer')

@section('scripts')
	<script src="jquery.js"></script>
	<script src="parsley.min.js"></script>
@endsection