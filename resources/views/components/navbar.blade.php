<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('homepage')}}">mini blogr</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="{{route('homepage')}}">Home</a>
          </li>
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">accedi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">registrati</a>
          </li>          
          @endguest
          @auth
          <li class="nav-item">
            <form action="{{route('logout')}}" method="POST">
            @csrf
            <button type="submit" class="nav-link">logout</button>
          </form>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>
  {{{$slot}}}