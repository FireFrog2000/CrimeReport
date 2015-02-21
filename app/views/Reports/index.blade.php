@extends('theme.theme1.reports')

@section('content')
<?php $i=1; ?>
@foreach($reports as $report)

      <a href="{{URL::route('report.show',$report->id)}}" class="list-group-item"> {{$i}}) <B>Victim:</B> {{$report->victim->name}} <B>Crime</B> {{$report->crime->name}} <B>Time: </B> {{$report->crime->created_at}}</a>
          <?php $i++; ?>
@endforeach

@stop
