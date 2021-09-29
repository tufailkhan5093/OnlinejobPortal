



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
                            <h1 style="font-size: 30px;font-weight:bold" class="text-white mb-3">Apply for Job</h1>
                            
                     
                          

                           
                            <form enctype="multipart/form-data" class="form-stl"  name="frm-login" method="POST" >
                                @csrf
                              <div class="row container">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                  <fieldset>
                                    <input name="fullname" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                                  </fieldset>
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <fieldset>
                                      <input name="education" type="text" class="form-control" id="name" placeholder="Qualification i.e BS" required="">
                                    </fieldset>
                                  </div>

                                  <div class="col-lg-6 col-md-12 col-sm-12">
                                    <fieldset>
                                      <input name="skills" type="text" class="form-control" id="name" placeholder="Skills" required="">
                                    </fieldset>
                                  </div>

                                  <div class="col-lg-6 col-md-12 col-sm-12">
                                    <fieldset>
                                      <select style="border-radius: 50px" class="col-lg-12 col-md-12 col-sm-12" name='experience'>
                                        <option >Year of Experience</option>
                                      
                                        <option value="1">1 Year</option>
                                        <option value="2">2 Years</option>
                                        <option value="3">3 Years</option>
                                        <option value="4">4 Years</option>
                                        
                                       
                                       
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
                                    <label class="text-white">Upload a Resume</label>
                                  <input name="cv" type="file" class="form-control" id="name" placeholder="Upload Resume" required="">
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