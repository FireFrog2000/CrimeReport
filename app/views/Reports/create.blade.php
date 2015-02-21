@extends('theme.theme1.form-layout')


@section('page-title')
Report Submission
@stop


@section('report-title')
Report
@stop

@section('form-title-path')
Report
@stop

@section('form-description-title')
Send a Report
@stop

@section('content')


        <div class="row">
          <div class="col-lg-12">
            <form action="" class="form-horizontal">
              <div class="form-group">
                <label for="crime-type" class="col-lg-2 control-label">Crime Type</label>
                <div class="col-lg-10">
                  <select name="crime-type" >
                        @foreach($crimes as $crime )
                                <option value="{{$crime->id}}">{{$crime->name}}</option>
                        @endforeach
                  </select>
                </div>
              </div><!-- End form group -->


              <div class="form-group">
                <label for="crime-body" class="col-lg-2 control-label">Report Description</label>
                <div class="col-lg-10">
                <textarea extarea name="crime-body" class="form-control"  cols="20" rows="10" placeholder="Enter your Message"></textarea>
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div><!-- End the row -->


@stop