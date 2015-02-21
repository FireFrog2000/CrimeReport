<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css"> -->
	<title>Right Sidebar template - Progressus Bootstrap template</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
@include('theme.theme1.css-layout')

	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html"><img src="{{URL::asset('assets/images/logo.png')}}" alt="Progressus HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="sidebar-left.html">Left Sidebar</a></li>
							<li class="active"><a href="sidebar-right.html">Right Sidebar</a></li>
						</ul>
					</li>
					<li><a href="contact.html">Contact</a></li>
					<li><a class="btn" href="signin.html">SIGN IN / SIGN UP</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li class="active">Right Sidebar</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-md-6 text-justify maincontent">
				<header class="page-header">
					<h1 class="page-title">@yield('report-title')</h1>
				</header>
				<p>@yield('report-body')</p>

				<h2>&nbsp;</h2>
</article>
			<!-- /Article -->
			
			<!-- Sidebar -->
			<aside class="col-md-6 sidebar sidebar-right">


				<div class="row widget">
					<div class="col-xs-12 text-center">
						<h4>&nbsp;</h4>
						<p>@yield('map-title')&nbsp;</p>
						<p>@yield('map')&nbsp;</p>
					</div>
				</div>


			</aside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->
	
@include('theme.theme1.footer-layout')
@include('theme.theme1.js-layout')
</body>
</html>