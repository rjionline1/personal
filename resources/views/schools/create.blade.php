@extends('main')

@section('title')
	Create School
@endsection

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<h1>Create New School</h1>
			<hr>
			{!! Form::open(['route' => 'schools.store', 'data-parsley-validate' => '']) !!}
			
			{{ Form::label('school', 'School:') }}
			{{ Form::text('school', null, ['class' => 'form-control', 'required' =>'', 'maxlength' => '255']) }}

			{{ Form::label('degree', 'Degree:') }}
			{{ Form::text('degree', null, ['class' => 'form-control', 'maxlength' => '255']) }}

			{{ Form::label('details', 'Details:') }}
			{{ Form::text('details', null, ['class' => 'form-control', 'maxlength' => '255']) }}

			{{ Form::submit('Create School', ['class' => 'btn btn-success btn-lg btn-block spacing-top']) }}

			{!! Form::close() !!}
		</div>
	</div>
</div>

@endsection