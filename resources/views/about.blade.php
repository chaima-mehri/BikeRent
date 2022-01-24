<?php 
use App\Http\Controllers\BikeController;
$total=0;
$rent_total=0;
if(Session::has('user'))
{ $bikeclass=new BikeController();
  $total= $bikeclass->cartItem();
  $rent_total=$bikeclass->rentcount();

}
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>About</title>

    <link rel="stylesheet" type="text/css') }}" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css') }}" href="{{ asset('css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
    </head>
    
    <body>
    
    
   
    
    <!-- ***** Header Area Start
 -->

 <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">Bike <em> Rent</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="" class="active">Home</a></li>
                            <li><a href="/">bikes</a></li>
                            <li><a href="/about">About</a></li>
                            <li><a href="contact">Contact</a></li> 
                            @if(Session::has('user'))
                            <li><a href="/cartList">cart({{$total}})</a></li>
                            <li><a href="/rentHistory">Rent History({{$rent_total}})</a></li>
                           
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{Session::get('user')['name']}}</a>
                              
                                <div class="dropdown-menu">
                                @if(Session::get('user')['role_id']==1)   
                                    <a class="dropdown-item" href="/admin">Admin Panel</a>
                                    @endif
                                    <a class="dropdown-item" href="/logout">Logout</a>
                                    
                                </div>
                            </li>
                            @else 
                            <li><a href="/login">Login</a></li>
                                        
                            @endif
                            
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- ***** Header Area End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Our <em>Bikes</em></h2>
                        <p>we offer best bikes</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Classes Start ***** -->
    <section class="section" id="our-classes">
        <div class="container">
            <br>
            <br>
            <br>
            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-1'><i class="fa fa-fast-forward" aria-hidden="true"></i> Our Goals</a></li>
                  <li><a href='#tabs-2'><i class="fa fa-briefcase"></i> Our Work</a></a></li>
                  <li><a href='#tabs-3'><i class="fa fa-heart"></i> Our Passion</a></a></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <section class='tabs-content'>
                  <article id='tabs-1'>
                    <img src="{{ asset('images/about-image-1-940x460.jpg')}}"  alt="">
                    <h4>Our Goals</h4>

                    <p>our goal is to provide best services</p>

                    <p>to make our clients satisfied </p>

                    
                  </article>
                  <article id='tabs-2'>
                    <img src="{{ asset('images/contact-1-720x480.jpg')}}" alt="">
                    <h4>Our Work</h4>
                    <p>we provide you with best quality bikes for all your needs</p>
             
                  </article>
                  <article id='tabs-3'>
                    <img src="{{ asset('images/familycyclingdelemere.jpg')}}" alt="">
                    <h4>Our Passion</h4>
                  <p>when we are harmoniously passionate, we engage in cycling willingly, with a sense of volition. We do it because we choose to. This kind of passion is linked to positive emotions, and increased life satisfaction.</p>
                      <p>It is this passion that is linked with flow – a powerful pathway to happiness</p>
                  </article>
                </section>
              </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Classes End ***** -->

    <!-- ***** Call to Action Start ***** -->
    
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Copyright © 2020 Company Name
                        - Template by: <a href="https://www.phpjabbers.com/">Mehri Chaima</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{ asset('js/jquery-2.1.0.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('js/popper.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>

    <!-- Plugins -->
    <script src="{{ asset('js/scrollreveal.min.js')}}"></script>
    <script src="{{ asset('js/waypoints.min.js')}}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('js/imgfix.min.js')}}"></script> 
    <script src="{{ asset('js/mixitup.js')}}"></script> 
    <script src="{{ asset('js/accordions.js')}}"></script>
    
    <!-- Global Init -->
    <script src="{{ asset('js/custom.js')}}"></script>
    <script src="{{ asset('js/accordions.js')}}"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  </body>
</html>