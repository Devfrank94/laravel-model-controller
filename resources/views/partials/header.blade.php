<header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary nav-tabs pb-0 pt-3">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Route::currentRouteName() === 'movies' ? 'active' : ''}}" href="{{route('movies')}}">Elenco Film</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
