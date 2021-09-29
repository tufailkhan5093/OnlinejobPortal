@extends('layouts.base')
@section('content')


  <!-- Page Content -->
  <div class="page-heading header-text" style="height: 100px">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>All Jobs</h1>
         
        </div>
      </div>
    </div>
  </div>

  <div class="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <form action="#">
               <h5 style="margin-bottom: 15px">Type</h5>

               <div>
                    <label>
                       

                         <a href="{{route('alljobs',['job_type'=>'contract'])}}">Contract ({{$jobs->where('job_type','contract')->count()}})</a>
                    </label>
               </div>

               <div>
                    <label>
                         

                         <a href="{{route('alljobs',['job_type'=>'fulltime'])}}">Full time ({{$jobs->where('job_type','fulltime')->count()}})</a>
                    </label>
               </div>

               <div>
                <label>
                     

                     <a href="{{route('alljobs',['job_type'=>'parttime'])}}">Part time ({{$jobs->where('job_type','parttime')->count()}})</a>
                </label>
           </div>

          

              
          </form>
          
          <br>
        </div>

        <div class="col-lg-8">
          <div class="row">
            
        @foreach ($jobs as $job)
            
        
        <div class="col-md-6">
          <div class="service-item">
            <img src="{{asset('assets/images/jobs') }}/{{$job->image}}" alt="">
            <div style="background-color: rgb(240, 237, 237)" class="down-content">
              <h4>{{$job->job_title}}</h4>
              <p>Salary upto : <b>$ {{$job->salary}}</b></p>
              <p>Location : <b>{{$job->city}}</b></p>
              
    
              <p class="text-capitalize">Job Type : <b>{{$job->job_type}}</b></p>

              <a href="{{route('jobdetail',['id'=>$job->id])}}" class="filled-button">View More</a>
            </div>
          </div>

          <br>
        </div>
        @endforeach
        
        

      

      
      </div>
      {{$jobs->links()}}
        </div>
      </div>

      

      <br>
      <br>

    
          
  

      <br>
      <br>
      <br>
      <br>
    </div>
  </div>
  

@endsection