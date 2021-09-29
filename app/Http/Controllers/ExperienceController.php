<?php

namespace App\Http\Controllers;
use App\Models\Experience;
use App\Models\User;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function show(Request $request)
    {
        return view('layouts.userexperience');
    }

    public function store(Request $request,$id)
    {
        $user=User::find($id);
        $exp=new Experience;
        
        $exp->is_current_job=$request->is_current_job;
        if($request->is_current_job=='no')
        {
            $exp->starting_date=NULL;
            $exp->ending_date=NULL;
        }
        else 
        {
            $exp->starting_date=$request->starting_date;
            $exp->ending_date=$request->ending_date;
        }
        
        $exp->job_title=$request->job_title;
        $exp->company_name=$request->company_name;
        $exp->state=$request->state;
        $exp->city=$request->city;
        $exp->description=$request->description;
        $exp->user_id=$user->id;

        $exp->save();

        return redirect()->route('home');
        
    }
}