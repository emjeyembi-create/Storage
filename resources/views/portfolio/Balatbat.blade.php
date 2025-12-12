@extends('layouts.app')

@section('title','MyPortfolio')

@section('content')

<section id="hero" class="d-flex align-items-center" style="height: 100vh; background: transparent;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 text-center">
        <!-- profile image (same source you used) -->
        <img src="https://github.com/emjeyembi-create/Storage/blob/main/Home.png?raw=true" alt="Profile Picture"
             style="width: 300px; height: 300px; border-radius: 50%; object-fit:cover;">
      </div>

      <div class="col-md-6 text-center text-md-start">
        <h1 class="mb-4 hero-title orbitron" style="color: white;">
          Hi, I'm <span style="color: white;">Mark</span>
          <hr style="border-top:1px solid rgba(255,255,255,0.12); width:70%;">
        </h1>

        <p class="lead lead-orbit">
          I'm a Computer Science student and aspiring Front-End Developer — coding, designing, and learning with purpose to create meaningful digital experiences.
        </p>
        <a href="#contact" class="btn mt-4 btn-lg" style="background-color: #FFD700; color: black; border: none; font-family: 'Orbitron', monospace; box-shadow: 0 0 10px #000;">Contact Me</a>
      </div>
    </div>
  </div>
</section>

