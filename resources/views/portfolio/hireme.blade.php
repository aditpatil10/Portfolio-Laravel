
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Education</title>
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
    <style>
        .cards {
    display: flex;
    flex-wrap: wrap;
    align-items: stretch;
}
.card {
    flex: 0 0 200px;
    margin: 10px;
    border: 1px solid #ccc;
    box-shadow: 2px 2px 6px 0px rgba(0, 0, 0, 0.3);
    background-color: white;
}
.card img {
    max-width: 100%;
}
.card .text {
    padding: 0 20px 20px;
}
.card .text > button {
    background: gray;
    border: 0;
    color: white;
    padding: 10px;
    width: 100%;
}
.container-h {
    display: flex;
    justify-content: center;
    flex-direction: row;
}

.ul-h {
    list-style-type: none; /* Remove bullets */
    padding: 0; /* Remove padding */
    margin: 0; /* Remove margins */
}

.li-h {
    border: 1px solid #ddd; /* Add a thin border to each list item */
    margin-top: -1px; /* Prevent double borders */
    padding: 7px; /* Add some padding */
    background-color: white;
}

        </style>
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
                    <header>
                            <h1 style="text-align: center; color: #f1f1f1">Hire me</h1>
                          </header>
    @foreach($Hire as $Hi) 
    
          <div class="container-h">
          <main class="cards" style="justify-content: center">
                  <article class="card">
                      <div style="height: 35%; background-color: green">
                          <i class="fa fa-shopping-cart" style="font-size:100px; color:white ; margin: 15px"></i>
                      </div>
                    <div class="text" style="text-align: center">
                      <h1>{{$Hi['cost']}}</h1>
                      <p>{{$Hi['description']}}</p>
                      <ul class="ul-h">
                              <li class="li-h">{{$Hi['service']}}</li>
                              <li class="li-h" ><a href="contact.html" style="color: green ;text-decoration: none"> Contact us</a></li>
                            </ul>
                    </div>
                  </article>

                  
                  </div>
    @endforeach

 
    <footer>
      <p>Copyrights @adi10</p>
    </footer>
  </body>
</html>
