@extends('main')

@section('title')
	Show Skill
@endsection


@section('content')

<div class='container'>
	<div class="row">
		<div class="col-md-8">
			<h2>Skill</h2>
			<hr>
			<h4>{{ $skill->skill }}</h4>
		</div>
		<div class="col-md-4">
			<div class='card grey-background well-padding spacing-top'">
				Created At: {{ date('M j, Y h:i a',strtotime($skill->created_at)) }} <br>
				Updated At: {{ date('M j, Y h:i a',strtotime($skill->updated_at)) }}
				<div class="row">
					<div class="col-md-6 spacing-top">
						{!! Html::linkRoute('skills.edit', 'Edit', [$skill->id], ['class' => 'btn btn-primary btn-block']) !!}
					</div>
					<div class="col-md-6 spacing-top">
		
						{!! Form::open(['route' => ['skills.destroy', $skill->id], 'method' => 'DELETE', 'onsubmit' => "return confirm('Are you sure you want to delete?')"]) !!}

						{{ Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) }}

						{!! Form::close() !!}

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection