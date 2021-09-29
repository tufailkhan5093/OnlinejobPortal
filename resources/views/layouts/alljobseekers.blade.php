

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
                <table style="background-color: rgb(85, 141, 0);padding:30px" class="text-white table table-stripe">
                    <h1 class="text-white text-center">All Job Seekers</h1>
                    <thead>
                        <tr style="background-color: white;color:green">
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Date of Birth</th>
                        <th>Status</th>
                        <th>Contact</th>
                        <th>Action</th>
                        </tr>
                        
                    </thead>
        
                    <tbody>
                        @php 
        
        
                        @endphp
                        @foreach($jobseekers as $key=>$user)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->dob}}</td>
                            <td>{{$user->is_active}}</td>
                            <td>{{$user->contact}}</td>
                            <td><a href="{{route('deletejobseeker',['id'=>$user->id])}}" class="btn btn-success btn-sm">Delete</a></td>
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