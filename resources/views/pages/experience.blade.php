@extends('main')

@section('title')
  Experience
@endsection

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12 lg-font">
            <h1>Randall James Inverarity - Experience</h1>
            <ul>
                
                @foreach($jobs as $job)
                    <li>
                        <strong>{{ $job->job }}</strong> <br>
                        <strong>{{ $job->employer }}</strong> <br>
                        Start Date: <strong>{{ $job->startDate }}</strong> <br>
                        End Date: <strong>{{ $job->endDate }}</strong> <br><br>
                        {!! $job->description !!} <br>
                        {!! $job->accomplishments !!} <br>
                        <hr>
                    </li>
                @endforeach

            </ul>
        </div>
    </div>
</div>

@endsection

@section('footer')