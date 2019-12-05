<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/portfolio.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="js/portfolio.js" type="text/javascript"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="js/portfolio.js" type="text/javascript"></script>
<link
      href="https://fonts.googleapis.com/css?family=Montserrat&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="js/portfolio.js" type="text/javascript"></script>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/port.css') }}" rel="stylesheet">
  </head>
  <body style="background-color: #f1f1f1;">
    <nav>
      <ul>
        <button>🞬</button>
        <li class="nav-item"><a class="nav-link" href="#">Homepage</a></li>
                        <li class="nav-item"><a class="nav-link" href="about">About me</a></li>
                        <li class="nav-item"><a class="nav-link" href="skills">Skills</a></li>
                        <li class="nav-item"><a class="nav-link" href="portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="experience">Experience</a></li>
                        <li class="nav-item"><a class="nav-link" href="education">Education</a></li>
                        <li class="nav-item"><a class="nav-link" href="blog">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="hireme">Hire me</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
      </ul>
    </nav>
    <header><h1 style="text-align: center">Portfolio</h1></header>
    <div id="btncontainer">
      <button class="bt active" style="font-size:24px">
        <i class="fa fa-laptop"></i>
      </button>
      <button class="bt" style="font-size:24px">
        <i class="fa fa-image"></i>
      </button>
      <button class="bt" style="font-size:24px">
        <i class="fa fa-camera"></i>
      </button>
    </div>

    <!-- Portfolio Gallery Grid -->
    <div class="grid">
      <div class="polaroid nature">
        <img src="imgs/proj3.png" alt="Mountains" style="width:100%" />
        <div class="capti">
          <p>JS Pig game</p>
          <a href="https://github.com/aditpatil10/Pig-Game">See Project</a>
        </div>
      </div>
      <div class="polaroid nature">
        <img src="imgs/proj1.png" alt="Lights" style="width:100%" />
        <div class="capti">
          <p>Fabrication website for client.</p>
          <a href="https://github.com/aditpatil10/Fabrication-website"
            >See Project</a
          >
        </div>
      </div>
      <div class="polaroid nature">
        <img src="imgs/proj2.png" alt="Nature" style="width:100%" />
        <div class="capti">
          <p>Github profile viewer</p>
          <a href="https://github.com/aditpatil10/Gitviewer">See Project</a>
        </div>
      </div>

      <div class="polaroid nature">
        <img src="imgs/proj4.png" alt="Nature" style="width:100%" />
        <div class="capti">
          <p>MSC fasteners website.</p>
          <a href="https://github.com/aditpatil10/MCSfasten-website"
            >See Project</a
          >
        </div>
      </div>
    </div>

    </div>
    <footer>
      <p>Copyrights @adi10</p>
    </footer>
  </body>
</html>
