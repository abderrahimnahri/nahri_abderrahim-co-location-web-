<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Real state</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://d19vzq90twjlae.cloudfront.net/leaflet-0.7/leaflet.css" />
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Real state</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <header>
        <div class="header-area ">
           
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                        <li><a class="active" href="{{route('offres.all')}}">LES OFFRES</a></li>                      
                                            <li><a class="active" href="{{route('demande.all')}}">LES DEMANDES</a></li>            
                                            <li><a class="active" href="{{route('maps.get')}}">MAPS</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                 
                                    <div class="book_btn d-none d-lg-block">
                                        <a href="/deconnexion" class="button">Déconnexion</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
    </header>
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="slider_text text-center justify-content-center">
                                <h3>Find your best Property</h3>
                                <p>Esteem spirit temper too say adieus who direct esteem.</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
</div>
    @yield('content')


</body>

</html>













{{-- @foreach(json_decode($offre->image) as $item)   
                                                             
                                                
<div class="carousel-item @if ($loop->first) active @endif">  
<img src="{{asset('pictures/'.$item)}}" class="d-block w-100" alt="...">
</div>
@endforeach   --}}













{{-- <!DOCTYPE html>
<html>
<head>

    <title>Mes Offres Co-Collocations</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<body>
  
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" > retour</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>adresse:</strong>
                {{ $offre[0]->adresse }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>prix</strong>
                {{ $offre[0]->prix }}
            </div>
        </div>
    </div>
</div>
</body>
</html> --}}