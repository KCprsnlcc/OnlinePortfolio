<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="design.css">
</head>
<body>
    <header>
        <div class="background-image"></div>
        <div class="header-content">
            <img src="images/frask-removebg.png" alt="Profile Image" class="profile-image">
            <div class="font-animation">
                <h1 class="font-animation">Al-Fraskhan A. Jose</h1>
            </div>
    </header>
    <nav>
        <ul class="font-animation">
            <li><a href="#about">About</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li> 
        </ul>
    </nav>
    <section id="about" class="about-section">
        <img src="images/frask-high-resolution-logo-transparent.png" alt="logo" class="logo">
        <h2 class="font-animation">About Me</h2>
        <p>I am currently enrolled at Pilar Collage in Zamboanga City, pursuing a Bachelor of Science in Information technology. I am a dedicated third-year student who is wholeheartedly committed to excelling in this field.</p>
        <div>
            <h2 class="font-animation">Experiences</h2>
            <h3 class="font-animation">UX/UI designs using:</h3>
            <ul>
                <li>Java</li>
                <li>Visual Studeo</li>
                <li>HTMl/CSS/JavaScript</li>
            </ul>
        </div>
    </section>
    <section id="projects" class="about-section">
        <h2 class="font-animation">Projects</h2>
        <div class="project">
            <img src="images/dashboard-design.png" alt="Project 1">
            <div class="project-info">
                <h3 class="font-animation">UX/UI design using Visual Studeo</h3>
                <p>This project aims to provide offline programming language resources, allowing users to access programming language tutorials without an internet connection</p>
            </div>
        </div>
        <div class="project">
            <img src="images/SOULMATE-DESIGN.png" alt="Project 2">
            <div class="project-info">
                <h3 class="font-animation">UX/UI design using Java</h3>
                <p>This project aims to help people connect with potential partners and build meaningful relationships for those who are looking for companionship.</p>
            </div>
        </div>
    </section>
    <section id="contact" class="about-section">
        <p>
            Still confused. then,
        </p>
        <h1 class="font-animation">Let's Talk</h1>
        <p>Or send an Email to <a href="mailto:alfraskhanjose91@gmail.com">alfraskhanjose91@gmail.com</a></p>
        

    </section>
</body>
</html>
<script>
    // Get all navigation links
    const navLinks = document.querySelectorAll('nav a');
  
    // Add click event listeners to the navigation links
    navLinks.forEach((link) => {
      link.addEventListener('click', (e) => {
        e.preventDefault(); // Prevent the default link behavior
  
        const targetId = link.getAttribute('href').substring(1); // Get the target section ID
  
        // Find the target section by its ID
        const targetSection = document.getElementById(targetId);
  
        if (targetSection) {
          // Scroll smoothly to the target section
          targetSection.scrollIntoView({
            behavior: 'smooth',
            block: 'start',
          });
        }
      });
    });
  </script>
  <script>
    const fontElements = document.querySelectorAll('.font-animation');
  
    fontElements.forEach((element) => {
      element.addEventListener('mouseover', () => {
        element.classList.add('hovered');
      });
  
      element.addEventListener('mouseout', () => {
        element.classList.remove('hovered');
      });
    });
  </script>