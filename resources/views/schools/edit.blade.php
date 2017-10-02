@extends('main')

@section('title')
	Edit School
@endsection

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h2>Update School</h2>

			{!! Form::model($school, ['route' => ['schools.update', $school->id], 'method' => 'PUT']) !!}

			{{ Form::label('school', 'School:') }}
			{{ Form::text('school', null, ['class' => 'form-control']) }}

			{{ Form::label('degree', 'Degree:') }}
			{{ Form::text('degree', null, ['class' => 'form-control']) }}

			{{ Form::label('details', 'Details:') }}
			{{ Form::text('details', null, ['class' => 'form-control']) }}

		</div>
		<div class="col-md-4">
			<div class="card grey-background well-padding spacing-top">
				Created At: {{ date('M j, Y h:i a', strtotime($school->created_at)) }} <br>
				Updated At: {{ date('M j, Y h:i a',strtotime($school->updated_at)) }}
				<div class="row">
					<div class="col-md-6">
						{{ Form::submit('Save', ['class' => 'btn btn-success btn-block']) }}
					</div>
					<div class="col-md-6">
						{{ Html::linkRoute('schools.show', 'Cancel', [$school->id], ['class' => 'btn btn-danger btn-block']) }}
					</div>
				</div>
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>

@endsection