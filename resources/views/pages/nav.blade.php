
<link rel="stylesheet" href="styles.css" class="style">

<h2><nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" id="welcome" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="experience" href="experience">Experience</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="education" href="education">Education</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="contact" href="contact">Contact</a>
      </li>
    </ul>

  </div>
  <ul class="nav navbar-nav navbar-right small-font">
    <li>1-226-376-2543 <a href="mailto:randy.inverarity@gmail.com?Subject=Resume" target="_top">randy.inverarity@gmail.com</a></li>
  </ul>
  @if(Auth::check())
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello {{ Auth::user()->name }}<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('posts.index')}}">Posts</a></li>
            <li><a href="{{route('categories.index')}}">Categories</a></li>
            <li><a href="{{route('tags.index')}}">Tags</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form></li>
          </ul>
        </li>
        @else
          <a href="{{ route('login') }}" class="btn btn-link">Login</a>
        @endif
</nav></h2>



<p id="demo"></p>

    <script>
        //document.getElementById("demo").innerHTML = location.pathname.substring(location.pathname.lastIndexOf("/") + 1); 

        (location.pathname.substring(location.pathname.lastIndexOf("/") + 1) == "" ? document.getElementById("welcome").className = "nav-link active" : '');
        (location.pathname.substring(location.pathname.lastIndexOf("/") + 1) == "experience" ? document.getElementById("experience").className = "nav-link active" : '');
        (location.pathname.substring(location.pathname.lastIndexOf("/") + 1) == "education" ? document.getElementById("education").className = "nav-link active" : '');
        (location.pathname.substring(location.pathname.lastIndexOf("/") + 1) == "contact" ? document.getElementById("contact").className = "nav-link active" : '');
        
    </script>

