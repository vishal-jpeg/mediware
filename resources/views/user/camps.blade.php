<div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Camps for you</h1>
      <div class="row mt-5">
        @foreach($camp as $camps)
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <a href="/camp_image/{{$camps->image}}" class="post-thumb">
                <img src="/camp_image/{{$camps->image}}" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="camptype"> {{$camps->name}}</h5>
              <div class="site-info" >
                <div class="mr-2">
                  <h6><span name="location"><a href="{{$camps->location}}" style="text-color:green text-size:10px">location link</a></span></h6>
                </div>
                <div class="mt-2">
                  <h6><span class="mai-time" name="time">{{$camps->starttime}}</span> <span>-{{$camps->endtime}}</span></h6>
                  <h6><span class="mai-today" name="date">{{$camps->date}}</span></h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div> <!-- .page-section -->