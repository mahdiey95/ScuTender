<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Business clean web templates</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<link id="callCss" rel="stylesheet" href="./resources/assets/themes/current/bootstrap.min.css" type="text/css" media="screen"/>
	<link href="./resources/assets/themes/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
	<link href="./resources/assets/themes/css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="./resources/assets/themes/css/base.css" rel="stylesheet" type="text/css">
	<link href="./resources/assets/themes/css/default_header.css" rel="stylesheet" type="text/css">
	{{--<link href="./resources/assets/themes/css/forms.css" rel="stylesheet" type="text/css">--}}
	<style type="text/css" id="enject"></style>
</head>
<body>
<div id="logoSection" >
	<div class="container">
		<div class="division ">
			<img src=".\resources\assets\themes\images\logo\Iranian-flag.jpg" class="flagIR">
		</div>
		<div class="division">
			<img class="logo" src=".\resources\assets\themes\images\logo\logo.png" >
		</div>
	</div>
</div>
<section id="headerSection">
	<div class="container">
		<div class="navbar">
			<div class="container">
				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<h1><a class="brand" href="indexx.blade.php"> دانشگاه شهید چمران اهواز <small>  سامانه مناقصات</small></a></h1>

				<div class="nav-collapse collapse">

					<ul class="nav pull-right">

						@if(Auth::check())
							<form id="logout" action="{{route('logout')}}" method="post" >
								{{csrf_field()}}
							</form>

							<li class="">
								<a href="javascript:{}" onclick="document.getElementById('logout').submit()">خروج</a>
							</li>
							@if(Auth::user()->role == 'CONTRACTOR' )
								<li class=""><a href="{{route('contractor.help')}}">راهنما</a> </li>
							@endif
							@if(Auth::user()->role == 'ADMIN' || Auth::user()->role == 'EXPERT')
								<li class=""><a href="{{route('admin.help')}}">راهنما</a></li>
								<li class=""><a href="{{route('tender.create')}}">مناقصه جدید</a></li>
								<li class=""><a href="{{route('contractor.index')}}">شرکت ها</a></li>
							@endif

							@if(Auth::user()->role == 'SYSADMIN')
								<li class=""><a href="{{route('admin.create')}}">کاربر جدید</a></li>
							@endif
						@else
							<li class=""><a href="{{route('login')}}">ورود</a></li>
							<li class=""><a href="{{route('register')}}"> ثبت نام</a></li>
						@endif

						<li class=""><a href="{{route('news')}}">اخبار</a></li>
						<li class="active"><a href="{{route('contact')}}">تماس با ما</a></li>

						<li class=""><a href="{{route('tender.index')}}">خانه</a></li>

					</ul>

				</div>

			</div>
		</div>
	</div>
</section>
<!--Header Ends================================================ -->
{{--<section id="mapSection"> --}}
{{--<div id="myMap" style="height:400px">--}}
{{--<!-- please edit in (js code which is available in the foote section) longitude and longitude of your location  -->--}}
{{--</div>	--}}
{{--</section>--}}
<!-- Page banner -->
<!--
<section id="bannerSection" style="background:url(./resources/assets/themes/images/banner/contact.png) no-repeat center center #000;">
	<div class="container" >	
		<h1 id="pageTitle">Contact <small> :We love to hear from you</small> 
		<span class="pull-right toolTipgroup">
			<a href="#" data-placement="top" data-original-title="Find us on via facebook"><img style="width:45px" src="./resources/assets/themes/images/facebook.png" alt="facebook" title="facebook"></a>
			<a href="#" data-placement="top" data-original-title="Find us on via twitter"><img style="width:45px" src="./resources/assets/themes/images/twitter.png" alt="twitter" title="twitter"></a>
			<a href="#" data-placement="top" data-original-title="Find us on via youtube"><img style="width:45px" src="./resources/assets/themes/images/youtube.png" alt="youtube" title="youtube"></a>
		</span>
		</h1>
	</div>
</section> 
-->
<!-- Page banner end -->

<section id="bodySection"> 	
	<div class="container">					
	<div class="row">
			<div class="span4">
			<h3>  آدرس پستی </h3>
				اهواز,بلوار گلستان<br/>
				دانشگاه شهید چمران اهواز<br/><br/>
				Oisc@scu.ac.ir<br/>
				تلفن:33330011 الی 33330019<br/>
				نمابر: 2044 3333<br/>
			</div>

			<div class="span4">
				<h3>  با ما در تماس باشید</h3>
				<form class="form-horizontal">
				<fieldset>
				  <div class="control-group">
				   
					  <input type="text" placeholder="نام" class="input-xlarge"/>
				   
				  </div>
				   <div class="control-group">
				   
					  <input type="text" placeholder="ایمیل" class="input-xlarge"/>
				   
				  </div>
				   <div class="control-group">
				   
					  <input type="text" placeholder="موضوع" class="input-xlarge"/>
				  
				  </div>
				  <div class="control-group">
					  <textarea rows="4" id="textarea" class="input-xlarge"></textarea>
				   
				  </div>

					<button class="btn btn-large" type="submit"> <i class="icon-envelope"></i> ارسال پیام</button>

				</fieldset>
			  </form>
			</div>
		</div>

		</div>
</section>
 <!-- Footer
  ================================================== -->
<section id="footerSection">
	<div class="container">
		<footer class="footer well well-small">
			<div class="row-fluid">
				<div class="span3">
					<h4>ارتباط با ما</h4>
					<address style="margin-bottom:15px;">
						<strong>{{--<a href="indexx.blade.php" title="business">--}}<i class=" icon-home"></i> اهواز - بلوار گلستان- دانشگاه شهید چمران اهواز </strong><br>
					</address>

					<a href="contact.blade.php" title="services"><i class="icon-cogs"></i> ارتباط با ما </a><br/>

				</div>
			</div>
		</footer>
	</div><!-- /container -->
</section>
<a href="#" class="btn" style="position: fixed; bottom: 38px; right: 10px; display: none; " id="toTop"> <i class="icon-arrow-up"></i></a>
<!-- Javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	<script src="./resources/assets/themes/js/jquery-1.8.3.min.js"></script>
	<script src="./resources/assets/themes/js/bootstrap.min.js"></script>
	<script src="./resources/assets/themes/js/bootstrap-tooltip.js"></script>
    <script src="./resources/assets/themes/js/bootstrap-popover.js"></script>
	<script src="./resources/assets/themes/js/business_ltd_1.0.js"></script>
 
	 <!-- Google map jquery files -->
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="./resources/assets/themes/js/jquery.gmap.js"></script>
	<script>
		// Google map data ==============================================================================
	  $(document).ready(function(){
		$("#myMap").gMap({ controls: false,
						  scrollwheel: false,
			  draggable: true,
		  markers: [{ latitude: 37.748582,  		//your company location latitude 
					  longitude: -122.418411,		//your company location longitude
					  icon: { image: "http://www.google.com/mapfiles/marker.png",
							  iconsize: [42, 48],
							  iconanchor: [42,48],
							  infowindowanchor: [14, 0] } },
					],
		  icon: { image: "http://www.google.com/mapfiles/marker.png", 
				  iconsize: [28, 48],
				  iconanchor: [14, 48],
				  infowindowanchor: [14, 0] },
		  latitude: 37.748582,
		  longitude: -122.418411,
		  zoom: 16, });
	  });
	</script>
	


</body>
</html>