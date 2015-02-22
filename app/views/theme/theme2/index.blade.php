<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Crime Mapping</title>

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
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">HOME</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">WHY REPORT?</a>
                    </li>
                   
                   <li class="page-scroll">
                        <a href="#contact">FAQ</a>
                    </li>
                </ul>
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

                    <img src="{{URL::asset('assets/img/weblogo2.png')}}">
                    <div class="intro-text">
                        <span class="name"><a href="#"><img src="{{URL::asset('assets/img/sign_up.png')}}"></a></span>
                        
                  </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Why Report?</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 col-lg-offset-2">
                    <p>
Although reporting crime has many societal and individual benefits, it is common for criminal acts to 
remain unreported. Victims and witnesses have many reasons for not reporting a crime. Among these reasons, fear of repercussion, embarrassment or shame, believing the crime is too insignificant or a personal issue, believing that reporting will not make a difference, and being unable to reach an authority are often cited.</p>

<p>In the existing crime management system, most of the operations are done  manually like send complaints, taking actions against crimes, view status etc. So with the existing system if anybody wants to complaint against crimes he must do it through the police. If we are doing the system manually, so many minor errors will occur.
</p>
<p>The application developed is found to be working efficiently and effectively. It results in regular and timely action against crime reported. It can be observed that the information can be obtained easily and accurately. The project provides much security. The simplicity and friendliness are the advantages of this crime automation and reporting system project. The software is made user friendly to the maximum so that any lay man can run the software provided he could access to the system via the login password. It believes that partnership work is highly beneficial to the govermment, police department or for the law enforcement agencies and that partnership work is the way forward to reduce crime and disorder.</p>
                </div>
                
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#" class="btn btn-lg btn-outline">
                        <i class="fa fa-download"> Download From Android</i> 
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>FAQ</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    
                    <P>1) How to download the application?<br/>	
Click on the link below to: follow the instructions<br/>	

2) Plateform for running application?<br/>	
for andriod application need a smart phone with Andriod software.<br/>	

3) How to authenticate the account?<br/>	
Once sign up the user got authentication code enter the code in the text box. the system will send email after authentication. if authenticaiton fails then generates 

an error. <br/>	

4) How to change the status of the reports?<br/>	
The status of the report is changed by admin who is dealing with the report of the specific area. The processed button on the right side proceed to the form for</P>
                </div>
            </div>
        </div>
    </section>

@include('theme.theme2.footer-layout')

   @include('theme.theme2.js-layout')
    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>


    <!-- Contact Form JavaScript -->

    <script src="js/freelancer.js"></script>
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
