<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Usertype;
use App\Models\User;
use App\Models\Postjob;
use App\Models\SeekerProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $jobs=Postjob::orderBy('created_at','DESC')->get()->take(2);
        return view('welcome',['jobs'=>$jobs]);
    }

    public function store(Request $request,$id)
    {
        $user=User::find($id);
        $usertype=new Usertype;
        $usertype->utype='admin';
        

       
        $usertype->user_id=$user->id;
        
        
        $usertype->save();
        return view('usertype',['user'=>$user]);
    }

    public function show(Request $request)
    {
        
        return view('usertype');
    }

    public function alljobs(Request $request,$job_type=NULL)
    {
        if($job_type)
        {
            $jobs=Postjob::where('job_type',$job_type)->simplePaginate(8);
        }
        else 
        {
            $jobs=Postjob::simplePaginate(8);
        }
       
            
    
        
        return view('layouts.jobs',['jobs'=>$jobs]);
    }

    public function jobdetail(Request $request,$id)
    {
        $jobdetal=Postjob::find($id);
        return view('layouts.jobdetail',['jobdetail'=>$jobdetal]);
    }

    public function profile()
    {
        $user=SeekerProfile::where('user_id',Auth::user()->id)->first();
        return view('layouts.profile',['user'=>$user]);
        
    }
}