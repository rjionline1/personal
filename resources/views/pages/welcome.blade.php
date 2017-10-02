@extends('main')

@section('title')
  Randall James Inverarity
@endsection

@section('content')

    <div class="container">
        
        <div class="row">
            <div class="col-lg-4">
                <img src="images/randyInverarity.jpg" height="300" width="300" id="pic">
            </div>
            <div class="col-lg-8">
                <h1>Randall James Inverarity</h1>
                <hr>
                <h3>
                    Versatile leader with extensive management experience gained through roles in front line supervision,
                    continuous improvement, financial analysis, project leadership, and quality assurance. Responsible for
                    process improvements and cost savings projects resulting in a LEAN transformation culture. Recognized
                    as an effective leader that gains performance and cooperation through positive reinforcement. An
                    innovative thinker with expertise in information system development providing effective solutions
                    to valuable continuous improvement opportunities.

                    With a diverse skill set and knowledge gained during a career that has included roles with Kellogg’s Canada Inc.,
                    Maple Leaf Foods Inc. and Nestle Canada Inc. working in key roles as the Production Operation Supervisor, Operations Finance Business Partner,
                    Quality Assurance Technologist as well as computer programming experience. Graduated in 2015 with honors earning a Business Diploma at Algonquin College. Areas of expertise include:
                </h3>
                <hr>
                <h4>
                
                <div class="row">
                    <ul>
                        
                        @foreach($skills as $skill)
                            <li>{{ $skill->skill }}</li>
                        @endforeach

                    </ul>
                </div>
            </h4>
            </div>
        </div>
    </div>
    <hr />

@endsection

@section('footer')