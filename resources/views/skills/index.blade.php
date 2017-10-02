@extends('main')

@section('title')
	All Skills
@endsection

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h2>All Skills</h2>
		</div>
		<div class="col-md-1">
		</div>
		<div class="col-md-3">
			<a href="{{ route('skills.create') }}" class = "btn btn-lg btn-block btn-primary">Create Skill</a>
		</div>
	</div>

	<div class="row">
			<div class="col-md-12">
				<table class="table">
					<thead>
						<th>#</th>
						<th>Skill</th>
						<th>Created At</th>
						<th>Updated At</th>
						<th></th>
					</thead>
					<tbody>
						
						@foreach ($skills as $skill)
							<tr>
								<th>{{$skill->id}}</th>
								<td>{{$skill->skill}}</td>
								<td>{{$skill->created_at}}</td>
								<td>{{$skill->updated_at}}</td>
								<td>{!! Html::linkRoute('skills.show', 'View', [$skill->id], ['class' => 'btn btn-link btn-sm btn-block']) !!}</td>
							</tr>
						@endforeach

					</tbody>
				</table>
			</div>
		</div>

</div>

@endsection