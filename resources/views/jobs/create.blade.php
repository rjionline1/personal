@extends('main')

@section('title')
	Create Job
@endsection

@section('styles')
	<link rel="stylesheet" href="/css/parsley.css" class="style">
@endsection

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="//cdn.ckeditor.com/4.7.3/basic/ckeditor.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
	$( function() {
	    $( "#datepicker1, #datepicker2" ).datepicker({constrainInput: false});
	} );
	</script>

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<h1>Create New Job</h1>
			<hr>
			{!! Form::open(['route' => 'jobs.store', 'data-parsley-validate' => '']) !!}

			{{ Form::label('job', 'Job:') }}
			{{ Form::text('job', null, ['class' => 'form-control', 'required' =>'', 'maxlength' => '255']) }}

			{{ Form::label('employer', 'Employer:') }}
			{{ Form::text('employer', null, ['class' => 'form-control', 'required' =>'', 'maxlength' => '255']) }}

			{{ Form::label('startDate', 'Start Date:') }}
			<input type="text" name='startDate' id="datepicker1" class="form-control">

			{{ Form::label('endDate', 'End Date:') }}
			<input type="text" name='endDate' id="datepicker2" class="form-control">

			{{ Form::label('description', 'Description:') }}
			{{ Form::textarea('description', null, ['class' => 'form-control', 'required' =>'']) }}

			{{ Form::label('accomplishments', 'Accomplishments:') }}
			{{ Form::textarea('accomplishments', null, ['class' => 'form-control', 'required' =>'']) }}

			{{ Form::submit('Create Job', ['class' => 'btn btn-success btn-lg btn-block spacing-top']) }}
		</div>
	</div>
</div>

	<script>
		CKEDITOR.replace( 'description' );
		CKEDITOR.replace( 'accomplishments' );
	</script>

@endsection