<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\SeekerProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
class ProfileUpdate extends Controller
{
    public function show(Request $request)
    {
        
        return view('layouts.profileupdate');
    }

    public function store(Request $request,$id)
    {
        $user=User::find($id);
        $profile=SeekerProfile::where('user_id',$user->id)->first();
        if($profile)
        {
             $profile->first_name=$request->firstname;
            $profile->last_name=$request->lastname;
            $profile->certificate_degree_name=$request->certificate_degree_name;
            $profile->major=$request->major;
            $profile->institute_name=$request->institute_name;
            $profile->starting_date=$request->starting_date;
            $profile->completion_date=$request->completion_date;
            $profile->percentage=$request->percentage;
            $profile->cgpa=$request->cgpa;
            $profile->current_salary=$request->current_salary;
            $profile->user_id=$user->id;
            if($request->has('image'))
            {
                        $imageName=Carbon::now()->timestamp.'.'.$request->image->extension();
        $request->image->storeAs('jobs',$imageName);
        $profile->image=$imageName;
            }

            $profile->save();
        }
        else 
        {
            $profile=new SeekerProfile;
            $profile->first_name=$request->firstname;
            $profile->last_name=$request->lastname;
            $profile->certificate_degree_name=$request->certificate_degree_name;
            $profile->major=$request->major;
            $profile->institute_name=$request->institute_name;
            $profile->starting_date=$request->starting_date;
            $profile->completion_date=$request->completion_date;
            $profile->percentage=$request->percentage;
            $profile->cgpa=$request->cgpa;
            $profile->current_salary=$request->current_salary;
            $profile->user_id=$user->id;
            $profile->sub_heading=$request->sub_heading;

            if($request->has('image'))
            {
                        $imageName=Carbon::now()->timestamp.'.'.$request->image->extension();
        $request->image->storeAs('jobs',$imageName);
        $profile->image=$imageName;
            }

    
            
            $profile->save();
        }
       
        
        return view('layouts.profileupdate',['profile'=>$profile]);
    }

    public function usertype()
    {
        return view('user.usertype');
    }
}