@extends('main')

@section('title')
	Edit Job
@endsection

	<script src="//cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="//cdn.ckeditor.com/4.7.3/basic/ckeditor.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
	$( function() {
	    $( "#datepicker1, #datepicker2" ).datepicker({constrainInput: false, dateFormat: 'yy-mm-dd'});
	} );
	</script>

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8">
			{!! Form::model($job, ['route' => ['jobs.update', $job->id], 'method' => 'PUT']) !!}
			<h2>Update Job</h2>
			<hr>
			{{ Form::label('job', 'Job:') }}
			<h4>{{ Form::text('job', null, ["class" => 'form-control']) }}</h4>

			{{ Form::label('employer', 'Employer:') }}
			<h4>{{ Form::text('employer', null, ["class" => 'form-control']) }}</h4>

			{{ Form::label('startDate', 'Start Date:') }}
			<h4>{{ Form::text('startDate', null, ["id" => 'datepicker1', "class" => 'form-control']) }}</h4>

			{{ Form::label('endDate', 'End Date:') }}
			<h4>{{ Form::text('endDate', null, ["id" => 'datepicker2', "class" => 'form-control']) }}</h4>

			{{ Form::label('description', 'Description:') }}
			<h4>{{ Form::textarea('description', null, ["class" => 'form-control']) }}</h4>

			{{ Form::label('accomplishments', 'Accomplishments:') }}
			<h4>{{ Form::textarea('accomplishments', null, ["class" => 'form-control']) }}</h4>
		</div>
		<div class="col-md-4">
			<div class='card grey-background well-padding spacing-top'">
				Created At: {{ date('M j, Y h:i a',strtotime($job->created_at)) }} <br>
				Updated At: {{ date('M j, Y h:i a',strtotime($job->updated_at)) }}
				<div class="row">
					<div class="col-md-6 spacing-top">
						{{ Form::submit('Save', ['class' => 'btn btn-success btn-block']) }}
						
					</div>
					<div class="col-md-6 spacing-top">
						{!! Html::linkRoute('jobs.show', 'Cancel', [$job->id], ['class' => 'btn btn-danger btn-block']) !!}
					</div>
				</div>
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>

	<script>
		CKEDITOR.replace( 'description' );
		CKEDITOR.replace( 'accomplishments' );
	</script>

@endsection

	