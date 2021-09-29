



@extends('layouts.base')
@section('content')


<div class="main-banner header-text" id="top" >
    <div class="Modern-Slider">
      <!-- Item -->
      <div class="item item-1">
        <div class="img-fill">
            <div class="text-content">
                <div style="margin-top: 450px;margin-bottom:200px" class="callback-form">
                    <div class="container">
                      <div class="row">
                       
                        <div class="col-md-12" style="margin-top: 80px;margin-bottom:200px">
                          <div class="contact-form">
                            <h1 style="font-size: 30px;font-weight:bold" class="text-white mb-3">Post a Job</h1>
                            
                     
                          

                           
                            <form enctype="multipart/form-data" class="form-stl" action="{{ route('postjob',['user_id'=>Auth::user()->id]) }}" name="frm-login" method="POST" >
                                @csrf
                              <div class="row container">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                  <fieldset>
                                    <input name="job_title" type="text" class="form-control" id="name" placeholder="Job Title" required="">
                                  </fieldset>
                                </div>
                                
                               

                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <fieldset>
                                      <select style="border-radius: 50px" class="col-lg-12 col-md-12 col-sm-12" name='job_type'>
                                        <option >Job Type</option>
                                      
                                        <option value="fulltime">Full Time</option>
                                        <option value="parttime">Part Time</option>
                                        <option value="contract">Contract</option>
                                        
                                       
                                       
                                      </select>
                                    </fieldset>
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <fieldset>
                                      <input name="state" type="string" class="form-control" id="name" placeholder="State/Province" required="">
                                    </fieldset>
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12">
                                  <fieldset>
                                    <input name="city" type="string" class="form-control" id="name" placeholder="City" required="">
                                  </fieldset>
                                </div>

                               
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <fieldset>
                                      <select style="border-radius: 50px" class="col-lg-12 col-md-12 col-sm-12" name='is_active'>
                                        <option >Active/InActive</option>
                                      
                                        <option value="active">Active</option>
                                        <option value="inactive">InActive</option>
                                       
                                        
                                       
                                       
                                      </select>
                                    </fieldset>
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <fieldset>
                                      <input name="skill_required" type="string" class="form-control" id="name" placeholder="Skills Required i.e java,Python" required="">
                                    </fieldset>
                                  </div>

                                  <div class="col-lg-6 col-md-12 col-sm-12">
                                    <fieldset class="text-dark">
                                      <select style="border-radius: 50px" class="col-lg-12 col-md-12 col-sm-12" name='company_id'>
                                        <option >Company Name</option>
                                      @foreach ($company as $item)
                                      <option value="{{$item->id}}">{{$item->company_name}}</option> 
                                      @endforeach
                                        
                                       
                                        
                                       
                                       
                                      </select>
                                    </fieldset>
                                </div>

                              

                              <div class="col-lg-6 col-md-12 col-sm-12">
                                <fieldset>
                                  <input name="salary" type="text" class="form-control" id="name" placeholder="Salary">
                                </fieldset>
                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-12">
                              <fieldset>
                                <input name="image" type="file" class="form-control" id="name" placeholder="Image" required="">
                              </fieldset>
                          </div>

                                
                              


                                <div class="mt-4 col-lg-12 col-md-12 col-sm-12">
                                  <fieldset>
                                    <textarea name="job_description" type="text" class="form-control" id="subject" required="">Job Description</textarea>
                                  </fieldset>
                                </div>

                               

                            
                               
                              
                                <div class="col-lg-12">
                                  <fieldset>
                                    <button type="submit" id="form-submit" class="border-button">Register</button>
                                  </fieldset>
                                </div>
                              </div>
                            </form>

                       
                          </div>
                        </div>
                      </div>
                
                      <br>
                      <br>
                      <br>
                      <br>
                    </div>
                  </div>
                
                </div>
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




<x-guest-layout>
    <main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
			
			</div>
			<div class="row">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">							
					<div class=" main-content-area">
						<div class="wrap-login-item ">
							<div class="register-form form-item ">
                               
							</div>											
						</div>
					</div><!--end main products area-->		
				</div>
			</div><!--end row-->

		</div><!--end container-->

	</main>
</x-guest-layout>





@endsection