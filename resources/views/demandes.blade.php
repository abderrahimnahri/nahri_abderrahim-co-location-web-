
@extends('layouts.appbar')

@section('content')


<!-- header-end -->

<!-- slider_area_start -->

<!-- slider_area_end -->

<!-- popular_property  -->
<div class="popular_property">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title mb-40 text-center">
                    <h3>la liste des demandes</h3>
                <a href="{{route('home')}}"><button type="button" class="btn btn-primary">Ajouter une nouvelle demande</button></a>
                </div>
            </div>
        </div>
        
            
        <div class="row">
          
            @foreach ($demandes as $demande)
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title"> 
                          <i class="fa fa-map-marker" aria-hidden="true"></i>
                         {{$demande->adresse}}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span> {{$demande->telephone}}</span>

                      </h6>
                      <p class="card-text">
                        <i class="fa fa-list" aria-hidden="true"></i>  
                        description : {{$demande->description}}</p>
                      <a href="#" class="card-link">
                        <i class="fa fa-usd" aria-hidden="true"></i>  
                        budget max  : {{$demande->budget_max}} MAD</a>
                     <br><br>
                     @if($userId==$demande->user_id)
                      <div class="container">
                        <div class="row">
                        <div class="col-sm">
                        <form action="{{route('demande.delete',$demande['id'])}}" method="POST">
                            @csrf
                           
                        <button class="btn btn-danger">
                            Delete
                        </button>
                        </form>
                        </div>
                        <div class="col-sm">
                            <form action="{{route('demande.edit',$demande['id'])}}" method="POST">
                              @csrf
                             
                          <button class="btn btn-primary ">
                              update
                          </button>
                          </form>
                        </div>
                    </div>
                </div>
                @endif
                          





                    </div>
                   
                </div>
                  </div>
   
              
         
            
              

            @endforeach
          
          
            
           
        </div>
       
     
    </div>
</div>


<!-- testimonial_area  -->

<div class="testimonial_area overlay ">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="testmonial_active owl-carousel">
                    <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                    <div class="quote">
                                        <img src="img/svg_icon/quote.svg" alt="">
                                    </div>
                                    <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br> 
                                            sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.  <br>
                                            Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                                    <div class="testmonial_author">
                                        <div class="thumb">
                                                <img src="img/case/testmonial.png" alt="">
                                        </div>
                                        <h3>Robert Thomson</h3>
                                        <span>Business Owner</span>
                                    </div>
                                </div>
                    </div>
                    <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                    <div class="quote">
                                        <img src="img/svg_icon/quote.svg" alt="">
                                    </div>
                                    <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br> 
                                            sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.  <br>
                                            Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                                    <div class="testmonial_author">
                                        <div class="thumb">
                                                <img src="img/case/testmonial.png" alt="">
                                        </div>
                                        <h3>Robert Thomson</h3>
                                        <span>Business Owner</span>
                                    </div>
                                </div>
                    </div>
                    <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                    <div class="quote">
                                        <img src="img/svg_icon/quote.svg" alt="">
                                    </div>
                                    <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br> 
                                            sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.  <br>
                                            Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                                    <div class="testmonial_author">
                                        <div class="thumb">
                                                <img src="img/case/testmonial.png" alt="">
                                        </div>
                                        <h3>Robert Thomson</h3>
                                        <span>Business Owner</span>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /testimonial_area  -->



<!-- contact_action_area  -->
<div class="contact_action_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
                <div class="action_heading">
                    <h3>Add your property for sale</h3>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="call_add_action">
                    <span>+10 637 367 4567</span>
                    <a href="#" class="boxed-btn3-line">Add Property</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /contact_action_area  -->

<!-- footer start -->
<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <div class="footer_logo">
                            <a href="#">
                                <img src="img/footer_logo.png" alt="">
                            </a>
                        </div>
                        <p>
                                <a href="#">conbusi@support.com</a> <br>
                                +10 873 672 6782 <br>
                                600/D, Green road, NewYork
                        </p>
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-twitter-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                                Services
                        </h3>
                        <ul>
                            <li><a href="#">Marketing & SEO</a></li>
                            <li><a href="#"> Startup</a></li>
                            <li><a href="#">Finance solution</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Travel</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-lg-2">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                                Useful Links
                        </h3>
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#"> Contact</a></li>
                            <li><a href="#">Appointment</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                                <h3 class="footer_title">
                                        Subscribe
                                </h3>
                                <form action="#" class="newsletter_form">
                                    <input type="text" placeholder="Enter your mail">
                                    <button type="submit">Subscribe</button>
                                </form>
                                <p class="newsletter_text">Esteem spirit temper too say adieus who direct esteem esteems luckily.</p>
                            </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--/ footer end  -->

<!-- link that opens popup -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>

<script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script>
<!-- JS here -->
<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<!-- <script src="js/vendor/jquery-1.12.4.min.js"></script> -->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/ajax-form.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/scrollIt.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/nice-select.min.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/plugins.js"></script>
<!-- <script src="js/gijgo.min.js"></script> -->
<script src="js/slick.min.js"></script>



<!--contact js-->
<script src="js/contact.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>


<script src="js/main.js"></script>
<script>
    function collision($div1, $div2) {
        var x1 = $div1.offset().left;
        var w1 = 40;
        var r1 = x1 + w1;
        var x2 = $div2.offset().left;
        var w2 = 40;
        var r2 = x2 + w2;

        if (r1 < x2 || x1 > r2)
            return false;
        return true;
    }
    // Fetch Url value 
    var getQueryString = function (parameter) {
        var href = window.location.href;
        var reg = new RegExp('[?&]' + parameter + '=([^&#]*)', 'i');
        var string = reg.exec(href);
        return string ? string[1] : null;
    };
    // End url 
    // // slider call
    $('#slider').slider({
        range: true,
        min: 20,
        max: 200,
        step: 1,
        values: [getQueryString('minval') ? getQueryString('minval') : 20, getQueryString('maxval') ?
            getQueryString('maxval') :200
        ],

        slide: function (event, ui) {

            $('.ui-slider-handle:eq(0) .price-range-min').html( ui.values[0] + 'K');
            $('.ui-slider-handle:eq(1) .price-range-max').html( ui.values[1] + 'K');
            $('.price-range-both').html('<i>K' + ui.values[0] + ' - </i>K' + ui.values[1]);

            // get values of min and max
            $("#minval").val(ui.values[0]);
            $("#maxval").val(ui.values[1]);

            if (ui.values[0] == ui.values[1]) {
                $('.price-range-both i').css('display', 'none');
            } else {
                $('.price-range-both i').css('display', 'inline');
            }

            if (collision($('.price-range-min'), $('.price-range-max')) == true) {
                $('.price-range-min, .price-range-max').css('opacity', '0');
                $('.price-range-both').css('display', 'block');
            } else {
                $('.price-range-min, .price-range-max').css('opacity', '1');
                $('.price-range-both').css('display', 'none');
            }

        }
    });

    $('.ui-slider-range').append('<span class="price-range-both value"><i>' + $('#slider').slider('values', 0) +
        ' - </i>' + $('#slider').slider('values', 1) + '</span>');

    $('.ui-slider-handle:eq(0)').append('<span class="price-range-min value">' + $('#slider').slider('values', 0) +
        'k</span>');

    $('.ui-slider-handle:eq(1)').append('<span class="price-range-max value">' + $('#slider').slider('values', 1) +
        'k</span>');
</script>

@endsection










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