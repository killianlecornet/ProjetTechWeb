<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/users/index')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        @if(auth()->check())
            <li class="nav-item">
                <a class="nav-link" href="{{url('/signout')}}">disconnect</a>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-link" href="{{url('/connexion')}}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/inscription')}}">Register</a>
            </li>
        @endif
      </ul>
    </div>
  </nav>

  

