<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>adi10's Portfolio</title>
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
  <body style= "background-image: url({{asset("/bg1.jpg")}});" class="home">
    <nav>
      <ul>
        <button>🞬</button>
        <li style="padding-right: 12%"><a href="#home">adi10</a></li>
        <li><a href="#">Homepage</a></li>
        <li><a href="about">About me</a></li>
        <li><a href="skills">Skills</a></li>
        <li><a href="portfolio">Portfolio</a></li>
        <li><a href="experience">Experience</a></li>
        <li><a href="education">Education</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="hireme">Hire me</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li>
          <a
            href="#"
            onclick="document.getElementById('id02').style.display='block'"
            >Sign up</a
          >
        </li>
        <li>
          <a
            href="#"
            onclick="document.getElementById('id01').style.display='block'"
            >Login</a
          >
        </li>
      </ul>
    </nav>
    <img
      class="center"
      src="https://avatars.githubusercontent.com/aditpatil10"
      style="border-radius: 50%; margin-top: 4%"
      alt="Avatar"
    />
    <div style="text-align: center; margin: auto">
      <header>
            <h2 style="font-size: 50px; color: white">
                    @foreach($homies as $row)   
                    {{$row['name']}}            
                @endforeach
            </h2>
          </header>
          <p style="font-size: 20px; color: white">
                @foreach($homies as $row)   
                {{$row['bio']}}            
            @endforeach
          </p>
    
      <button class="button">Hire me</button>
      <button class="button">Download CV</button>
        <a href="{{action('HomeScreenController@edit', $row['homeid'])}}">Edit</a>
    </div>
    <div style="text-align: center; padding-top: 4%; margin-bottom: 25% ">
      <a
        href="https://www.facebook.com/adi10.patil"
        class="fa fa-facebook"
        style="height: 50px; width:50px"
      ></a>
      <a
        href="https://twitter.com/aditpatil10"
        class="fa fa-twitter"
        style="height: 50px; width:50px"
      ></a>
      <a
        href="https://www.instagram.com/aditpatil10/"
        class="fa fa-instagram "
        style="height: 50px; width:50px"
      ></a>
      <a
        href="https://www.linkedin.com/in/adit-patil-a21a02a9"
        class="fa fa-linkedin"
        style="height: 50px; width:50px"
      ></a>
    </div>
    <footer>
      <p>Copyrights @adi10</p>
    </footer>
  </body>
</html>
