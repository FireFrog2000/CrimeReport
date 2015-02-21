@extends('theme.theme2.layout')

@section('page-title')
Sign Up
@stop


@section('report-title')
Sign UP
@stop

@section('form-title-path')
Sign UP
@stop

@section('form-description-title')
Sign Up Your Account!!!
@stop

@section('content')
	<form method="post" action="{{URL::route('user.signup.post')}}">
								<div class="top-margin">
									<label>First Name</label>
									<input type="text" class="form-control" name="firstname" {{Input::old('firstname') ? 'value="' . e(Input::old('firstname')) . '"' : '' }}>
                                   <B class="text-warning">{{$errors->first('firstname')}} </B>
								</div>
								<div class="top-margin">
									<label>Last Name</label>
									<input type="text" class="form-control" name="lastname" {{Input::old('lastname') ? 'value="' . e(Input::old('lastname')) . '"' : '' }}>
									 <B class="text-warning"> {{$errors->first('lastname')}} </B>
								</div>
								<div class="top-margin">
                                    <label>CNIC</label>
                                    <input type="text" class="form-control" name="nic" {{Input::old('nic') ? 'value="' . e(Input::old('nic')) . '"' : '' }}>
                                       <B class="text-warning"> {{$errors->first('nic')}} </B>
                                </div>

                                <div class="top-margin">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" name="phone" {{Input::old('phone') ? 'value="' . e(Input::old('phone')) . '"' : '' }}>
                                       <B class="text-warning"> {{$errors->first('nic')}} </B>
                                </div>


								<div class="top-margin">
									<label>Email Address <span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="email" {{Input::old('email') ? 'value="' . e(Input::old('email')) . '"' : '' }}>
									   <B class="text-warning"> {{$errors->first('email')}}</B>
								</div>

								<div class="row top-margin">
									<div class="col-sm-6">
										<label>Password <span class="text-danger">*</span></label>
										<input type="text" class="form-control" name="password">
										    <B class="text-warning">{{$errors->first('password')}}</B>
									</div>
									<div class="col-sm-6">
										<label>Confirm Password <span class="text-danger">*</span></label>
										<input type="text" class="form-control" name="re-password">
										   <B class="text-warning"> {{$errors->first('re-password')}} </B>
									</div>
								</div>

								<hr>


								<div class="top-margin">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="address" {{Input::old('address') ? 'value="' . e(Input::old('address')) . '"' : '' }}>
                                     <B class="text-warning">{{$errors->first('address')}}</B>
                                </div>

                                <div class="row top-margin">
                                    <div class="col-sm-6">
                                        <label>City/State <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="city" {{Input::old('city') ? 'value="' . e(Input::old('city')) . '"' : '' }}>
                                           <B class="text-warning"> {{$errors->first('city')}}</B>
                                    </div>

                                    <div class="col-sm-6">
                                        <label>Country<span class="text-danger">*</span></label>
                                        <select name="country" class="form-control" {{Input::old('country') ? 'value="' . e(Input::old('country')) . '"' : '' }}>
                                                <option>Pakistan</option>
                                        </select>

                                           <B class="text-warning"> {{$errors->first('country')}} </B>
                                    </div>
                                </div>
                            <div class="row top-margin">

                           		<div class="col-lg-12 text-right">
                                			<button class="btn btn-action" type="submit">Register</button>
                           		</div>
                            </div>
						</form>

@stop