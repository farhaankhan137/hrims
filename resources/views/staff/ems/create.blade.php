@extends('staff.layouts.master')
@section('content')


<div class="pd-ltr-20 xs-pd-20-10">
	<div class="min-height-200px">
        <!-- horizontal Basic Forms Start -->
        <div class="pd-30 card-box mb-30">
            <div class="clearfix">
                <div class="pull-left">
                    <h4 class="text-blue h2">Employee Registration Form</h4>
                    <p class="mb-30">All Fields are complusory</p>
                </div>
            </div>
            <form>
            <h5><b>Personal Details</b></h5>
            <hr>
            <div class="row"> 
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>First Name</label>
                        <input class="form-control" type="text" placeholder="First Name"/>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Last Name</label>
                        <input class="form-control" type="text" placeholder="Last Name"/>
                    </div>
                </div>            
            </div>

            <div class="row"> 
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>TIN Number</label>
                        <input class="form-control" type="text" placeholder="TIN Number"/>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Photo</label>
                        <input type="file" class="form-control-file form-control height-auto">
                    </div>
                </div>            
            </div>

            <div class="row"> 
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Address</label>
                        <input class="form-control" type="text" placeholder="Address"/>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Gender</label>
                        <select class="custom-select col-12">
                            <option selected="">Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
            			</select>
                    </div>
                </div>            
            </div>

            <div class="row"> 
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Driver's Licence Number</label>
                        <input class="form-control" type="number" placeholder="Driver's Licence Number"/>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Date of Birth</label>
                        <input class="form-control date-picker" placeholder="Date of Birth" type="text">
                    </div>
                </div>            
            </div>

            <div class="row"> 
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Landline Number</label>
                        <input class="form-control" value="" placeholder="Landline Number" type="tel">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Mobile Number</label>
                        <input class="form-control" value="" placeholder="Mobile Number" type="tel">
                    </div>
                </div>            
            </div>
            <br/>
            <br/>
            <h5><b>Next of Keen</b></h5>
            <hr>
            <div class="row"> 
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" type="text" placeholder="Next of Keen"/>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Relationship</label>
                        <input class="form-control" type="text" placeholder="Relationship"/>
                    </div>
                </div>            
            </div>

            <div class="row"> 
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Address</label>
                        <input class="form-control" type="text" placeholder="Address"/>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Mobile Number</label>
                        <input class="form-control" value="" placeholder="Mobile Number" type="tel">
                    </div>
                </div>            
            </div>
            <br/>
            <br/>
            <h5><b>Position Details</b></h5>
            <hr>

            <div class="row"> 
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Position Title</label>
                        <input class="form-control" type="text" placeholder="Position Title"/>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Department</label>
                        <input class="form-control" type="text" placeholder="CHANGE"/>
                    </div>
                </div>            
            </div>

            <div class="row"> 
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Employement Type</label>
                        <select class="custom-select col-12">
                            <option selected="">Select</option>
                            <option value="Full Time">Full Time</option>
                            <option value="Part Time">Part Time</option>
                            <option value="Temporary">Temporary</option>
                            <option value="Casual">Casual</option>
            			</select>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Total Hours for each Week</label>
                        <input class="form-control" type="number" placeholder="Total Hours for each Week"/>
                    </div>
                </div>            
            </div>
            <div class="row"> 
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Gross Pay ($)</label>
                        <input class="form-control" value="" type="number">
                    </div>
                </div>           
            </div>
            <br/>
            <br/>
            <h5><b>Education Details</b></h5>
            <hr>
            
            <div class="row"> 
                <div class="col-md-8 col-sm-12">
                    <div class="form-group">
                        <label>Program</label>
                        <input class="form-control" type="text" placeholder="Program"/>
                    </div>
                </div>

                <div class="col-md-2 col-sm-12">
                    <div class="form-group">
                        <label>Date Completed</label>
                        <input class="form-control date-picker" placeholder="Select Date" type="text"/>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12">
                    <div class="form-group">
                        <label>GPA</label>
                        <input class="form-control" type="number" placeholder="GPA"/>
                    </div>
                </div>
                             
            </div>
            <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Add</button>

            <br>
            <br>
            <br>
            <h5><b>Banking and Superannuation Details</b></h5>
            <hr>
            <div class="row"> 
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Bank</label>
                        <select class="custom-select col-12">
                            <option selected="">Select</option>
                            <option value="ANZ">ANZ</option>
                            <option value="Bank of Baroda">Bank of Baroda</option>
                            <option value="Bank of the South Pacific">Bank of the South Pacific</option>
                            <option value="Bred Bank">Bred Bank</option>
                            <option value="HFC Bank">HFC Bank</option>
                            <option value="Westpac Banking">Westpac Banking</option>
            			</select>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Bank Account Name</label>
                        <input class="form-control" type="text" placeholder="Bank Account Name"/>
                    </div>
                </div>            
            </div>

            <div class="row"> 
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Bank Account Number</label>
                        <input class="form-control" type="number" placeholder="Bank Account Number"/>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>FNPF Number</label>
                        <input class="form-control" type="number" placeholder="FNPF Number"/>
                    </div>
                </div>            
            </div>
            <br>
            <button type="button" class="btn btn-success float-right">Submit</button> 
            <br>
            <br>
            </form>
        </div>
    </div>
</div>


							
@endsection