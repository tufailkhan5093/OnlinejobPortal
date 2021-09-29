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
                            <h1 style="font-size: 30px;font-weight:bold" class="text-white mb-3">Profile Setting</h1>
                            
                     
                          

                            <x-jet-validation-errors class="mb-4" />
                            <form enctype="multipart/form-data" class="form-stl" action="{{ route('profileupdates',['id'=>Auth::user()->id]) }}" name="frm-login" method="POST" >
                                @csrf
                              <div class="row container">
                               
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                  <fieldset>
                                    <input name="firstname" type="text" class="form-control" id="email"  placeholder="First Name" required="">
                                  </fieldset>
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12">
                                  <fieldset>
                                    <input name="lastname" type="text" class="form-control" id="email"  placeholder="Last Name" required="">
                                  </fieldset>
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12">
                                  <fieldset>
                                    <input name="sub_heading" type="text" class="form-control" id="email"  placeholder="i.e Laravel Developer" required="">
                                  </fieldset>
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12">
                                  <fieldset>
                                    <input name="certificate_degree_name" type="text" class="form-control" id="email"  placeholder="Degree/Certificate Name" required="">
                                  </fieldset>
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12">
                                  <fieldset>
                                    <input name="major" type="text" class="form-control" id="email"  placeholder="Major i.e Engineering" required="">
                                  </fieldset>
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12">
                                  <fieldset>
                                    <input name="institute_name" type="text" class="form-control" id="email"  placeholder="Institute/University" required="">
                                  </fieldset>
                                </div>


                                <div class="col-lg-6 col-md-12 col-sm-12">
                                  <fieldset>
                                    <input name="starting_date" type="text" class="form-control" id="email"  placeholder="Starting Date" required="">
                                  </fieldset>
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12">
                                  <fieldset>
                                    <input name="completion_date" type="text" class="form-control" id="email"  placeholder="Completion Date" required="">
                                  </fieldset>
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12">
                                  <fieldset>
                                    <input name="percentage" type="text" class="form-control" id="email"  placeholder="Percentage i.e 60%" required="">
                                  </fieldset>
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12">
                                  <fieldset>
                                    <input name="cgpa" type="text" class="form-control" id="email"  placeholder="CGPA i.e 3.10/4.00" required="">
                                  </fieldset>
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12">
                                  <fieldset>
                                    <input name="current_salary" type="text" class="form-control" id="email"  placeholder="Current Salary" required="">
                                  </fieldset>
                                </div>


                                <div class="col-lg-6 col-md-12 col-sm-12">
                                  <fieldset>
                                    <input name="image" type="file" class="form-control" id="name" placeholder="Image" required="">
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
@endsection