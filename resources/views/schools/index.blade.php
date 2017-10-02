@extends('main')

@section('title')
	All Schools
@endsection

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h2>All Schools</h2>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>#</th>
					<th>School</th>
					<th>Degree</th>
					<th>Details</th>
					<th></th>
				</thead>
				<tbody>
					
					@foreach($schools as $school)
						<tr>
							<th>{{$school->id}}</th>
							<td>{{$school->school}}</td>
							<td>{{$school->degree}}</td>
							<td>{{$school->details}}</td>
							<td>{!!Html::linkRoute('schools.show', 'view', [$school->id],['class' => 'btn btn-link btn-sm'])!!}</td>
						</tr>
					@endforeach

				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection