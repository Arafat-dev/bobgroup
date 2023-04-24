
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <!-- Uncomment below if you prefer to use an text logo -->
        <!-- <h1><a href="index.html">NewBiz</a></h1> -->
        <a href="index.html"><img src="assets/img/logo.jpg" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ route('accueil') }}">Accueil</a></li>
          <li><a class="nav-link scrollto" href="/#services">Services</a></li>
          <li><a class="nav-link scrollto " href="/#offres">Offres</a></li>
          <li><a class="nav-link scrollto" href="/#catalogue">Catalogue</a></li>
          <li><a class="nav-link scrollto" href="/#about">A propos</a></li>
          <li><a class="nav-link scrollto" href="/#contact">Contact</a></li>

          <li><a class="nav-link scrollto" href="{{ route('login') }}">Connexion</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>

