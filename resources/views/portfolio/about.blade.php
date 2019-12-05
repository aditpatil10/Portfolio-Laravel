
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>About Me</title>
<link rel="stylesheet" href="css/portfolio.css" />
<link
  href="https://fonts.googleapis.com/css?family=Montserrat&display=swap"
  rel="stylesheet"
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
<body>
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
@foreach($about as $ab)   
                                

<div id="wrapper">
  <div class="leftside">
    <article>
      <h1>About</h1>
      <p>
      <div> {{$ab['aboutme']}}</div>
      </p>
    </article>
  </div>
  <div class="rightside">
    <article>
      <h1><b>Basic Information</b></h1>

      <p><b>Age:</b><div> {{$ab['age']}}</div></p>
      <p><b>Email:</b><div> {{$ab['email']}}</div></p>
      <p><b>Phone:</b><div> {{$ab['phone']}}</div></p>
      <p><b>Address:</b><div> {{$ab['address']}}</div></p>
      <p><b>Language:</b><div>{{$ab['languages']}}</div></p>
     
    </article>
  </div>
</div>
@endforeach
<footer>
  <p>Copyrights @adi10</p>
</footer>
</body>
</html>
