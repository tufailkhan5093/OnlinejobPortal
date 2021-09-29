@extends('layouts.base')
@section('content')


<div class="main-banner header-text" id="top">
    <div class="Modern-Slider">
      <!-- Item -->
      <div class="item item-1">
        <div class="img-fill">
            <div class="text-content">
                <div style="padding-top:100px;" class="callback-form">
                    <div class="container">
                      <div class="row">
                       
                        <div class="col-md-12" style="margin-bottom: 100px;padding-top:100px">
                          <div class="contact-form">
                            <h1 style="font-size: 30px;font-weight:bold" class="text-white mb-3">Experience Detail</h1>
                            
                     
                          

                            <x-jet-validation-errors class="mb-4" />
                            <form enctype="multipart/form-data" class="form-stl" action="{{ route('experiences',['id'=>Auth::user()->id]) }}" name="frm-login" method="POST" >
                                @csrf
                              <div class="row container">
                               
                              
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <fieldset>
                                        <select style="border-radius: 50px" class="col-lg-12 col-md-12 col-sm-12" name='is_current_job' id="ddlPassport">
                                            <option >Is Current Job</option>
                                            <option value="no">No</option>
                                            <option value="yes">Yes</option>
                                        </select>
                                        </fieldset>
                                        </div>

{{-- <div id="dvPassport" class="col-lg-6 col-md-12 col-sm-12" style="display: none">
    <label class="text-white">Starting Date</label>
    <input id="txtPassportNumber" name="starting_date" type="date" class="form-control" id="email"  placeholder="Starting Date" required="">
</div>

<div id="dvPassport1" class="col-lg-6 col-md-12 col-sm-12" style="display: none">
    <label class="text-white">Ending Date</label>
    <input id="txtPassportNumber" name="starting_date" type="date" class="form-control" id="email"  placeholder="Starting Date" required="">
</div> --}}

                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <fieldset>
                                      <input name="job_title" type="text" class="form-control" id="email"  placeholder="Job Title" required="">
                                    </fieldset>
                                  </div>
                                
                              
                                <div id="dvPassport" class="col-lg-6 col-md-12 col-sm-12">
                                  <fieldset>
                                      <label class="text-white">Starting Date</label>
                                    <input id="txtPassportNumber" name="starting_date" type="date" class="form-control" id="email"  placeholder="Starting Date" required="">
                                  </fieldset>
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <fieldset>
                                        <label class="text-white">Ending Date</label>
                                      <input name="ending_date" type="date" class="form-control" id="email"  placeholder="Starting Date" required="">
                                    </fieldset>
                                  </div>
                                  

                               

                                <div class="col-lg-6 col-md-12 col-sm-12">
                                  <fieldset>
                                    <input name="company_name" type="text" class="form-control" id="email"  placeholder="Company Name" required="">
                                  </fieldset>
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12">
                                  <fieldset>
                                    <input name="state" type="text" class="form-control" id="email"  placeholder="State/Province" required="">
                                  </fieldset>
                                </div>


                                <div class="col-lg-6 col-md-12 col-sm-12">
                                  <fieldset>
                                    <input name="city" type="text" class="form-control" id="email"  placeholder="City" required="">
                                  </fieldset>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                  <fieldset>
                                    <textarea name="description" type="text" class="form-control" id="email" required="">Description</textarea>
                                  </fieldset>
                                </div>

                              



                                


                                
                              
                               
                              
                                <div class="col-lg-12">
                                  <fieldset>
                                    <button type="submit" id="form-submit" class="border-button">Save</button>
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


{{-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#ddlPassport").change(function () {
            if ($(this).val() == "yes") {
                $("#dvPassport").show();
                $("#dvPassport1").show();
            } else {
                $("#dvPassport").hide();
                $("#dvPassport1").hide();
            }
        });
    });
</script> --}}






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