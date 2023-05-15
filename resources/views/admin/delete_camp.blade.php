<!DOCTYPE html>
<html lang="en">
  <head>
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
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- delete camp table -->
        <div class="container-fluid page-body-wrapper">            
            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Camps for you</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> Camp Type </th>
                            <th> Location</th>
                            <th> Start time </th>
                            <th> End time </th>
                            <th> Date</th>
                            <th>Camp Iamge</th>
                            <th>Delete camp</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($camp as $camps)
                          <tr>
                            <td>
                              <span class="ps-2">{{$camps->name}}</span>
                            </td>
                            <td><a href="{{$camps->location}} ">{{$camps->location}}</a></td>
                            <td> {{$camps->starttime}} </td>
                            <td> {{$camps->endtime}}</td>
                            <td> {{$camps->date}}</td>
                            <td> <a href="/camp_image/{{$camps->image}}"><img src="/camp_image/{{$camps->image}}" ></a></td>
                            <td><a class="btn btn-primary" href="{{url('del_category',$camps->id)}}" onclick="return confirm('Are you sure that you want to delete this camp')" type="button"> Delete </a></td>
                          </tr>
                        @endforeach 
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
        <!-- table ends here -->
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
  </body>
</html>