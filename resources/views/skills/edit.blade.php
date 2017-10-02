@extends('main')

@section('title')
	Edit Skill
@endsection

@section('content')

<div class='container'>
	<div class="row">
		<div class="col-md-8">
		{!! Form::model($skill, ['route' => ['skills.update', $skill->id], 'method' => 'PUT']) !!}
			<h2>Update Skill</h2>
			<hr>
			{{ Form::label('skill', 'Skill:') }}
			<h4>{{ Form::text('skill', null, ["class" => 'form-control']) }}</h4>
		</div>
		<div class="col-md-4">
			<div class='card grey-background well-padding spacing-top'">
				Created At: {{ date('M j, Y h:i a',strtotime($skill->created_at)) }} <br>
				Updated At: {{ date('M j, Y h:i a',strtotime($skill->updated_at)) }}
				<div class="row">
					<div class="col-md-6 spacing-top">
						{{ Form::submit('Save', ['class' => 'btn btn-success btn-block']) }}
						
					</div>
					<div class="col-md-6 spacing-top">
						{!! Html::linkRoute('skills.show', 'Cancel', [$skill->id], ['class' => 'btn btn-danger btn-block']) !!}
					</div>
				</div>
			</div>
		{!! Form::close() !!}
		</div>
	</div>
</div>

@endsection