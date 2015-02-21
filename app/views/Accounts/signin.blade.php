@extends('theme.theme2.layout')


@section('page-title')
Sign In
@stop


@section('report-title')
Sign In
@stop

@section('form-title-path')
Sign In
@stop

@section('form-description-title')
Sign In Your Account !!!
@stop

@section('content')
        <form method="post" action="{{URL::route('user.signin.post')}}">
                <div class="top-margin">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email"  {{Input::old('email') ? 'value="' . e(Input::old('email')) . '"' : '' }}>
                    <B class="text-warning">{{$errors->first('email')}} </B>

                </div>

                 <div class="top-margin">
                    <label>Password</label>
                    <input type="text" class="form-control" name="password">
                         <B class="text-warning">{{$errors->first('password')}} </B>
                </div>

                 <div class="row top-margin">

                    <div class="col-lg-12 text-right">
                                <button class="btn btn-action" type="submit">Login</button>
                    </div>
                </div>
        </form>

@stop


