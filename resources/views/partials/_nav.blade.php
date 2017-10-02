
<link rel="stylesheet" href="styles.css" class="style">

<h2><nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" id="welcome" href="{{route('index')}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="experience" href="{{route('experience')}}">Experience</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="education" href="{{route('education')}}">Education</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="contact" href="{{route('contact')}}">Contact</a>
      </li>
    </ul>
  </div>



  <ul class="nav navbar-nav navbar-right small-font">
    <li>1-226-376-2543 <a href="mailto:randy.inverarity@gmail.com?Subject=Resume" target="_top">randy.inverarity@gmail.com</a></li>
  </ul>

  <ul class="nav navbar-nav navbar-right small-font">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          @if(Auth::check())
          {{ Auth::user()->name }}</a>

            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="{{ route('skills.create') }}">Create New Skill</a>
              <a class="dropdown-item" href="{{ route('skills.index') }}">View All Skills</a>
              <a class="dropdown-item" href="{{ route('jobs.create') }}">Create New Job</a>
              <a class="dropdown-item" href="{{ route('jobs.index') }}">View All Jobs</a>
              <a class="dropdown-item" href="{{ route('schools.create') }}">Create New School</a>
              <a class="dropdown-item" href="{{ route('schools.index') }}">View All Schools</a>
              
              <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                  Logout
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
            </div>

          @else
            <a class = "login-link" href="{{route('home')}}">Login</a>
          @endif
        </a>
        
      </li>
  </ul>

</nav></h2>



<p id="demo"></p>

    <script>
        //document.getElementById("demo").innerHTML = location.pathname.substring(location.pathname.lastIndexOf("/") + 1); 

        (location.pathname.substring(location.pathname.lastIndexOf("/") + 1) == "" ? document.getElementById("welcome").className = "nav-link active" : '');
        (location.pathname.substring(location.pathname.lastIndexOf("/") + 1) == "experience" ? document.getElementById("experience").className = "nav-link active" : '');
        (location.pathname.substring(location.pathname.lastIndexOf("/") + 1) == "education" ? document.getElementById("education").className = "nav-link active" : '');
        (location.pathname.substring(location.pathname.lastIndexOf("/") + 1) == "contact" ? document.getElementById("contact").className = "nav-link active" : '');
        
    </script>

