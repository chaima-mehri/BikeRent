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
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <br>
            <br>

            <div class="row">
            @foreach ($bike as $item)
                <div class="col-lg-4">
                
                 <div class="item {{$item['id']==1?'active':''}}">
                    <a href="detail/{{$item['id']}}">  
                 
                    <div class="trainer-item">
                    
                        <div class="image-thumb">
                        
                            <img class="slider-img" src="{{$item['filePath']}}" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                <sup>Dt</sup>{{$item['price']}}
                            </span>

                            <h4>{{$item['name']}}</h4>

                            <p>{{$item['description']}}</p>
                    </div> 
                        

                            <ul class="social-icons">
                                <li><a href="detail/{{$item['id']}}">Order</a></li>
                            </ul>

                        </div>
                    </div>
                   
                </div>
                @endforeach     
               

                
                
                
            </div>

            <br>
                
            <nav>
              <ul class="pagination pagination-lg justify-content-center">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>

        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->

    
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

  
</html>