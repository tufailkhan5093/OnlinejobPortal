

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
                    <h1 class="text-white text-center">All Companies</h1>
                    <thead>
                        <tr class="shadow" style="background-color: white;color:green">
                        <th>#</th>
                        <th>Name</th>
                        <th>Est Date</th>
                        <th>Website</th>
                        <th>Created By</th>
                      
                        <th>Action</th>
                        </tr>
                        
                    </thead>
        
                    <tbody>
                        @php 
        
        
                        @endphp
                        @foreach($companies as $key=>$user)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{$user->company_name}}</td>
                            <td>{{$user->establishment_date}}</td>
                            <td>{{$user->company_url}}</td>
                            <td>{{$user->user->name}}</td>
                
                         

                            <td><a href="{{route('deletecompany',['id'=>$user->id])}}" class="btn btn-success btn-sm">Delete</a></td>
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