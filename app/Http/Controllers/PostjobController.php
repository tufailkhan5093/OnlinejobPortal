<?php

namespace App\Http\Controllers;
use App\Models\Company;
use App\Models\User;
use App\Models\Postjob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class PostjobController extends Controller
{
    public function show(Request $request)
    {
        // $user=User::find($id);
        $company=Company::where('user_id',Auth::user()->id)->get();
        return view('layouts.postjob',['company'=>$company]);
    }

    public function store(Request $request,$user_id)
    {
        $user=User::find($user_id);
        $company=Company::where('user_id',$user->id)->get();

        $postjob=new Postjob;
        $postjob->user_id=$user->id;
        $postjob->company_id=$request->company_id;
        $postjob->job_title=$request->job_title;
        $postjob->job_description=$request->job_description;
        $postjob->city=$request->city;
        $postjob->job_type=$request->job_type;
        $postjob->state=$request->state;
        // $postjob->image=$request->file('image');
        $postjob->is_active=$request->is_active;
        $postjob->salary=$request->salary;
        $postjob->skill_required=$request->skill_required;

        $imageName=Carbon::now()->timestamp.'.'.$request->image->extension();
        $request->image->storeAs('jobs',$imageName);
        $postjob->image=$imageName;
        
        $postjob->save();
        return redirect()->route('home');
        
    }
}