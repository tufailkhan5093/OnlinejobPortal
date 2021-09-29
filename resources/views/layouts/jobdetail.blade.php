 
 @extends('layouts.base')
 @section('content')
 <!-- Page Content -->
 <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          

          <h1>{{$jobdetail->job_title}}</h1>
          <h3>Salary upto $  {{$jobdetail->salary}} </h3>
        </div>
      </div>
    </div>
  </div>

  <div class="services">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="tabs-content" style="display: block;">
            <h4>Description</h4>

           <p>{{$jobdetail->job_description}}</p>
          </div>

          <br>
        </div>

        <div class="col-md-4">
          <br>
          <div>
            <img src="assets/images/product-1-720x480.jpg" alt="" class="img-fluid wc-image">
          </div>
          <br>

          <a href="{{route('applyforjob',['id'=>$jobdetail->id])}}" class="filled-button text-center" style="display: block">Apply for this Job</a>

          <br>
        </div>
      </div>

      <br>

      <div class="row">
        <div class="col-lg-9">
          <div class="tabs-content" style="display: block;">
            <h4>Skills Required</h4>

            <p>{{$jobdetail->skill_required}}</p>
          </div>
        </div>

        <div class="col-lg-9">
            <div class="tabs-content" style="display: block;">
              <h4>About Company</h4>
              
              <strong>Comany Name : </strong>
              <p>{{$jobdetail->company->company_name}}</p>
              <strong>Description : </strong>
              <p>{{$jobdetail->company->profile_description}}</p>

              <strong>Establishment Date : </strong>
              <p>{{$jobdetail->company->establishment_date}}</p>

              <strong>Website</strong>
              <p>{{$jobdetail->company->company_url}}</p>
           
            </div>
          </div>


        <div class="col-lg-3">
          <div class="tabs-content">
            <h4>Contact Details</h4>

            <p>
              <span>Name</span>
            
              <br>
            
              <strong>{{$jobdetail->user->name}}</strong>
            </p>
            
            <p>
              <span>Phone</span>
            
              <br>
              
              <strong>
                <a href="tel:123-456-789">{{$jobdetail->user->contact}}</a>
              </strong>
            </p>
            
          
            <p>
              <span>Email</span>
            
              <br>
              
              <strong>
                <a href="mailto:john@carsales.com">{{$jobdetail->user->email}}</a>
              </strong>
            </p>
          </div>
        </div>
      </div>

      <br>



      <br>
      <br>
      <br>
    </div>
  </div>

  @endsection