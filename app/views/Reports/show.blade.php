@extends('theme.theme1.sidebar-right')
<script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
var myCenter=new google.maps.LatLng({{$report->location->latitude}},{{$report->location->longitude}});

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:5,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
@section('report-title')
<B>Victim:</B> {{$report->victim->name}} <B>Crime</B> {{$report->crime->name}}
@stop


@section('report-body')
{{$report->body}}

@stop

@section('map-title')
{{$report->location->address}}
@stop

@section('map')
<div id="googleMap" style="width:100% px;height:380px;"></div>
@stop