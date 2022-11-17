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
            @foreach ($about->Contacts as $contact)
            
                <div class="kontakt-columns">
                    <a href="{{ $contact->contact_link }}">
                    <div class="kontakt-columns-content">
                        <i class="{{ $contact->picture }}"></i>
                        <h2>{{ $contact->contact_name }}</h2>
                    </div>
                    </a>
                </div>
                
            @endforeach
            </div>
    
        </section>
    
        <div id="kontakt-text">
            <h2><a href="mailto:{{ $about->email }}">{{ $about->email }}</a></h2>
            <h3>Phone number {{ $about->phoneNumber }}</h3>
        </div>

        {{-- <section id="kontakt-section">
            
            <div class="kontakt">
            @foreach ($about->Certificates as $certificate)
            
                <div class="kontakt-columns">
                    <a href="{{ $certificate->certificate_link }}">
                    <div class="kontakt-columns-content">
                        <i class="{{ $certificate->picture }}"></i>
                        <h2>{{ $certificate->certificate_name }}</h2>
                    </div>
                    </a>
                </div>
                
            @endforeach
            </div>
    
        </section> --}}
    
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
