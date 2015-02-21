@extends('theme.theme2.layout')


@section('page-title')
Activation
@stop


@section('report-title')
Activate
@stop

@section('form-title-path')
Activate
@stop

@section('form-description-title')
Acivate Your Account!!!
@stop

@section('content')
        <form method="post" action="{{URL::route('user.activate.post')}}">
                <div class="top-margin">
                    <label>Code</label>
                    <input type="text" class="form-control" name="code">

                </div>

                 <div class="row top-margin">

                    <div class="col-lg-12 text-right">
                                <button class="btn btn-action" type="submit">Activate</button>
                    </div>
                </div>
        </form>

@stop


