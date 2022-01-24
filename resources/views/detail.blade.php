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
    <!-- ***** Header Area End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2><del><sup>Dt</sup>{{$bike['price']+2}} </del> <em><sup>Dt</sup> {{$bike['price']}}</em></h2>
                        <p>Rent at lowest price</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->
    <section class="section">
        <div class="container">
            <br>
            <br>

            <div class="row">
              

             
            </div>
        </div>
    </section>
  <section>
   <div class="row">
   <div class="col-sm-5">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="{{$bike['filePath']}}" alt="First slide" >
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{$bike['filePath']}}" alt="Second slide">
                    </div>
                   
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>

                <br>
              </div>

       
       <div class="col-sm-6">
           <a href="/">Go Back</a>
       <h2>{{$bike['name']}}</h2>
       <h3>Price : {{$bike['price']}}</h3>
       <h4>Details: {{$bike['description']}}</h4>
       <h4>model: {{$bike['model']}}</h4>
       <br><br>
       <form action="/add_to_cart" method="POST">
           @csrf
           <input type="hidden" name="bike_id" value={{$bike['id']}}>
           <input type="hidden" name="price" value={{$bike['price']}}>
                     
                        <label>Quantity</label>

                        <input type="number" name="quantity" id="quantity" placeholder="1" required>
                     
                   
       <button class="btn btn-primary">Add to Cart</button>
       </form>
       <br><br>
      
    </div>
   </div>
   </div>
   </section>
    <!-- ***** Fleet Ends ***** -->
    
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Enquiry</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-us">
            <div class="contact-form">
              <form action="#" id="contact">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter full name" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter email address" required="">
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter phone" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <div class="row">
                             <div class="col-md-6">
                                <fieldset>
                                  <input type="text" class="form-control" placeholder="From date" required="">
                                </fieldset>
                             </div>

                             <div class="col-md-6">
                                <fieldset>
                                  <input type="text" class="form-control" placeholder="To date" required="">
                                </fieldset>
                             </div>
                          </div>
                       </div>
                  </div>
              </form>
           </div>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Send Request</button>
          </div>
        </div>
      </div>
    </div>

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