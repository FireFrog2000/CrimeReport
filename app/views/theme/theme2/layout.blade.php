<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('page-title')</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
@include('theme.theme2.css-layout')
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top"><img src="img/weblogo2.png"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                @include('theme.theme2.menu');
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header><div id="googlemaps"></div>
  <div class="container">
            <div class="row">
                <div class="col-lg-12">
<div class="container" style="background-color:#FFFFFF">
            <div class="row">
                <div class="col-lg-12 text-center" style="margin-top:-200px;">
                    <h2>@yield('form-description-title')</h2>
                   
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-default">
                     <p>@yield('content')</p>
                     </div>
                </div>
                <div class="col-lg-4">
                    <p></p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#" class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i> 
                    </a>
                </div>
            </div>
        </div>                    
                </div>
            </div>
        </div>
    </header>


    

   @include('theme.theme2.footer-layout')

   @include('theme.theme2.js-layout')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Include the Google Maps API library - required for embedding maps -->
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
     
    <script type="text/javascript">
     
    // The latitude and longitude of your business / place
    var position = [33.6667, 73.1667];
     
    function showGoogleMaps() {
     
    var latLng = new google.maps.LatLng(position[0], position[1]);
     
    var mapOptions = {
    zoom: 8, // initialize zoom level - the max value is 21
    streetViewControl: false, // hide the yellow Street View pegman
    scaleControl: true, // allow users to zoom the Google Map
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    center: latLng
    };
     
    map = new google.maps.Map(document.getElementById('googlemaps'),
    mapOptions);
     
    // Show the default red marker at the location
    marker = new google.maps.Marker({
    position: latLng,
    map: map,
    draggable: false,
    animation: google.maps.Animation.DROP
    });
    }
     
    google.maps.event.addDomListener(window, 'load', showGoogleMaps);
    </script>
</body>

</html>
