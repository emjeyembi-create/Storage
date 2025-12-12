@extends('layouts.app')

@section('title','Mark — Portfolio')

@section('content')
<section id="hero" class="d-flex align-items-center" style="height: 100vh; background: transparent;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 text-center">
        <img src="https://raw.githubusercontent.com/emjeyembi-create/Storage/63998409103c4cf068655841529e717320f82b11/Home.png"
             alt="Profile Picture" style="width: 300px; height: 300px; border-radius: 50%;">
      </div>

      <div class="col-md-6 text-center text-md-start">
        <h3 class="mb-4 orbitron" style="color: white; font-size: 4rem; text-shadow: 0 0 10px black;">
          Hi, I'm <span style="color: white;">Mark <hr></span>
        </h3>
        <p class="lead orbitron" style="color: white; font-size: 1.5rem; text-shadow: 0 0 5px black;">
          I'm a Computer Science student and aspiring Front-End Developer — coding, designing, and learning with purpose to create meaningful digital experiences.
        </p>
        <a href="#contact" class="btn mt-4 btn-lg" style="background-color: #FFD700; color: black; border: none; box-shadow: 0 0 10px #000;">Contact Me</a>
      </div>
    </div>
  </div>
</section>

<!-- ABOUT -->
<section id="about" class="py-5">
  <div class="container">
    <h2 class="text-center mb-4 orbitron" style="color: #FFD700;">About Me</h2>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="glass">
          <blockquote class="orbitron" style="font-size: 1.1rem;">My name is Mark Joseph Marcelo Balatbat, a 22-year-old student from Porac, Pampanga, currently pursuing a BS in Computer Science...</blockquote>
          <blockquote class="orbitron" style="font-size: 1.1rem;">Outside of academics, I enjoy online gaming—Mobile Legends and Call of Duty Mobile...</blockquote>
          <blockquote class="orbitron" style="font-size: 1.1rem;">I’m an avid coffee enthusiast, often drawing inspiration from a good brew.</blockquote>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ACHIEVEMENTS: keep your original cards -->
<section id="achievements" class="container mt-5 orbitron">
  <div class="glass">
    <h2 class="text-center mb-4" style="color: #FFD700;"><strong>My Achievements</strong></h2>
    <p class="lead">Throughout my college years, I actively participated in various extracurricular events...</p>
  </div>

  <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
    <!-- keep your achievement cards markup here (same as your original) -->
    {{-- copy your cards here --}}
  </div>
</section>

<!-- PROJECTS -->
<section id="projects" class="py-5 orbitron">
  <div class="container">
    <h2 class="text-center mb-4" style="color: #FFD700;"><strong>My Projects</strong></h2>

    <div class="row g-4">
      @if(isset($projects) && $projects->count())
        @foreach($projects as $project)
          <div class="col-md-6">
            <div class="card h-100 bg-transparent border-0">
              @if($project->image)
                <img src="{{ asset('storage/'.$project->image) }}" class="card-img-top" alt="{{ $project->title }}" style="height:400px; object-fit:cover;">
              @else
                <img src="https://via.placeholder.com/800x400?text=Project" class="card-img-top" alt="{{ $project->title }}" style="height:400px; object-fit:cover;">
              @endif
              <div class="card-body glass">
                <h5 class="card-title" style="color:white;">{{ $project->title }}</h5>
                <p class="card-text" style="color:white;">{{ Str::limit($project->description, 150) }}</p>
                @if($project->link)
                  <a href="{{ $project->link }}" class="btn btn-warning btn-sm mt-2" target="_blank">Live Demo</a>
                @endif
              </div>
            </div>
          </div>
        @endforeach
      @else
        {{-- fallback to static examples if no DB projects --}}
        {{-- copy one or two of your original static project cards here --}}
      @endif
    </div>
  </div>
</section>

<!-- SKILLS (copy your existing markup) -->
<section id="skills" class="py-5 text-white">
  <div class="container">
    <h2 class="text-center mb-4" style="color: #FFD700;"><strong>Skills</strong></h2>
    {{-- keep your progress bars here --}}
  </div>
</section>

<!-- CONTACT -->
<section id="contact" class="py-5 orbitron">
  <div class="container">
    <h2 class="text-center mb-4" style="color: #FFD700;"><strong>Contact Me</strong></h2>
    {{-- keep your contact form (formsubmit or internal) --}}
  </div>
</section>
@endsection
