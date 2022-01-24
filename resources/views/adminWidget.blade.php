
<?php 

use App\Http\Controllers\BikeController;
$wordCount =0;
$bikecount=0;
$rentcount=0;
$profit=0;
$wordCount =  BikeController::usercounts();
$bikecount=BikeController::bikecounts();
$rentcountPending=BikeController::rentcounts_pending();
$rentcountOnrent=BikeController::rentcounts_onrent();
$rentcountAcc=BikeController::rentcounts_accomplished();
$profit=BikeController::TotalProfit();





?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Table</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    
    

    <!-- Common -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/menubar/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">






    
  
   

    </head>

<body>
  <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
      <div class="nano-content">
        <div class="logo">
          <a href="index.html">
            <!-- <img src="assets/images/logo.png" alt="" /> -->
            <span>Admin Panel</span>
          </a>
        </div>
        <ul>
        

          <li class="label">Apps</li>
          <li>
            
           
          </li>
         
          <li>
           
          </li>
          <li>
            <a href="/admin">
            <i class="fa fa-user" aria-hidden="true"></i> Profile</a>
          </li>
          <li>
            <a href="/adminWidget">
            <i class="fa fa-th-large" aria-hidden="true"></i>Widget</a>
          </li>
         
          <li>
           
          <li>
       

          </li>
          <li>
            <a class="sidebar-sub-toggle">
            <i class="fa fa-database" aria-hidden="true"></i> Table
              <span class="sidebar-collapse-icon fa fa-arrow-down"></span>
            </a>
            <ul>
              <li>
                <a href="/adminBikes"><i class="fa fa-bicycle" aria-hidden="true"></i> Bikes</a>
              </li>

              <li>
                <a href="/adminUsers"><i class="fa fa-users" aria-hidden="true"></i> Users</a>
              </li>
              <li>
                <a href="/adminRents"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Rents</a>
              </li>
             
            </ul>
          </li>
         
        
          
          <li>
            <a href="/logout">
            <i class="fa fa-times" aria-hidden="true"></i> Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- /# sidebar -->


  <div class="header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="float-left">
            <div class="hamburger sidebar-toggle">
              <span class="line"></span>
              <span class="line"></span>
              <span class="line"></span>
            </div>
          </div>
          <div class="float-right">
            <div class="dropdown dib">
              <div class="header-icon" data-toggle="dropdown">
            
                
                 
                  <div class="dropdown-content-body">
                 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="content-wrap">
    <div class="main">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
              <div class="page-title">
                <h1>Hello,
                  <span>Welcome Here</span>
                </h1>
              </div>
            </div>
          </div>
          <!-- /# column -->
          <div class="col-lg-4 p-l-0 title-margin-left">
            <div class="page-header">
              <div class="page-title">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="/">visit the website</a>
                  </li>
                
                </ol>
              </div>
            </div>
          </div>
          <!-- /# column -->
        </div>

                    <!-- /# column -->
                </div>
                    <!-- /# column -->
                </div>

  <div class="content-wrap">
    <div class="main">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
              <div class="page-title">
                <h1>Hello,
                  <span>Welcome Here</span>
                </h1>
              </div>
            </div>
          </div>
          <!-- /# column -->
          <div class="col-lg-4 p-l-0 title-margin-left">
            <div class="page-header">
              <div class="page-title">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="#">visit the website</a>
                  </li>
                
                </ol>
              </div>
            </div>
          </div>
          <!-- /# column -->
        </div>
        <!-- /# row -->
        <div id="main-content">
          <div class="row">
            <div class="col-lg-3">
              <div class="card">
                <div class="stat-widget-one">
                  <div class="stat-icon dib">
                  <i class="fas fa-money-check-alt"></i>
                  </div>
                  <div class="stat-content dib">
                    <div class="stat-text">Total Profit</div>
                    <div class="stat-digit">
                    <i class="fa fa-usd"></i>{{$profit}}</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card">
                <div class="stat-widget-one">
                  <div class="stat-icon dib">
                  <i class="fas fa-users"></i>
                  </div>
                  <div class="stat-content dib">
                    <div class="stat-text">Total Customer</div>
                    <div class="stat-digit">{{$wordCount}}</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card">
                <div class="stat-widget-one">
                  <div class="stat-icon dib">
                  <i class="fas fa-bicycle"></i>
                  </div>
                  <div class="stat-content dib">
                    <div class="stat-text">total bikes</div>
                    <div class="stat-digit">{{$bikecount}}</div>
                  </div>
                </div>
              </div>
            </div>



</div>



            <div class="row">
            <div class="col-lg-3">
              <div class="card">
                <div class="stat-widget-one">
                  <div class="stat-icon dib">
                  <i class="far fa-bell"></i>
                  </div>
                  <div class="stat-content dib">
                    <div class="stat-text">rents on pending</div>
                    <div class="stat-digit">
                   {{$rentcountPending}}</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card">
                <div class="stat-widget-one">
                  <div class="stat-icon dib">
                  <i class="fas fa-check-circle"></i>
                  </div>
                  <div class="stat-content dib">
                    <div class="stat-text">rents Accomplished</div>
                    <div class="stat-digit">{{$rentcountAcc}}</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card">
                <div class="stat-widget-one">
                  <div class="stat-icon dib">
                  <i class="fas fa-biking"></i>
                  </div>
                  <div class="stat-content dib">
                    <div class="stat-text">On Rent</div>
                    <div class="stat-digit">{{$rentcountOnrent}}</div>
                  </div>
                </div>
              </div>
            </div>







      

          <!-- /# row -->
        
          <!-- /# row -->
    

          
        </div>
      </div>
    </div>
  </div>




    <!-- Common -->
    
    <script src="{{ asset('js/scripts.js') }}" ></script>
    <script src="{{ asset('js/lib/jquery.min.js') }}" ></script>
    <script src="{{ asset('js/lib/jquery.nanoscroller.min.js') }}" ></script>
    <script src="{{ asset('js/lib/menubar/sidebar.js') }}" ></script>
    <script src="{{ asset('js/lib/preloader/pace.min.js') }}" ></script>
    <script src="{{ asset('js/lib/bootstrap.min.js') }}" ></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>

</html>