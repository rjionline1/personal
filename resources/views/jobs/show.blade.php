@extends('main')

@section('title')
	Show Job
@endsection


@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h1>Job</h1>
			<hr>
			<p>{{ $job->job }}</p>
			<p>{{ $job->employer }}</p>
			Start Date: <p>{{ $job->startDate }}</p>
			End Date: <p>{{ $job->endDate }}</p>
			<p>{!! $job->description !!}</p>
			<p>{!! $job->accomplishments !!}</p>
		</div>
		<div class="col-md-4">
			<div class="card grey-background well-padding spacing-top">
				Created At: {{ date('M j, Y h:i a',strtotime($job->created_at)) }} <br>
				Updated At: {{ date('M j, Y h:i a',strtotime($job->updated_at)) }}
				<div class="row">
					<div class="col-md-6 spacing-top">
						{!! Html::linkRoute('jobs.edit', 'Edit', [$job->id], ['class' => 'btn btn-primary btn-block']) !!}
					</div>
					<div class="col-md-6 spacing-top">
						{!! Form::open(['route' => ['jobs.destroy', $job->id], 'method' => 'DELETE', 'onsubmit' => "return confirm('Are you sure you want to delete?')"]) !!}

						{{ Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) }}

						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection