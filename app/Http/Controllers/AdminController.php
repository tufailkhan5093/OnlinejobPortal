<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Company;
use App\Models\Postjob;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function alljobseekers()
    {
        $user=User::where('user_type','jobseeker')->get();
        return view('layouts.alljobseekers',['jobseekers'=>$user]);
    }

   

    public function deletejobseeker($id)
    {
        $job=User::find($id);
        $job->delete();
        session()->flash('message','Deleted Successfully!');
        return redirect()->route('alljobseekers');
        
    }

    public function alljobs(Request $request,$job_type=NULL)
    {
        $jobs=Postjob::all();
        return view('layouts.alljobs',['jobs'=>$jobs]);
        
    }

    public function deletejob($id)
    {
        $job=Postjob::find($id);
        $job->delete();
        session()->flash('message','Deleted Successfully!');
        return redirect()->route('all-jobs');
        
    }

    public function allcompanies()
    {
        $companies=Company::all();
        return view('layouts.allcompanies',['companies'=>$companies]);
    }

    public function deletecompany($id)
    {
        $company=Company::find($id);
        $company->delete();
        session()->flash('message','Deleted Successfully!');
        return redirect()->route('allcompanies');
        
    }

   
}  