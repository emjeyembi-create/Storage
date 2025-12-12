<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@yield('title','MyPortfolio')</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Font (Orbitron) -->
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&display=swap" rel="stylesheet">

  <!-- Devicons + Font Awesome -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    html,body { height:100%; margin:0; }
    body{
      font-family: Arial, sans-serif;
      color: white;
      /* background GIF from your original HTML */
      background: url('https://i.pinimg.com/originals/2c/e2/e0/2ce2e0d8e2eeb0f8bfedf5503a346d4f.gif') no-repeat center center fixed;
      background-size: cover;
    }

    /* minor global adjustments to match your look */
    .navbar { background-color: rgba(0,0,0,0.4); font-family: 'Orbitron', monospace; }
    .orbitron { font-family: 'Orbitron', monospace; }
    .glass { background-color: rgba(0,0,0,0.5); padding: 30px; border-radius: 10px; color: white; }
    .hero-title { font-size: 4rem; text-shadow: 0 0 10px black; }
    .lead-orbit { font-family: 'Orbitron', monospace; font-size:1.2rem; text-shadow: 0 0 5px black; }
    .card-bg { background-color: rgba(0,0,0,0.5); border-radius:10px; }
    .progress .progress-bar { background-color: #ff0040; }
    footer { background-color: rgba(0,0,0,0.6); color: white; padding: 12px 0; }
    @media(max-width:768px){ .hero-title { font-size:2.2rem; } }
  </style>

  @stack('head')
</head>
<body>
  @include('components.Header')
  <main>
    @yield('content')
  </main>

  <footer class="text-center">
    <div>© {{ date('Y') }} Mark's Portfolio. All rights reserved.</div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  @stack('scripts')
</body>
</html>
