<div class="main-panel">
          <div class="content-wrapper">            
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
                            
                          </tr>
                        @endforeach 
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
            </div>
          </footer>
          <!-- partial -->
        </div>