<section id="about" class="py-5">
  <div class="container">
    <h2 class="text-center mb-4 orbitron" style="text-shadow: 1px 1px 2px black; color: #FFD700;">About Me</h2>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="glass">
          <blockquote class="orbitron" style="font-size:1.1rem;">
            My name is Mark Joseph Marcelo Balatbat, a 22-year-old student from Porac, Pampanga, currently pursuing a Bachelor of Science in Computer Science (BSCS). I am passionate about technology and constantly seek opportunities to expand my knowledge and apply my skills in real-world settings.
          </blockquote>
          <blockquote class="orbitron" style="font-size:1.1rem;">
            Outside of academics, I enjoy online gaming—particularly Mobile Legends and Call of Duty Mobile—as a way to enhance strategic thinking and teamwork. I also have a strong appreciation for traditional art, with a focus on portraiture, which allows me to express creativity and attention to detail.
          </blockquote>
          <blockquote class="orbitron" style="font-size:1.1rem;">
            Additionally, I’m an avid coffee enthusiast, often drawing inspiration and focus from a good brew during late-night study sessions and creative projects.
          </blockquote>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="achievements" class="container mt-5 orbitron">
  <div class="glass text-center">
    <h2 class="mb-4" style="color:#FFD700;"><strong>My Achievements</strong></h2>
    <p class="lead">Throughout my college years, I actively participated in various extracurricular events that helped me grow both personally and socially. Some of my notable achievements include joining and winning in school competitions such as LED Light Dance and Dodgeball, as well as placing in traditional games like Agawan Panyo.</p>
  </div>

  <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
    <!-- Use the same images you provided (imgur) -->
    <div class="col">
      <div class="card h-100 bg-transparent border-0">
        <img src="https://github.com/emjeyembi-create/Storage/blob/main/ledlights.png?raw=true" class="card-img-top" alt="LedLightsDanceChampion" style="height:250px; object-fit:cover;">
        <div class="card-body card-bg">
          <h5 class="card-title" style="color:white;"><strong>Software Freedom Day</strong></h5>
          <p class="card-text" style="color:white;">LED Light Dance Champion</p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card h-100 bg-transparent border-0">
        <img src="https://github.com/emjeyembi-create/Storage/blob/main/dodgeball.jpeg?raw=true" class="card-img-top" alt="DodgeBallChampion" style="height:250px; object-fit:cover;">
        <div class="card-body card-bg">
          <h5 class="card-title" style="color:white;"><strong>Physical Education Days</strong></h5>
          <p class="card-text" style="color:white;">Dodgeball Champion</p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card h-100 bg-transparent border-0">
        <img src="https://github.com/emjeyembi-create/Storage/blob/main/agawanpanyo.png?raw=true" class="card-img-top" alt="AgawanPanyo" style="height:250px; object-fit:cover;">
        <div class="card-body card-bg">
          <h5 class="card-title" style="color:white;"><strong>College Days</strong></h5>
          <p class="card-text" style="color:white;">3rd Place, Agawan Panyo Competition</p>
        </div>
      </div>
    </div>

    <!-- extra cards -->
    <div class="col">
      <div class="card h-100 bg-transparent border-0">
        <img src="https://github.com/emjeyembi-create/Storage/blob/main/bass.png?raw=true" class="card-img-top" alt="Bass Guitar" style="height:250px; object-fit:cover;">
        <div class="card-body card-bg">
          <h5 class="card-title" style="color:white;"><strong>Interest</strong></h5>
          <p class="card-text" style="color:white;">Playing Bass Guitar</p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card h-100 bg-transparent border-0">
        <img src="https://github.com/emjeyembi-create/Storage/blob/main/gaming.png?raw=true" class="card-img-top" alt="Gaming" style="height:250px; object-fit:cover;">
        <div class="card-body card-bg">
          <h5 class="card-title" style="color:white;"><strong>Interest</strong></h5>
          <p class="card-text" style="color:white;">Online Gaming</p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card h-100 bg-transparent border-0">
        <img src="https://github.com/emjeyembi-create/Storage/blob/main/art.png?raw=true" class="card-img-top" alt="Art" style="height:250px; object-fit:cover;">
        <div class="card-body card-bg">
          <h5 class="card-title" style="color:white;"><strong>Interest</strong></h5>
          <p class="card-text" style="color:white;">Traditional Art</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="projects" class="py-5 orbitron">
  <div class="container">
    <h2 class="text-center mb-4" style="color: #FFD700;"><strong>My Projects</strong></h2>
    <div class="row g-4">
      <div class="col-md-6">
        <div class="card h-100 bg-transparent border-0">
          <img src="https://github.com/emjeyembi-create/Storage/blob/main/foodordering.png?raw=true" class="card-img-top" alt="Project 1" style="height:400px; object-fit:cover;">
          <div class="card-body card-bg">
            <h5 class="card-title" style="color:white;">Prototype</h5>
            <p class="card-text" style="color:white;">Food Ordering Application</p>
            <a href="https://www.figma.com/proto/GwWITzaxAv6drDEZ0C3amF/Untitled?node-id=7-6&p=f&t=fHBq2eK7px25IOea-1&scaling=scale-down&content-scaling=fixed&page-id=0%3A1&starting-point-node-id=7%3A6" class="btn btn-warning btn-sm mt-2">Live Demo</a>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card h-100 bg-transparent border-0">
          <img src="https://github.com/emjeyembi-create/Storage/blob/main/realestate.png?raw=true" class="card-img-top" alt="Project 2" style="height:400px; object-fit:cover;">
          <div class="card-body card-bg">
            <h5 class="card-title" style="color:white;">Prototype</h5>
            <p class="card-text" style="color:white;">Real Estate Website</p>
            <a href="https://www.figma.com/proto/sKaZKUShkVb6LxT8xi4ZEO/WEB1?node-id=1-2&p=f&t=D6XWKjTZFxqHLzcz-1&scaling=min-zoom&content-scaling=fixed&page-id=0%3A1&starting-point-node-id=1%3A2" class="btn btn-warning btn-sm mt-2">Live Demo</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section id="skills" class="py-5 orbitron">
  <div class="container">
    <h2 class="text-center mb-4" style="color:#FFD700;"><strong>Skills</strong></h2>
    <p class="text-center lead mb-5" style="color:rgba(255,255,255,0.9);">Here are some of the programming languages I’m familiar with and my current skill levels shown as percentage bars.</p>

    <!-- Programming Languages -->
    <div class="row text-center g-4">
      <div class="col-md-3 col-6">
        <i class="devicon-c-plain" style="font-size:2.5rem;"></i>
        <p>C</p>
        <div class="progress"><div class="progress-bar" style="width:70%;">70%</div></div>
      </div>
      <div class="col-md-3 col-6">
        <i class="devicon-java-plain" style="font-size:2.5rem;"></i>
        <p>Java</p>
        <div class="progress"><div class="progress-bar" style="width:60%;">60%</div></div>
      </div>
      <div class="col-md-3 col-6">
        <i class="devicon-python-plain" style="font-size:2.5rem;"></i>
        <p>Python</p>
        <div class="progress"><div class="progress-bar" style="width:80%;">80%</div></div>
      </div>
      <div class="col-md-3 col-6">
        <i class="devicon-mysql-plain" style="font-size:2.5rem;"></i>
        <p>MySQL</p>
        <div class="progress"><div class="progress-bar" style="width:80%;">80%</div></div>
      </div>
    </div>

    <!-- Tools & IDEs -->
    <div class="mt-4 text-center">
      <h5 style="color:#FFD700;">Tools & IDEs</h5>
      <div class="row g-3 mt-2">
        <div class="col-md-3 col-6">Photoshop <div class="progress"><div class="progress-bar" style="width:60%;">60%</div></div></div>
        <div class="col-md-3 col-6">Figma <div class="progress"><div class="progress-bar" style="width:80%;">80%</div></div></div>
        <div class="col-md-3 col-6">Android Studio <div class="progress"><div class="progress-bar" style="width:75%;">75%</div></div></div>
        <div class="col-md-3 col-6">VS Code <div class="progress"><div class="progress-bar" style="width:85%;">85%</div></div></div>
      </div>
    </div>
  </div>
</section>

<section id="projects" class="py-5 orbitron">
  <div class="container">
    <h2 class="text-center mb-4" style="color:#FFD700;">
      <strong>My Projects</strong>
    </h2>

    <div class="row g-4">

      @forelse($projects ?? \App\Models\Project::latest()->get() as $project)
        <div class="col-md-6">
          <div class="card h-100 bg-transparent border-0">

            @if($project->image)
              <img
                src="{{ asset('storage/'.$project->image) }}"
                class="card-img-top"
                alt="{{ $project->title }}"
                style="height:400px; object-fit:cover;">
            @endif

            <div class="card-body card-bg">
              <h5 class="card-title text-white">
                {{ $project->title }}
              </h5>

              <p class="card-text text-white">
                {{ $project->description }}
              </p>

              @if($project->link)
                <a
                  href="{{ $project->link }}"
                  target="_blank"
                  class="btn btn-warning btn-sm mt-2">
                  Live Demo
                </a>
              @endif
            </div>

          </div>
        </div>
      @empty
        <div class="col-12 text-center">
          <p class="text-muted">No projects added yet.</p>
        </div>
      @endforelse

    </div>
  </div>
</section>

@endsection
