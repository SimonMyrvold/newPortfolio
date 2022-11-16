<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
        <link rel="stylesheet" href="images/">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital@1&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital@1&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css">

    </head>

    {{-- <a href="{{ route('project.index') }}">project</a> --}}

    

    <body onload="showevent()">

        <img class="background-img" src="img/backgroundImage.jpg" alt="">
    
        <section id="header">
                
            <nav>
                <div class="reveal-nav">
                    <ul class="topnav" id="dropdownClick">
                        <li class="dropdownIcon"><a href="javascript:void(0);" onclick="dropdownMenu()">&#9776;</a></li>
                        <li class="topnav-right"><a href="#header">Home</a></li>
                        <li class="topnav-right"><a href="#about-me-achor">About me</a></li>
                        <li class="topnav-right"><a href="#projekt-section">Portfolio</a></li>
                        
                    </ul>
                </div>
            </nav>
    
        </section>
    
        @foreach ($abouts as $about)

        <div class="nametag">
            <h1>{{ $about->name }}</h1>
            <p>{{ $about->tinytext }}</p>
        </div>
    
        <a href="" id="about-me-achor">a</a>
    
    <div class="om-mig">
    
        <section id="om-mig">
    
            
    
            <h1 class="om-mig-title">About Me</h1>
            <div id="container-om-mig" width="100%">
                <img class="profilbild" src="img/profil.png" alt="">
                <p>
                    {{ ($about->description) }}
                </p>
            </div>
    
        </section>
        
        <section id="kontakt-section">
    
            <div class="kontakt">
                <div class="kontakt-columns">
                    <a href="https://twitter.com/Simon_Myrvold">
                    <div class="kontakt-columns-content">
                        <i class="fab fa-twitter fa-7x"></i>
                        <h2>Twitter</h2>
                    </div>
                    </a>
                </div>
                <div class="kontakt-columns">
                    <a href="https://www.instagram.com/simon_myrvold/">
                    <div class="kontakt-columns-content">
                        <i class="fab fa-instagram fa-7x"></i>
                        <h2>Instagram</h2>
                    </div>
                    </a>
                </div>
                <div class="kontakt-columns">
                    <a href="https://www.linkedin.com/in/simon-myrvold-9766a0218/">
                    <div class="kontakt-columns-content">
                        <i class="fab fa-linkedin fa-7x"></i>
                        <h2>Linkedin</h2>
                    </div>
                    </a>
                </div>
                <div class="kontakt-columns">
                    <a href="https://github.com/">
                    <div class="kontakt-columns-content">
                        <i class="fab fa-github fa-7x"></i>
                        <h2>Github</h2>
                    </div>
                    </a>
                </div>
            </div>
    
        </section>
    
        <div id="kontakt-text">
            <h2><a href="mailto:simon.johan.myrvold@gmail.com">{{ $about->email }}</a></h2>
            <h3>Phone number {{ $about->phoneNumber }}</h3>
        </div>
    
    </div>

    @endforeach
    
        <section id="projekt-section">
    
            <h1 class="projekt-title">Portfolio </h1>
            
            <div class="projekt">
                @foreach ($projects as $project)
                <div class="projekt-columns">
                    <div class="projekt-columns-content">
                        <a href="{{ route('project.show', $project->id) }}" target="_blank">
                        <img src="{{ $picture_link = Str::replace('C:\xampp\\htdocs\portfolio-upgrade\public', '', $project->picture) }}" alt="" width="100%" height="250px">
                        <p>{{ $project->project_name }}</p>
                        </a>
                        @if (Auth::id() === 1)
                            <form action="{{ route('project.destroy', $project->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">
                                    Delete
                                </button>
                            </form>
                            <a href="{{ route('project.edit', $project->id) }}">Edit</a>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
    
        </section>
    
        <section id="kunskaper-section">
    
                <div class="kunskaper">
                    <div class="kunskaper-columns">
                        <div class="kunskaper-columns-content">
                            <i class="fab fa-html5 fa-7x"></i>
                            <h2>HTML</h2>
                        </div>
                    </div>
                    <div class="kunskaper-columns">
                        <div class="kunskaper-columns-content">
                            <i class="fab fa-css3-alt fa-7x"></i>
                            <h2>CSS</h2>
                        </div>
                    </div>
                    <div class="kunskaper-columns">
                        <div class="kunskaper-columns-content">
                            <i class="fab fa-php fa-7x"></i>
                            <h2>PHP</h2>
                        </div>
                    </div>
                    <div class="kunskaper-columns">
                        <div class="kunskaper-columns-content">
                            <i class="fab fa-bootstrap fa-7x"></i>
                            <h2>Bootstrap</h2>
                        </div>
                    </div>
                </div>
    
        </section>
    
        <section id="footer">
    
            <div class="footer">
    
    
                <i class="fab fa-twitter"></i>
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-instagram"></i>
                <i class="far fa-envelope"></i>
              
              <p class="footer-text"> SimonMyrvold </p>
            </div>
        
        </section>
    
    <script src="js/Main.js"></script>
    </body>
</html>
