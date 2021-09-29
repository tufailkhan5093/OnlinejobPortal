

@extends('layouts.base')
@section('content')



<div class="main-banner header-text" id="top">
    <div class="Modern-Slider">
        
      
      <!-- Item -->
      <div class="item item-1">
        <div class="img-fill">
            <div class="text-content">
                @if(Session::has('message'))
                <div class="alert alert-success">{{Session::get('message')}}</div>
               @endif
                <table style="background-color: rgb(85, 141, 0);padding:30px" class="shadow text-white table table-stripe">
                    <h1 class="text-white text-center">All Jobs</h1>
                    <thead>
                        <tr class="shadow" style="background-color: white;color:green">
                        <th>#</th>
                        <th>Job Title</th>
                        <th>Job Type</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Status</th>
                        <th>Skills Required</th>
                        <th>Salary</th>
                        <th>Created by</th>
                        <th>Company Name</th>
                        <th>Action</th>
                        </tr>
                        
                    </thead>
        
                    <tbody>
                        @php 
        
        
                        @endphp
                        @foreach($jobs as $key=>$user)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{$user->job_title}}</td>
                            <td>{{$user->job_type}}</td>
                            <td>{{$user->city}}</td>
                            <td>{{$user->state}}</td>
                            <td>{{$user->is_active}}</td>
                            <td>{{$user->skill_required}}</td>
                            <td>{{$user->salary}}</td>
                            <td>{{$user->user->name}}</td>
                           

                            <td><a href="{{route('deletejob',['id'=>$user->id])}}" class="btn btn-success btn-sm">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
        
                    
                </table>
              
            </div>
        </div>
      </div>
      <!-- // Item -->
      <!-- Item -->
     
      <!-- // Item -->
      <!-- Item -->

      <!-- // Item -->
    </div>
</div>

@endsection