@extends('main')

@section('title')
	Show School
@endsection

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h1>School</h1>
			<hr>
			<p>{{$school->school}}</p>	
			<p>{{$school->degree}}</p>
			<p>{{$school->details}}</p>
		</div>
		<div class="col-md-4">
			<div class="card grey-background well-padding spacing-top">
				Created At: {{ date('M j, Y h:i a',strtotime($school->created_at)) }} <br>
				Updated At: {{ date('M j, Y h:i a',strtotime($school->updated_at)) }}
				<div class="row">
					<div class="col-md-6 spacing-top">
						{!! Html::linkRoute('schools.edit', 'Edit', [$school->id], ['class' => 'btn btn-primary btn-block']) !!}
					</div>
					<div class="col-md-6 spacing-top">
						{!! Form::open(['route' => ['schools.destroy', $school->id], 'method' => 'DELETE', 'onsubmit' => "return confirm('Are you sure you want to delete?')"]) !!}

						{{ Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) }}

						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection