<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MyPortfolio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body style="font-family: Arial, sans-serif; background: url('https://i.pinimg.com/originals/2c/e2/e0/2ce2e0d8e2eeb0f8bfedf5503a346d4f.gif') no-repeat center center fixed; background-size: cover; color: white;">

<nav class="navbar navbar-expand-lg sticky-top" style="background-color: rgba(0, 0, 0, 0.4); font-family: 'Orbitron', sans-serif;">
  <div class="container">
    <a class="navbar-brand text-light" href="#hero"><strong>MyPortfolio</strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active text-light" aria-current="page" href="#hero">Home</a></li>
        <li class="nav-item"><a class="nav-link text-light" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link text-light" href="#achievements">Achievements</a></li>
        <li class="nav-item"><a class="nav-link text-light" href="#projects">Projects</a></li>
        <li class="nav-item"><a class="nav-link text-light" href="#skills">Skills</a></li>
        <li class="nav-item"><a class="nav-link text-light" href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<section id="hero" class="d-flex align-items-center" style="height: 100vh; background: transparent;">
  <div class="container">
    <div class="row align-items-center">
      
    <div class="col-md-6 text-center">
    <img src="https://i.imgur.com/T0GVM2w.png" alt="Profile Picture"style="width: 300px; height: 300px; border-radius: 50%;">
  </div>

      <div class="col-md-6 text-center text-md-start">
        <h3 class="mb-4" style="color: white; font-size: 4rem; font-family: 'Orbitron', monospace; text-shadow: 0 0 10px black;">
          Hi, I'm <span style="color: white;">Mark <hr></span>
        </h3>
        <p class="lead" style="color: white; font-size: 1.5rem; font-family: 'Orbitron', monospace; text-shadow: 0 0 5px black;">
          I'm a Computer Science student and aspiring Front-End Developer — coding, designing, and learning with purpose to create meaningful digital experiences.
        </p>
        <a href="#contact" class="btn mt-4 btn-lg" style="background-color: #FFD700; color: black; border: none; font-family: 'Orbitron', monospace; box-shadow: 0 0 10px #000;">Contact Me</a>
      </div>

    </div>
  </div>
</section>

<section id="about" class="py-5">
  <div class="container">
    <h2 class="text-center mb-4" style="font-family: 'Orbitron'; text-shadow: 1px 1px 2px black; color: #FFD700;">About Me</h2>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div style="background-color: rgba(0, 0, 0, 0.5); padding: 30px; border-radius: 10px; color: white;">
          <blockquote style="font-family: 'Orbitron', sans-serif; font-size: 1.3rem; text-shadow: 1px 1px 2px black; margin-bottom: 1.5rem;">
            My name is Mark Joseph Marcelo Balatbat, a 22-year-old student from Porac, Pampanga, currently pursuing a Bachelor of Science in Computer Science (BSCS). I am passionate about technology and constantly seek opportunities to expand my knowledge and apply my skills in real-world settings.</blockquote>
          <blockquote style="font-family: 'Orbitron', sans-serif; font-size: 1.3rem; text-shadow: 1px 1px 2px black;">
            Outside of academics, I enjoy online gaming—particularly Mobile Legends and Call of Duty Mobile—as a way to enhance strategic thinking and teamwork. I also have a strong appreciation for traditional art, with a focus on portraiture, which allows me to express creativity and attention to detail.</blockquote>
              <blockquote style="font-family: 'Orbitron', sans-serif; font-size: 1.3rem; text-shadow: 1px 1px 2px black;">
                Additionally, I’m an avid coffee enthusiast, often drawing inspiration and focus from a good brew during late-night study sessions and creative projects.</blockquote>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="achievements" class="container mt-5" style="font-family: 'Orbitron', sans-serif;">
  <div style="background-color: rgba(0, 0, 0, 0.5); padding: 30px; border-radius: 10px; color: white;">
    <h2 class="text-center mb-4" style="color: #FFD700;"><strong>My Achievements</strong></h2>
    <p class="lead" style="text-indent: 30px;">
      Throughout my college years, I actively participated in various extracurricular events that helped me grow both personally and socially. Some of my notable achievements include joining and winning in school competitions such as LED Light Dance and Dodgeball, as well as placing in traditional games like Agawan Panyo. Outside of these events, I also cultivated personal interests that bring me joy and balance—such as playing the bass guitar, diving into online gaming, and expressing creativity through traditional art.</p>
  </div>

  <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
    <div class="col">
      <div class="card h-100 bg-transparent border-0">
        <img src="https://i.imgur.com/UYiEDWp.png"
             class="card-img-top"
             alt="LedLightsDanceChampion"
             style="height: 250px; object-fit: cover; border-radius: 0; background: none;">
        <div class="card-body" style="background-color: rgba(0, 0, 0, 0.5); border-radius: 10px;">
          <h5 class="card-title" style="color: white;"><strong>Software Freedom Day</strong></h5>
          <p class="card-text" style="color: white;">LED Light Dance Champion</p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card h-100 bg-transparent border-0">
        <img src="https://i.imgur.com/jM7tNjJ.jpeg"
             class="card-img-top"
             alt="DodgeBallChampion"
             style="height: 250px; object-fit: cover; border-radius: 0; background: none;">
        <div class="card-body" style="background-color: rgba(0, 0, 0, 0.5); border-radius: 10px;">
          <h5 class="card-title" style="color: white;"><strong>Physical Education Days</strong></h5>
          <p class="card-text" style="color: white;">Dodgeball Champion</p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card h-100 bg-transparent border-0">
        <img src="https://i.imgur.com/vNm6h8t.png"
             class="card-img-top"
             alt="3rdPlaceAgawanPanyo"
             style="height: 250px; object-fit: cover; border-radius: 0; background: none;">
        <div class="card-body" style="background-color: rgba(0, 0, 0, 0.5); border-radius: 10px;">
          <h5 class="card-title" style="color: white;"><strong>College Days</strong></h5>
          <p class="card-text" style="color: white;">3rd Place, Agawan Panyo Competition</p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card h-100 bg-transparent border-0">
        <img src="https://i.imgur.com/xp4rF1i.png"
             class="card-img-top"
             alt="InterestBassGuitar"
             style="height: 250px; object-fit: cover; border-radius: 0; background: none;">
        <div class="card-body" style="background-color: rgba(0, 0, 0, 0.5); border-radius: 10px;">
          <h5 class="card-title" style="color: white;"><strong>Interest</strong></h5>
          <p class="card-text" style="color: white;">Playing Bass Guitar</p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card h-100 bg-transparent border-0">
        <img src="https://i.imgur.com/513T3UW.png"
             class="card-img-top"
             alt="InterestGaming"
             style="height: 250px; object-fit: cover; border-radius: 0; background: none;">
        <div class="card-body" style="background-color: rgba(0, 0, 0, 0.5); border-radius: 10px;">
          <h5 class="card-title" style="color: white;"><strong>Interest</strong></h5>
          <p class="card-text" style="color: white;">Online Gaming</p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card h-100 bg-transparent border-0">
        <img src="https://i.imgur.com/VqhVcSG.png"
             class="card-img-top"
             alt="InterestTraditionalArt"
             style="height: 250px; object-fit: cover; border-radius: 0; background: none;">
        <div class="card-body" style="background-color: rgba(0, 0, 0, 0.5); border-radius: 10px;">
          <h5 class="card-title" style="color: white;"><strong>Interest</strong></h5>
          <p class="card-text" style="color: white;">Traditional Art</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="projects" class="py-5" style="font-family: 'Orbitron', sans-serif;">
  <div class="container">
    <h2 class="text-center mb-4" style="color: #FFD700;"><strong>My Projects</strong></h2>
    <div class="row g-4">
      
      <div class="col-md-6">
        <div class="card h-100 bg-transparent border-0">
          <img src="https://i.imgur.com/wun2Deq.png" class="card-img-top" alt="Project 1" style="height: 400px; object-fit: cover;">
          <div class="card-body" style="background-color: rgba(0, 0, 0, 0.5); border-radius: 10px;">
            <h5 class="card-title" style="color: white;">Prototype</h5>
            <p class="card-text" style="color: white;">Food Ordering Application</p>
            <a href="https://www.figma.com/proto/GwWITzaxAv6drDEZ0C3amF/Untitled?node-id=7-6&p=f&t=fHBq2eK7px25IOea-1&scaling=scale-down&content-scaling=fixed&page-id=0%3A1&starting-point-node-id=7%3A6" class="btn btn-warning btn-sm mt-2">Live Demo</a>
          </div>
        </div>
      </div>
      
      <div class="col-md-6">
        <div class="card h-100 bg-transparent border-0">
          <img src="https://i.imgur.com/a6NX2Mo.png" class="card-img-top" alt="Project 2" style="height: 400px; object-fit: cover;">
          <div class="card-body" style="background-color: rgba(0, 0, 0, 0.5); border-radius: 10px;">
            <h5 class="card-title" style="color: white;">Prototype</h5>
            <p class="card-text" style="color: white;">Real Estate Website</p>
            <a href="https://www.figma.com/proto/sKaZKUShkVb6LxT8xi4ZEO/WEB1?node-id=1-2&p=f&t=D6XWKjTZFxqHLzcz-1&scaling=min-zoom&content-scaling=fixed&page-id=0%3A1&starting-point-node-id=1%3A2" class="btn btn-warning btn-sm mt-2">Live Demo</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section id="skills" class="py-5 text-white" style="background-color: transparent; font-family: 'Orbitron', sans-serif;">
  <div class="container">
    <h2 class="text-center mb-4" style="color: #FFD700;"><strong>Skills</strong></h2>
    <p class="text-center lead mb-5">Here are some of the programming languages I’m familiar with and my current skill levels shown as percentage bars. I’ve also listed the IDEs I often use for coding and development.</p>

    <div class="mb-5">
      <h5 class="text-center mb-4" style="color: #FFD700;">Programming Languages</h5>
      <div class="row text-center g-4">
        <div class="col-md-3 col-6">
          <i class="devicon-c-plain skill-icon" style="font-size: 2.5rem;"></i>
          <p>C</p>
          <div class="progress" style="height: 20px;">
            <div class="progress-bar" style="width: 70%; background-color: #ff0040;">60%</div>
          </div>
        </div>
        <div class="col-md-3 col-6">
          <i class="devicon-java-plain skill-icon" style="font-size: 2.5rem;"></i>
          <p>Java</p>
          <div class="progress" style="height: 20px;">
            <div class="progress-bar" style="width: 60%; background-color: #ff0040;">60%</div>
          </div>
        </div>
        <div class="col-md-3 col-6">
          <i class="devicon-python-plain skill-icon" style="font-size: 2.5rem;"></i>
          <p>Python</p>
          <div class="progress" style="height: 20px;">
            <div class="progress-bar" style="width: 80%; background-color: #ff0040;">80%</div>
          </div>
        </div>
        <div class="col-md-3 col-6">
          <i class="devicon-mysql-plain skill-icon" style="font-size: 2.5rem;"></i>
          <p>MySQL</p>
          <div class="progress" style="height: 20px;">
            <div class="progress-bar" style="width: 80%; background-color: #ff0040;">80%</div>
          </div>
        </div>
      </div>
    </div>

    <div class="mb-5">
      <h5 class="text-center mb-4" style="color: #FFD700;">Web Development</h5>
      <div class="row text-center g-4">
        <div class="col-md-3 col-6">
          <i class="devicon-html5-plain skill-icon" style="font-size: 2.5rem;"></i>
          <p>HTML</p>
          <div class="progress" style="height: 20px;">
            <div class="progress-bar" style="width: 50%; background-color: #ff0040;">80%</div>
          </div>
        </div>
        <div class="col-md-3 col-6">
          <i class="devicon-css3-plain skill-icon" style="font-size: 2.5rem;"></i>
          <p>CSS</p>
          <div class="progress" style="height: 20px;">
            <div class="progress-bar" style="width: 50%; background-color: #ff0040;">60%</div>
          </div>
        </div>
        <div class="col-md-3 col-6">
          <i class="devicon-javascript-plain skill-icon" style="font-size: 2.5rem;"></i>
          <p>JavaScript</p>
          <div class="progress" style="height: 20px;">
            <div class="progress-bar" style="width: 30%; background-color: #ff0040;">40%</div>
          </div>
        </div>
        <div class="col-md-3 col-6">
          <i class="devicon-bootstrap-plain skill-icon" style="font-size: 2.5rem;"></i>
          <p>Bootstrap</p>
          <div class="progress" style="height: 20px;">
            <div class="progress-bar" style="width: 50%; background-color: #ff0040;">50%</div>
          </div>
        </div>
      </div>
    </div>

<div>
  <h5 class="text-center mb-4" style="color: #FFD700;">Tools & IDEs</h5>
  <div class="row text-center g-4">
    
    <div class="col-md-3 col-6">
      <i class="devicon-photoshop-plain skill-icon" style="font-size: 2.5rem;"></i>
      <p>Photoshop</p>
      <div class="progress" style="height: 20px;">
        <div class="progress-bar" style="width: 60%; background-color: #ff0040;">60%</div>
      </div>
    </div>

    <div class="col-md-3 col-6">
      <i class="devicon-figma-plain skill-icon" style="font-size: 2.5rem;"></i>
      <p>Figma</p>
      <div class="progress" style="height: 20px;">
        <div class="progress-bar" style="width: 80%; background-color: #ff0040;">80%</div>
      </div>
    </div>

    <div class="col-md-3 col-6">
      <i class="devicon-androidstudio-plain skill-icon" style="font-size: 2.5rem;"></i>
      <p>Android Studio</p>
      <div class="progress" style="height: 20px;">
        <div class="progress-bar" style="width: 60%; background-color: #ff0040;">75%</div>
      </div>
    </div>

    <div class="col-md-3 col-6">
      <i class="devicon-vscode-plain skill-icon" style="font-size: 2.5rem;"></i>
      <p>VS Code</p>
      <div class="progress" style="height: 20px;">
        <div class="progress-bar" style="width: 75%; background-color: #ff0040;">85%</div>
      </div>
    </div>

  </div>
