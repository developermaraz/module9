  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="{{ asset('assets/imgs/IMG_9157.jpg') }}" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="{{ url('/') }}">Md. Maraz</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="{{ url('https://www.facebook.com/Md.Maraz53334/') }}" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="{{ url('https://www.instagram.com/md.maraz456/') }}" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="{{ url('https://bd.linkedin.com/in/developermaraz') }}" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="/" class="nav-link scrollto {{ '/' == request()->path() ? 'active' : '' }}"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="{{ url('/about') }}" class="nav-link scrollto {{ 'about' == request()->path() ? 'active' : '' }}"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="{{ url('/resume') }}" class="nav-link scrollto {{ 'resume' == request()->path() ? 'active' : '' }}"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="{{ url('/portfolio') }}" class="nav-link scrollto {{ 'portfolio' == request()->path() ? 'active' : '' }}"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
          <li><a href="{{ url('/services') }}" class="nav-link scrollto {{ 'services' == request()->path() ? 'active' : '' }}"><i class="bx bx-server"></i> <span>Services</span></a></li>
          <li><a href="{{ url('/contact') }}" class="nav-link scrollto {{ 'contact' == request()->path() ? 'active' : '' }}"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->