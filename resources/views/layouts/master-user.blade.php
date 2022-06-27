<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="/logo_pharmacy.jpg" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="/style.css">
        <link rel="stylesheet" type="text/css" href="/bootstrap.min.css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script type="text/javascript" src="/jquery.js"></script>
        <script type="text/javascript"></script>
        <title>PharmacyLine</title>

    </head>
    <body>
      <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <h2 id="h2-accueil">PHARMACYLINE</h2>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                      <form class="form-inline my-2 my-lg-0" action="{{ route('search_path') }}" id="rechercher">
                        <input class="form-control mr-sm-2" type="text" placeholder="Rechercher un produit" name="filtre" value="{{ request()->filtre ?? '' }}" /><button type="submit" class="btn btn-light"><img src="/search.png" style="width: 18px;"></button>
                      </form>
                    </ul>
                </div>
            </div>
        </nav>
      
        <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm">
          <div class="container">
              <a class="navbar-brand" href="{{ route('user.home') }}" id="nav-a1">{{ __('Accueil') }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('drugs_path') }}" id="nav-a2">{{ __('Médicaments') }}
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('contact') }}" id="nav-a2">{{ __('Contactez-nous') }}
                  </a>
                </li>
                <!--<li class="nav-item">
                  <a class="nav-link" href="{{ route('logout') }}" id="nav-a4" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Déconnecter</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                </li>
                  </div>
                </li>-->
              </ul>
            </div>
          </div>
        </nav>
        <section style="/*background: url(/OIP.jpg) center;*/background-color: #F4F4F4;">
          @yield('content')

          <div id="scrollUp">
            <a href="#top"><img src="/to_top.png"></a>
          </div>
        </section>
        <footer>
          <br/>
          <p>Copyright  &copy;  <b>PharmacyLine</b>  Avril 2021</p>
        </footer>
        <script src="/bootstrap-5.0.0-beta3-dist/js/bootstrap.min.js"></script>
        <script>
          jQuery(function(){
            $(function () {
                $(window).scroll(function () { //Fonction appelée quand on descend la page
                    if ($(this).scrollTop() > 100 ) {  // Quand on est à 200pixels du haut de page,
                        $('#scrollUp').css('right','30px'); // Replace à 10pixels de la droite l'image
                    } else { 
                        $('#scrollUp').removeAttr( 'style' ); // Enlève les attributs CSS affectés par javascript
                    }
                });
            });
          });
        </script>    
    </body>
</html>
