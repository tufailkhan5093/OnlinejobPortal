
@extends('layouts.base')
@section('content')


<div class="page-heading header-text">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        @if($user)
        <h1>{{$user->first_name}} {{$user->last_name}}</h1>
        <span>{{$user->sub_heading}}</span>
        @endif
      </div>
    </div>
  </div>
</div>

<div class="more-info about-info">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="more-info-content">
          @if($user)
          <div class="row">
            
            <div class="col-md-6 align-self-center">
              <div class="right-content">
                <span>Mr .</span>
                
                <h2 class="text-capitalize">{{$user->first_name}} <em>{{$user->last_name}}</em></h2>
                
                
               
              </div>
              
              <p style="font-size: 15px;margin-top:-20px">{{$user->sub_heading}}</p>
              <p>Degree Name <b>{{$user->certificate_degree_name}}</b></p>
               <p>Major <b>{{$user->major}}</b></p>
               <p>Institute <b>{{$user->institute_name}}</b></p>
               <p>Starting Date <b>{{$user->starting_date}}</b></p>
               <p>Completion Date <b>{{$user->completion_date}}</b></p>
               <p>Cgpa <b>{{$user->cgpa}}</b></p>
               <p>in Percentage <b>{{$user->percentage}}</b></p>
               <p>Current Salary <b>{{$user->current_salary}}</b></p>
            </div>

           
            <div class="col-md-6">
              <div class="left-image">
                <img src="{{asset('assets/images/jobs') }}/{{$user->image}}" alt="{{$user->image}}">
              </div>
            </div>
          </div>

          @else 
          <div class="col-lg-12">
            <fieldset>
              <a href="{{ route('profileupdate',['id'=>Auth::user()->id]) }}" style="background-color:rgb(118, 196, 1);margin-left:40%;margin-bottom:10%" id="form-submit" class=" btn btn-success border-button">Update Profile</a>
            </fieldset>
          </div>

          @endif
        </div>
      </div>
    </div>
  </div>
</div>

@endsection