</div>

<section id="contact" class="py-5" style="font-family: 'Orbitron', sans-serif;">
  <div class="container">
    <h2 class="text-center mb-4" style="color: #FFD700;"><strong>Contact Me</strong></h2>
    <form class="mx-auto" style="max-width: 600px; background-color: rgba(0, 0, 0, 0.5); padding: 30px; border-radius: 10px;">
      
      <div class="mb-3">
        <label class="form-label text-light">Name</label>
        <input type="text" class="form-control" placeholder="Your Name" required>
      </div>

      <div class="mb-3">
        <label class="form-label text-light">Email</label>
        <input type="email" class="form-control" placeholder="Your Email" required>
      </div>

      <div class="mb-3">
        <label class="form-label text-light">Subject</label>
        <input type="text" class="form-control" placeholder="Subject" required>
      </div>

      <div class="mb-3">
        <label class="form-label text-light">Message</label>
        <textarea class="form-control" rows="4" placeholder="Your Message" required></textarea>
      </div>

      <button type="submit" class="btn" style="background-color: #FFD700; color: black; font-weight: bold; padding: 15px 30px; border-radius: 50px; width: 100%; text-transform: uppercase; letter-spacing: 2px;">
        Send Message
      </button>

    </form>
  </div>

  <div class="social-links text-center mt-4">
    <a href="https://www.instagram.com/_kensh.dev/" target="_blank" class="me-3" style="color: #ffff;">
      <i class="fab fa-instagram fa-2x"></i>
    </a>
    <a href="https://www.facebook.com/emjeyembi2113" target="_blank" class="me-3" style="color: #ffff;">
      <i class="fab fa-facebook fa-2x"></i>
    </a>
    <a href="mailto:mjbalatbat23-1823@cca.edu.ph" target="_blank" style="color: #ffff;">
      <i class="fas fa-envelope fa-2x"></i>
    </a>
  </div>  
</section>

<footer class="text-center py-3" style="background-color: rgba(0, 0, 0, 0.6); color: white;">
  <div>© 2025 Mark's Portfolio. All rights reserved.</div>
</footer>

</body>
</html>