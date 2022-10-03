<nav class="navbar navbar-expand-lg bg-danger">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/')?'active' : '' }}"  href="home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('about')?'active' : '' }}" href="about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('berita')?'active' : '' }}" href="berita">Berita</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="a" id="navbarDropdown"
              role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome Back, {{  auth() ->user()->name }}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/dashboard"> <i class="bi
                  bi-layout-text-sidebar-reverse"></i>
                  <li>
                    <form action="/logout" method="POST">
                      @csrf
                      <button type="submit" class="dropdown-item"><i class="bi
                        bi-box-arrow-right"></i> logout</button>
                    </form>
                  </li>
                </ul>
            </li>
            @else
            <li class="nav-item">
              <a href="/login" class="nav-link {{ Request::is('login')? 'active' :'' }}"><i class="bi bi-box-arrow-in-right"></i>Login</a>
            </li>
        @endauth
    </div>
  </div>
</nav>