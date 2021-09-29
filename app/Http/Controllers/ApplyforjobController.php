<?php

namespace App\Http\Controllers;
use App\Models\Postjob;
use App\Models\Applyforjob;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplyforjobController extends Controller
{
    public function show(Request $request)
    {
        
        // $user=User::where('user_type','recruiter')->first();
        // $job=Postjob::where('user_id',$user->id)->first();
        return view('layouts.applyforjob');
        
    }

    public function store(Request $request,$id)
    {
        
        $job=Postjob::find($id);
        $applied= new Applyforjob;
        $applied->fullname=$request->fullname;
        $applied->experience=$request->experience;
        $applied->education=$request->education;
        $applied->skills=$request->skills;
        $applied->cv=$request->file('cv');
        $applied->user_id=Auth::user()->id;
        $applied->postjob_id=$job->id;
        $applied->save();

        return redirect()->route('home');
        
    }
}