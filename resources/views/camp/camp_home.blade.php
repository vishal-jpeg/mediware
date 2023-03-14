<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Home</title>

  <link rel="stylesheet" href="user_res/assets/css/maicons.css">

  <link rel="stylesheet" href="user_res/assets/css/bootstrap.css">

  <link rel="stylesheet" href="user_res/assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="user_res/assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="user_res/assets/css/theme.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!--admin css-->

</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    
    @include('user.topbar')


    @include('user.navbar')

    <div class="row ">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title" align="center"> <u><b> Camps for you</b></u></h4>
            <div class="table-responsive p-5">
              <table class="table">
                <thead>
                  <tr>
                    <th> Camp Type </th>
                    <th> Location</th>
                    <th> Start time </th>
                    <th> End time </th>
                    <th> Date</th>
                    <th>Camp Iamge</th>
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
                    <td> <a href="/camp_image/{{$camps->image}}" class="post-thumb"><img src="/camp_image/{{$camps->image}}" alt="" width="80px"></a></td>
                    
                  </tr>
                @endforeach 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  
    

<script src="user_res/assets/js/jquery-3.5.1.min.js"></script>

<script src="user_res/assets/js/bootstrap.bundle.min.js"></script>

<script src="user_res/assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="user_res/assets/vendor/wow/wow.min.js"></script>

<script src="user_res/assets/js/theme.js"></script>

<script src="https://code.jquery.com/jquery-2.1.3.js"></script>

<script src="js/bootstrap.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  
</body>
</html>