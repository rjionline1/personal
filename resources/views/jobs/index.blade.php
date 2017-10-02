@extends('main')

@section('title')
	All Jobs
@endsection

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h2>All Jobs</h2>
		</div>
		<div class="col-md-1">
		</div>
		<div class="col-md-3">
			<a href="{{ route('jobs.create') }}" class = "btn btn-lg btn-block btn-primary">Create job</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Job</th>
					<th>Employer</th>
					<th>Start Date</th>
					<th>End Date</th>
					<th>Description</th>
					<th>Accomplishments</th>
					<th>Created</th>
					<th>Updated</th>
				</thead>
				<tbody>
					
					@foreach ($jobs as $job)
						<tr>
							<th>{{$job->id}}</th>
							<td>{{$job->job}}</td>
							<td>{{$job->employer}}</td>
							<td>{{$job->startDate}}</td>
							<td>{{$job->endDate}}</td>
							<td>{!!$job->description!!}</td>
							<td>{!!$job->accomplishments!!}</td>
							<td>{{$job->created_at}}</td>
							<td>{{$job->updated_at}}</td>
							<td>{!! Html::linkRoute('jobs.show', 'View', [$job->id], ['class' => 'btn btn-link btn-sm btn-block']) !!}</td>
						</tr>
					@endforeach

				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection