@extends('staff.layouts.master')
@section('content')


<div class="pd-ltr-20 xs-pd-20-10">
	<div class="min-height-200px">
        <!-- horizontal Basic Forms Start -->
        <div class="pd-30 card-box mb-30">
            <div class="clearfix">
                <div class="pull-left">
                    <h4 class="text-blue h4">Employee Registration Form</h4>
                    <p class="mb-30">All Fields are complusory</p>
                </div>
            </div>
            <form>
            <p><b>Personal Details</b></p>
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
                        <input class="form-control" type="text" placeholder="CHANGE"/>
                    </div>
                </div>            
            </div>

            <div class="row"> 
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Driver's Licence Number</label>
                        <input class="form-control" type="text" placeholder="Driver's Licence Number"/>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Date of Birth</label>
                        <input class="form-control" type="text" placeholder="CHANGE"/>
                    </div>
                </div>            
            </div>

            <div class="row"> 
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Landline Number</label>
                        <input class="form-control" type="text" placeholder="Landline Number"/>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Mobile Number</label>
                        <input class="form-control" type="text" placeholder="Mobile Number"/>
                    </div>
                </div>            
            </div>

            <div class="row"> 
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Next of keen</label>
                        <input class="form-control" type="text" placeholder="Next of keen"/>
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
                        <input class="form-control" type="text" placeholder="Mobile Number"/>
                    </div>
                </div>            
            </div>

            <br/>
            <p><b>Position Details</b></p>

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
                        <input class="form-control" type="text" placeholder="CHANGE"/>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Total Hours for each Week</label>
                        <input class="form-control" type="text" placeholder="CHANGE"/>
                    </div>
                </div>            
            </div>
            <div class="row"> 
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Gross Pay</label>
                        <input class="form-control" type="text" placeholder="Gross Pay"/>
                    </div>
                </div>           
            </div>

            <br/>
            <p><b>Education Details</b></p>
            <div class="row"> 
                <div class="col-md-8 col-sm-12">
                    <div class="form-group">
                        <label>Qualification</label>
                        <input class="form-control" type="text" placeholder="Qualification"/>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12">
                    <div class="form-group">
                        <label>Year Completed</label>
                        <input class="form-control" type="text" placeholder="CHANGE"/>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12">
                    <div class="form-group">
                        <label>GPA</label>
                        <input class="form-control" type="text" placeholder="GPA"/>
                    </div>
                </div>              
            </div>
            <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Add</button>

            <br/>
            <br/>
            <p><b>Banking and Superannuation Details</b></p>
            <div class="row"> 
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Bank</label>
                        <input class="form-control" type="text" placeholder="CHANGE"/>
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
                        <input class="form-control" type="text" placeholder="Bank Account Number"/>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>FNPF Number</label>
                        <input class="form-control" type="text" placeholder="FNPF Number"/>
                    </div>
                </div>            
            </div>



            <button type="button" class="btn btn-success">Register</button> 
            </form>
        </div>
    </div>
</div>
            
							
@endsection