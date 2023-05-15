<div class="page-section">
    <div class="container">
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
      <div class="text-center wow fadeInUp">
        <h1 >Feedback Form</h1>
        <p class="text-grey mb-4">Please fill out the form below to submit your feedback. If you believe that certain schemes or camps is missing from the webpages or could be added, please use this form to provide your suggestions.</p>
      </div>

      <form class="main-form" action="upload_feedback" method="POST" >
      @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" placeholder="Full name" name="name" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control" placeholder="Email address..." name="email" required>
          </div>
          <div class="col-12 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="text" class="form-control" name="feedback" placeholder="Feedback..." >
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter scheme or camp which if your feeling that it is missing.."></textarea>
          </div>
          <div class="col-12 py-2 wow fadeInRight" data-wow-delay="300ms">
            <input type="text" class="form-control" name="reference" placeholder="Source for the scheme or camp suggested..">
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
      </form>
    </div>
  </div> <!-- .page-section -->