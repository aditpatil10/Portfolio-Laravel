
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Work Experience</title>
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
  <body class="home">
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

              <header>
      <h1 style="text-align: center; color: #black">Work Experience</h1>
    </header>
    @foreach($Exp as $Ex) 
    <div class="container-exp">
      <div class="row-exp">
        <div class="leftside-e lp" style="color: #f1f1f1">
          <p>{{$Ex['date']}}</p>
          <h2>{{$Ex['firm']}}</h2>
        </div>
        <div class="rightside-e" style="padding-left: 20px; padding-top: 10px; padding-right: 6px">
          <h2>{{$Ex['title']}}</h3>
          <p>{{$Ex['description']}}
            </p>
        </div>
      </div>
    </div>
    @endforeach

 
    <footer>
      <p>Copyrights @adi10</p>
    </footer>
  </body>
</html>
