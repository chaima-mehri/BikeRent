

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
          <a href="#">
            <!-- <img src="assets/images/logo.png" alt="" /> -->
            <span >Admin Panel</span>
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

              
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="card">
                                <div class="card-title">
                               
                                    <h4>Table Basic </h4>
                                   
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>picture</th>
                                                    <th>bike id</th>
                                                    <th>Name</th>
                                                    <th>model</th>
                                                    <th>description</th>
                                                    <th>Price</th>
                                                    <th>total</th>
                                                    
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($bike as $bikie)
                                                <tr>
                                                <td><img src="{{$bikie->filePath}}"width="100"></td>
                                                    <td>{{$bikie->id}}</td>
                                                    <td>{{$bikie->name}}</td>
                                                    <td>{{$bikie->model}}</td>
                                                    <td >{{$bikie->description}}</td>
                                                    <td>{{$bikie->price}}dt</td>
                                                    <td>{{$bikie->total}}</td>
                                                    <td><a href="/removeBike/{{$bikie->id}}" class="btn btn-danger">Delete</a></td>
                                                   
                                                   

                                                </tr>
                                                @endforeach  
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                     
                        <!-- /# column -->
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Add a new bike  </h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                    <form action="addBike" method='post'>
                                    @csrf
                                        <label for="id"> id:</label><br>
                                        <input type="text" id="id" name="id" ><br>

                                        <label for="name"> name:</label><br>
                                        <input type="text" id="name" name="name" ><br>

                                        <label for="model"> model:</label><br>
                                        <input type="text" id="model" name="model" "><br><br>

                                        <label for="description"> description:</label><br>
                                        <textarea  id="description" name="description"></textarea> <br><br>

                                        <label for="price">price:</label><br>
                                        <input type="number" id="price" name="price" "><br><br>

                                        <label for="total">total:</label><br>
                                        <input type="number" id="total" name="total" "><br><br>

                                        <label for="filePath">picture:</label><br>
                                        <input type="url" id="filePath" name="filePath" "><br><br>



                                        <input type="submit" value="Add">
                                        </form> 
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