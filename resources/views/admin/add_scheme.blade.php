<!DOCTYPE html>
<html lang="en">
  <head>
  <style type="text/css">
     
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
  </head>
  <body>
    <div class="container-scroller style="background-color:#191c25;>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper pt-5" style="background-color:#191c25;">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="main-panel">
          
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
            
            <div class="col-md-6 grid-margin stretch-card mx-auto">
             
              <div class="card">
                <h5>Add schemes</h5>
                <div class="card-body">        
                  <form action="{{url('upload_scheme')}}" class="form-sample" method="POST">
                    @csrf
                  
                   <div class="form-group">
                      <label for="scheme_name">Scheme Name</label>
                      <textarea class="form-control text-white" id="scheme_name" name="scheme_name" rows="3" required></textarea>
                    </div>
                  
                    <div class="form-group">
                      <label for="small_description">Small Description</label>
                      <textarea class="form-control text-white" id="small_description" name="small_description" rows="3" required></textarea>
                    </div>
                  
                    <div class="form-group">
                      <label for="detailed_description">Detailed Description</label>
                      <textarea class="form-control text-white" id="detailed_description" name="detailed_description" rows="5" required></textarea>
                    </div>
                  
                    <div class="form-group">
                      <label for="eligibility">Eligibility</label>
                      <textarea class="form-control text-white" id="eligibility" name="eligibility" rows="3" required></textarea>
                    </div>
                  
                    <div class="form-group">
                      <label for="references">References</label>
                      <textarea class="form-control text-white" id="references" name="references" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                      <label for="category_id">Category</label>
                      <select name="category_id" class="form-control text-white">
                        <option value="">Select category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    </div>
                  
                    <button type="submit" class="btn btn-success">Add Scheme</button>
                  </form>
                </div>
              </div>
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
   
  </body>
</html>