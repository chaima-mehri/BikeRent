

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
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                       
                        <!-- /# column -->
                        <div class="col-lg-9">
                            <div class="card">
                                <div class="card-title">
                                    <h4>List of Users</h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                <th>avatar</th>
                                                    <th>id user</th>
                                                    <th>Name</th>
                                                    <th>email</th>
                                                    <th>role</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($user as $user1)
                                                <tr>
                                                    
                                                    <td><img src="{{$user1->avatar}}"width="50"></td>
                                                    <td> {{$user1->id}}</td>
                                                    <td>{{$user1->name}}</td>
                                                    <td>{{$user1->email}}</td>
                                                    @if($user1->role_id==1)
                                                    <td class="color-primary">Admin</td>
                                                    @else
                                                    <td class="color-primary">Normal</td>
                                                    @endif
                                                    <td><a href="/changeRole/{{$user1->id}}" class="btn btn-info">Change role</a></td>
                                                    <td><a href="/removeUser/{{$user1->id}}" class="btn btn-danger">Delete</a></td>
                                                    
                                                </tr>
                                               @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                        
                        <!-- /# column -->
                        
                    <!-- /# row -->

                </section>
            </div>
        </div>
    </div>






    
    <!-- jquery vendor -->
  
    <!-- scripit init-->

    <script src="{{ asset('js/lib/jquery.min.js') }}" ></script>
    <script src="{{ asset('js/lib/jquery.nanoscroller.min.js') }}" ></script>
    <script src="{{ asset('js/lib/menubar/sidebar.js') }}" ></script>
    <script src="{{ asset('js/lib/preloader/pace.min.js') }}" ></script>


    <script src="{{ asset('js/lib/bootstrap.min.js') }}" ></script>
    <script src="{{ asset('js/lib/jquery.nanoscroller.min.js') }}" ></script>
    <script src="{{ asset('js/scripts.js') }}" ></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
   




</body>

</html>