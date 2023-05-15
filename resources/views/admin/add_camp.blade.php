<!DOCTYPE html>
<html lang="en">
  <head>
  <style type="text/css">
      .container-scroller{
        bg-color:black;
      }
      label{
       color:white;
      }
      .form{
        margin-left:15rem;
      }
     
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MEDIWARE</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin_res/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin_res/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin_res/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin_res/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin_res/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin_res/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin_res/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin_res/assets/images/favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-scroller" style="background-color:#191c25;">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper pt-5">
          
            <div class="form">
              <div class="card-body mt-3">
                @if($errors)
                  @foreach($errors->all() as $errors)
                   <li style="color:white;">
                    {{$errors}}
                   </li>
                  @endforeach
                @endif
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <button type="button" class="btn-close btn-close-black"  data-bs-dismiss="alert" aria-label="Close">&times;</button>
                        <strong>{{ $message }}</strong>  
                    </div>
                @endif 
              </div>
              <h2 style="color:white;">Add Camp</h2>
              <form action="{{url('upload_camp')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 mt-5">
                  <label for="campType" class="form-label">Camp name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder=" Enter the type of the camp" >
                  <div id="nameHelp" class="form-text">This should describe that what type of the camp will occur.</div>
                </div>
                <div class="mb-3">
                  <label for="location" class="form-label">location</label>
                  <input type="text" class="form-control" id="location" name="location" placeholder="Enter the location">
                  <div id="loactionHelp" class="form-text">Enter the exact location of the place.</div>
                </div>
                <div class="row">
                  <div class=" col-4 mb-3">
                    <label for="starttime" class="form-label">Start Time</label>
                    <input type="time" class="form-control" id="starttime" name="starttime" placeholder="Enter the start time">
                    <div id="starttimeHelp" class="form-text">Enter the exact start Time.</div>
                  </div>
                  <div class=" col-4 mb-3">
                    <label for="endtime" class="form-label">End Time</label>
                    <input type="time" class="form-control" id="endtime" name="endtime" placeholder="Enter the end time" style="background:white;">
                    <div id="endtimeHelp" class="form-text">Enter the exact end Time.</div>
                  </div>
                  <div class=" col-4 mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date"  name="date" placeholder="Enter the Date" style="background:white;">
                    <div id="dateHelp" class="form-text">Enter the exact Date.</div>
                  </div>
                </div>
                <div class=" mb-3">
                  <input type="file" class="image form-control" id="image" name="image">
                  <div class="form-text" id=""imageHelp></div>
                </div>
                <input type="submit" value="submit" class="btn btn-success">
              </form>
            </div>
        
         
       </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin_res/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin_res/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin_res/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin_res/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin_res/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin_res/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="admin_res/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin_res/assets/js/off-canvas.js"></script>
    <script src="admin_res/assets/js/hoverable-collapse.js"></script>
    <script src="admin_res/assets/js/misc.js"></script>
    <script src="admin_res/assets/js/settings.js"></script>
    <script src="admin_res/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin_res/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
    <!--date and time picker script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>