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

    <title>RentBike</title>

    

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
                            <li><a href="about">About</a></li>
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
    <!-- ***** Call to Action End ***** -->




    <section class="section">
        <div class="container">
            <br>
            <br>
            <div class="row">
                <div class="col-md-8">
                    <div class="contact-form">
                        <form action="/renttime" method="POST">
                        @csrf
                           <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                     <label>choose Date:</label>
                                     
                                     <input id="daterent" name='daterent' type="date" min='1899-01-01' max='2023-01-01' required>
                                </div>
                                </div>
                                
                           
                           <div class="row">
                               
                                <div class="col-sm-6 col-xs-12">
                                     <label>Start Hour</label>
                                     <input type="time" id="start_hr" name="start_hr"
                     min="09:00" max="20:00" required>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                     <label>End Hour</label>
                                     <input type="time" id="end_hr" name="end_hr"
                     min="09:00" max="20:00" required>
                                </div>
                           </div>
                           <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                     
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                     
                                </div>
                           </div>
                           <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    
                                </div>
                           </div>
                           <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                     
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                     
                                </div>
                           </div>

                           <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                     
                                </div>

                                
                            </div>  
                            
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="main-button">
                                        <div class="float-left">
                                            <a href="/cartList">Back</a>
                                        </div>

                                        <div class="float-right">
                                            <button  >verify</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <br>
                </div>

              
            </div>
        </div>
    </section>
</body>
 <!-- ***** Footer Start ***** -->
 <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Copyright © 2021
                        : <a href="">Mehri Chaima</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    </body>

    </html>

    <!-- jQuery -->
    <script src="{{asset('js/jquery-2.1.0.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('js/scrollreveal.min.js')}}"></script>
    <script src="{{ asset('js/waypoints.min.js')}}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('js/imgfix.min.js')}}"></script> 
    <script src="{{ asset('js/mixitup.js')}}"></script> 
    <script src="{{ asset('js/accordions.js')}}"></script>
    
    <!-- Global Init -->
    <script src="{{ asset('js/custom.js')}}"></script>

  



<script>
  var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1; //January is 0!
var yyyy = today.getFullYear();

if (dd < 10) {
   dd = '0' + dd;
}

if (mm < 10) {
   mm = '0' + mm;
} 
    
today = yyyy + '-' + mm + '-' + dd;
document.getElementById("daterent").setAttribute("min", today);
</script>





