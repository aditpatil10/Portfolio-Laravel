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
        <li><a href="aboutme.html">About me</a></li>
        <li><a href="skills.html">Skills</a></li>
        <li><a href="portfolio.html">Portfolio</a></li>
        <li><a href="exp.html">Experience</a></li>
        <li><a href="edu.html">Education</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="Hireme.html">Hire me</a></li>
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
    <div>
        @if(counts($errors)>0)
            <div class="alert alert-danger">
                <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
        @endif
                </ul>
        <h3>Edit Records</h3>
        <form method="post" action="{{action('StudentController@update', $id)}}">
                {{csrf_field()}}
        <input type="hidden" name="_method" value="PATCH" />
        <div class="form-group">
            <input type="text" name="name" class="form-control" value="$student->name" placeholder="Enter Name" />
    </div>
    <div class="form-group">
            <input type="text" name="bio" class="form-control" value="$student->bio" placeholder="Enter bio" />
    </div>
    <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Edit" />
    </div>
    <footer>
      <p>Copyrights @adi10</p>
    </footer>
  </body>
</html>