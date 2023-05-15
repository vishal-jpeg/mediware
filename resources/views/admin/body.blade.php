<div class="main-panel">
    <div class="content-wrapper">            
      <div class="row ">
        <div class="col-7 grid-margin">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title text-primary">Camps for you</h4>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th> id</th>
                      <th> Camp Type </th>
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
                        <span class="ps-2">{{$camps->id}}</span>
                      <td>
                        <span class="ps-2">{{$camps->name}}</span>
                      </td>
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
        <div class="col-5 grid-margin">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title text-primary">Categories</h4>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th> id</th>
                      <th> Category</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($category as $categories)
                    <tr>
                      <td>
                        <span class="ps-2">{{$categories->id}}</span>
                      </td>
                      <td> {{$categories->name}} </td>
                    </tr>
                  @endforeach 
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center align-items-center g-2">
        <div class="col grid-margin">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title text-primary">Schemes</h4>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                    <th> id</th>
                      <th>Scheme name</th>
                      <th>Small description </th>
                      <th>Detailed description</th>
                      <th> Eligiblity</th>
                      <th>Reference</th>
                      <th>Category id</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($scheme as $schemes)
                    <tr>
                      <td>
                        <span class="ps-2">{{$schemes->id}}</span>
                      <td>
                        <span class="ps-2">{{$schemes->scheme_name}}</span>
                      </td>
                      <td> {{$schemes->small_description}} </td>
                      <td> {{$schemes->detailed_description}}</td>
                      <td> {{$schemes->eligibility}}</td>
                      <td> {{$schemes->references}}</td>
                      <td> {{$schemes->category_id}}</td>
                      
                    </tr>
                  @endforeach 
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center align-items-center g-2">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title text-primary">Feedback</h4>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th> id</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Feedback</th>
                      <th> Message</th>
                      <th>Reference</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($feedback as $feedbacks)
                    <tr>
                      <td> {{$feedbacks->id}}</td>
                      <td> {{$feedbacks->name}} </td>
                      <td> {{$feedbacks->email}}</td>
                      <td> {{$feedbacks->feedback}}</td>
                      <td> {{$feedbacks->message}}</td>
                      <td> {{$feedbacks->reference}}</td> 
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
    </div>
</div>