



@extends('layouts.base')
@section('content')


<div class="main-banner header-text" id="top">
    <div class="Modern-Slider">
      <!-- Item -->
      <div class="item item-1">
        <div class="img-fill">
            <div class="text-content">
                <div style="margin-top: 450px;margin-bottom:200px" class="callback-form">
                    <div class="container">
                      <div class="row">
                       
                        <div class="col-md-12">
                          <div class="contact-form">
                            <h1 style="font-size: 30px;font-weight:bold" class="text-white mb-3">Company Registration</h1>
                            
                     
                          

                           
                            <form class="form-stl" action="{{ route('registercompany',['id'=>Auth::user()->id]) }}" name="frm-login" method="POST" >
                                @csrf
                              <div class="row container">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                  <fieldset>
                                    <input name="company_name" type="text" class="form-control" id="name" placeholder="Company Name" required="">
                                  </fieldset>
                                </div>
                                
                               

                                <div class="col-lg-6 col-md-12 col-sm-12">
                                  <fieldset>
                                    <input name="establishment_date" type="date" class="form-control" id="name" placeholder="Establishment_date" required="">
                                  </fieldset>
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12">
                                  <fieldset>
                                    <input name="company_url" type="string" class="form-control" id="name" placeholder="Website URL" required="">
                                  </fieldset>
                                </div>

                                {{-- <div class="col-lg-6 col-md-12 col-sm-12">
                                  <fieldset>
                                    <select>
                                      <option>Is Active</option>
                                      <option value="active">Active</option>
                                      <option value="inactive">Inactive</option>
                                    </select>
                                  </fieldset>
                                </div> --}}

                                
                              


                                <div class="col-lg-6 col-md-12 col-sm-12">
                                  <fieldset>
                                    <input name="image" type="file" class="form-control" id="subject" placeholder="Image" required="">
                                  </fieldset>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                      <textarea name="profile_description" type="text" class="form-control" id="email"  placeholder="Description" required="">Description</textarea>
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
				<ul>
					<li class="item-link"><a href="/" class="link">home</a></li>
					<li class="item-link"><span>Register</span></li>
				</ul>
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