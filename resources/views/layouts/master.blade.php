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
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" id="app-nav">
            <div class="container">
                <h2>PHARMACYLINE</h2>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                      <div><img src="/util.png" alt="" style="height: 30px; width: 30px;margin-right: 10px;"></div>
                      <h5><i>{{ Auth::user()->nom }} {{ Auth::user()->prenom }}</i></h5>
                    </ul>
                </div>
            </div>
        </nav>
        
        <nav class="navbar navbar-expand-lg bg-success">
          <div class="container">
            <a class="navbar-brand" href="{{ route('admin.home') }}" id="nav-a1">{{ __('Accueil') }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('drugs') }}" id="nav-a2">{{ __('Médicaments') }}
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('sign_path') }}" id="nav-a3">{{ __('Ajout de médicament') }}</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('logout') }}" id="nav-a4" onsubmit="return confirm('Êtes-vous sùr de vouloir vous déconnecter ?');" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Déconnecter</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                </li>
                  </div>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0" action="{{ route('search_path') }}">
                <input class="form-control mr-sm-2" type="text" placeholder="Rechercher un produit" name="filtre" value="{{ request()->filtre ?? '' }}" />
                <button type="submit" class="btn btn-light"><img src="/search.png" style="width: 18px;"></button>
              </form>
            </div>
          </div>
        </nav>

        <section style="background: url(/OIP.jpg) center;">
          @yield('content')
        </section>
        <footer>
          <br/>
          <p>Copyright  &copy;  <b>PharmacyLine</b>  Avril 2021</p>
        </footer>  
        <script src="/bootstrap-5.0.0-beta3-dist/js/bootstrap.min.js"></script>     
    </body>
</html>
