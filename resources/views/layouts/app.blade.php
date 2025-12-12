<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@yield('title', 'MyPortfolio')</title>

  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>

  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    body {
      font-family: Arial, sans-serif;
      color: white;
      background: url('https://i.pinimg.com/originals/2c/e2/e0/2ce2e0d8e2eeb0f8bfedf5503a346d4f.gif') no-repeat center center fixed;
      background-size: cover;
    }
    .orbitron { font-family: 'Orbitron', monospace; }
    .glass { background-color: rgba(0,0,0,0.5); border-radius:10px; padding:20px; }
    .nav-link { color: #fff !important; }
  </style>

  @stack('head')
</head>
<body>

<nav class="navbar navbar-expand-lg sticky-top" style="background-color: rgba(0, 0, 0, 0.4);">
  <div class="container">
    <a class="navbar-brand text-light orbitron" href="{{ route('home') }}"><strong>MyPortfolio</strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
        <li class="nav-item"><a class="nav-link" href="#hero">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#achievements">Achievements</a></li>
        <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
        <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>

        @guest
          <li class="nav-item"><a class="nav-link" href="{{ route('login.form') }}">Login</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('register.form') }}">Register</a></li>
        @endguest

        @auth
          <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
          <li class="nav-item">
            <form action="{{ route('logout') }}" method="POST" class="d-inline">
              @csrf
              <button class="btn btn-link nav-link" style="display:inline; padding:0;">Logout</button>
            </form>
          </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>

<main>
  @yield('content')
</main>

<footer class="text-center py-3" style="background-color: rgba(0, 0, 0, 0.6); color: white;">
  <div>© {{ date('Y') }} Mark's Portfolio. All rights reserved.</div>
</footer>

@stack('scripts')
</body>
</html>
