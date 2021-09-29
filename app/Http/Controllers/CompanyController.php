<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function show(Request $request)
    {
        return view('layouts.company');
    }

    public function store(Request $request,$id)
    {
        $user=User::find($id);
        $company=new Company;
        $company->company_name=$request->company_name;
        $company->profile_description=$request->profile_description;
        $company->establishment_date=$request->establishment_date;
        $company->company_url=$request->company_url;
        $company->image=$request->image;
        $company->user_id=$user->id;
        $company->save();
        return redirect()->route('home');
    }
}