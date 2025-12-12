{{-- resources/views/components/Header.blade.php --}}
<nav class="navbar navbar-expand-lg fixed-top navbar-dark"
     style="background-color: rgba(0,0,0,0.6);
            backdrop-filter: blur(8px);
            font-family:'Orbitron', monospace;">

  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ route('home') }}">
      MyPortfolio
    </a>

    <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto align-items-center gap-2">

        {{-- PUBLIC SECTIONS --}}
        <li class="nav-item"><a class="nav-link" href="#hero">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#achievements">Achievements</a></li>
        <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
        <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>

        {{-- GUEST --}}
        @guest
          <li class="nav-item">
            <a class="nav-link text-warning fw-semibold" href="{{ route('login') }}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-warning fw-semibold" href="{{ route('register') }}">Register</a>
          </li>
        @endguest

        {{-- AUTH --}}
        @auth
          <li class="nav-item">
            <a class="nav-link text-warning fw-semibold" href="{{ route('projects.index') }}">
              Manage Projects
            </a>
          </li>

          <li class="nav-item">
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit" class="btn btn-warning btn-sm fw-bold">
                Logout
              </button>
            </form>
          </li>
        @endauth

      </ul>
    </div>
  </div>
</nav>
