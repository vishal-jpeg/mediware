<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MEDIWARE</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/admin_res/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/admin_res/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/admin_res/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="/admin_res/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/admin_res/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="/admin_res/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/admin_res/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/admin_res/assets/images/favicon.png" />
  </head>
  
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
       @include('admin.navbar')
        <!-- partial -->
        <div class="main-panel">
            <div class="row">
                <div class="col-md-12">
                    <h1>Edit Scheme</h1>
                </div>
            </div><br>
    
            <div class="row">
                <div class="col-md-12">
                    @foreach($scheme as $schemes)
                    <form action="{{url('save_scheme',$schemes->id)}}" class="form-sample" method="POST" enctype="text/plain">
                        @csrf
                        <div class="form-group">
                            <label for="name">Scheme name:</label>
                            <input class="form-control text-white" name="name" value="{{ $schemes->scheme_name }}"/>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Category:</label>
                            <select class="form-control text-white" name="category_id">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $schemes->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="small_description">Description:</label>
                            <textarea class="form-control text-white" name="small_description">{{ $schemes->small_description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="detailed_description">Description:</label>
                            <textarea class="form-control text-white" name="detailed_description">{{ $schemes->detailed_description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="eligiblity">Eligiblity:</label>
                            <textarea class="form-control text-white" name="eligiblity">{{ $schemes->eligibility }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="reference">Reference:</label>
                            <textarea class="form-control text-white" name="reference">{{ $schemes->references }}</textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                    @endforeach
                </div>
            </div>
    
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/admin_res/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="/admin_res/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="/admin_res/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="/admin_res/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="/admin_res/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/admin_res/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="/admin_res/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/admin_res/assets/js/off-canvas.js"></script>
    <script src="/admin_res/assets/js/hoverable-collapse.js"></script>
    <script src="/admin_res/assets/js/misc.js"></script>
    <script src="/admin_res/assets/js/settings.js"></script>
    <script src="/admin_res/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="/admin_res/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>