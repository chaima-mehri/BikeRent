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

    <title>Contact</title>

 
    <link rel="stylesheet" type="text/css') }}" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css') }}" href="{{ asset('css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <body>
  
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
    <!-- ***** Features Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>contact <em> info</em></h2>
                        
                        
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="icon">
                        <i class="fa fa-phone"></i>
                    </div>

                    <h5>+216 53 513 006</h5>

                    <br>
                </div>

                <div class="col-md-4">
                    <div class="icon">
                        <i class="fa fa-envelope"></i>
                    </div>

                    <h5>contact@company.com</h5>

                    <br>
                </div>

                <div class="col-md-4">
                    <div class="icon">
                        <i class="fa fa-map-marker"></i>
                    </div>

                    <h5>Sousse,Tunisia</h5>

                    <br>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->
   
    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us" style="margin-top: 0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div id="map">
                      <iframe src="https://maps.google.com/maps?q=sousse&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="contact-form section-bg" style="background-image: url(assets/images/contact-1-720x480.jpg)">
                        <form id="contact" action="sendEmail" method="post">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-12 col-sm-12">
                              <fieldset>
                                <input name="subject" type="text" id="subject" placeholder="Subject">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button">Send Message</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Copyright © 2020 Company Name
                        - Template by: <a href="https://www.phpjabbers.com/">Mehri chaima</a>
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