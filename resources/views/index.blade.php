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
<div id="logoSection">
	<div class="headerimg">
	<img src=".\resources\assets\themes\images\logo\Iranian-flag.jpg" class="flagIR">
	</div>
	<div class="headerimg">
	<img class="logo" src=".\resources\assets\themes\images\logo\logo.png" >
	</div>
</div>

	{{--<section id="bannerSection" style="background:url(./resources/assets/themes/images/banner/portfolio.png) no-repeat center center #000;">--}}
		{{--<div class="container" >--}}
			{{--<h1 id="pageTitle">سامانه مناقصات  <small> دانشگاه شهید چمران اهواز</small>--}}
				{{--<span class="pull-right toolTipgroup">--}}
			{{--<a href="#" data-placement="top" data-original-title="Find us on via facebook"><img style="width:45px" src="./resources/assets/themes/images/facebook.png" alt="facebook" title="facebook"></a>--}}
			{{--<a href="#" data-placement="top" data-original-title="Find us on via twitter"><img style="width:45px" src="./resources/assets/themes/images/twitter.png" alt="twitter" title="twitter"></a>--}}
			{{--<a href="#" data-placement="top" data-original-title="Find us on via youtube"><img style="width:45px" src="./resources/assets/themes/images/youtube.png" alt="youtube" title="youtube"></a>--}}
		{{--</span>--}}
			{{--</h1>--}}
		{{--</div>--}}
	{{--</section--}}


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
								@if(Auth::user()->role == 'ADMIN')
									<li class=""><a href="{{route('tender.create')}}">مناقصه جدید</a></li>
								@endif
							@else
								<li class=""><a href="{{route('login')}}">ورود</a></li>
								<li class=""><a href="{{route('register')}}"> ثبت نام</a></li>
							@endif

							<li class=""><a href="{{route('news')}}">اخبار</a></li>
							<li class=""><a href="{{route('contact')}}">تماس با ما</a></li>

							<li class="active"><a href="{{route('tender.index')}}">خانه</a></li>

						</ul>

					</div>

				</div>
			</div>
		</div>
	</section>
<!--Header Ends================================================ -->
<section id="bodySection">
	<div id="sectionTwo">
		@if(Auth::check()) <div> <label class="username" >کاربر:{{Auth::user()->name}}</label></div> @endif
		<div class="container">
		<div class="row">
			<div class="span9">
			<form class="well form-inline">
			  جستو جو بر اساس عنوان <input type="text" class="span2" placeholder="مثال:تعمیر ساختمان">
			  زمینه کاری<select class="span2"><option>همه زمینه ها</option><option>عمرانی</option><option>Popular</option><option>Coming Soon</option></select>
			  <button type="submit" class="btn btn-warning">جست و جو</button>
			</form>
			<div class="row">
			<div class="span9">
				<ul class="nav nav-pills pull-left">
				<li class="active"><a href="#all" data-toggle="tab">همه</a></li>
				<li class=""><a href="#new" data-toggle="tab">جدید</a></li>
				<li class=""><a href="#popular" data-toggle="tab">در حال برگزاری</a></li>
				<li class=""><a href="#comingsoon" data-toggle="tab">به پایان رسیده</a></li>
				</ul>
			</div>
                <div class="span9">
                    <div class="tabbable tabs">
                        <div class="tab-content label-primary">
                            <div class="tab-pane active" id="all">
                                <ul class="thumbnails">

									@foreach($tenders as $tender)
                                    <li class="span3">
                                        <div class="tenders thumbnail">
                                            <div class="blockDtl">
                                                <h4 style="background:
														@if($tender->status == '1')
															#5eff5a
														@endif
														@if($tender->status == '3')
															#ff5054
														@endif
														@if($tender->status == '2')
															#688aff
														@endif">{{$tender->name}}</h4>
                                                <a href="./tender/{{$tender->id}}"><img class="imgicon" src="./resources/assets/themes/images/fields/{{$tender->field}}.png" alt="bootstrap business templates"/></a>
                                                <input class="tendersdescrib" value="{{$tender->description}}" readonly />
                                            </div>
                                        </div>
                                    </li>
									@endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="span3">
                <ul class="media-list">
                    <li class="media well well-small">
                        <h4>راهنما </h4>
                        <p style="direction:rtl">
                            به سامانه مناقصات دانشگاه شهید چمران اهواز خوش آمدید.
                            برای شرکت در مناقصات و مشاهده ی کامل مناقصات ابتدا باید در سایت ثبت نام کنید.در این سایت مناقصات جدید به رنگ آبی مناقصات در حال برگزاری به رنگ سبز و مناقصات به پایان رسیده با رنگ قرمز مشخص شده اند.با تشکر
                        </p>
                    </li>
                </ul>
            </div>
            {{--<section id="tenders">--}}
                {{--<div class="tenders">--}}


                {{--</div>--}}
            {{--</section>--}}
        </div>
        </div>
    </div>

</section>


			<!-- ========================= -->

					{{--<li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/9.jpg" alt="bootstrap business templates"></a>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--<div class="btn-toolbar">--}}
							   {{--<div class="btn-group toolTipgroup">--}}
								{{--<a class="btn" href="#" data-placement="right" data-original-title="send email"><i class="icon-envelope"></i></a>--}}
								{{--<a class="btn" href="#" data-placement="top" data-original-title="do you like?"><i class="icon-thumbs-up"></i></a>--}}
								{{--<a class="btn" href="#" data-placement="top" data-original-title="dont like?"><i class="icon-thumbs-down"></i></a>--}}
								{{--<a class="btn" href="#" data-placement="top" data-original-title="share"><i class="icon-link"></i></a>--}}
								{{--<a class="btn" href="#" data-placement="left" data-original-title="browse"><i class="icon-globe"></i></a>--}}
							  {{--</div>--}}
							{{--</div>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li>--}}
					{{--<li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/3.jpg" alt="bootstrap business templates"></a>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--<div class="btn-toolbar">--}}
							   {{--<div class="btn-group toolTipgroup">--}}
								{{--<a class="btn" href="#" data-placement="right" data-original-title="send email"><i class="icon-envelope"></i></a>--}}
								{{--<a class="btn" href="#" data-placement="top" data-original-title="do you like?"><i class="icon-thumbs-up"></i></a>--}}
								{{--<a class="btn" href="#" data-placement="top" data-original-title="dont like?"><i class="icon-thumbs-down"></i></a>--}}
								{{--<a class="btn" href="#" data-placement="top" data-original-title="share"><i class="icon-link"></i></a>--}}
								{{--<a class="btn" href="#" data-placement="left" data-original-title="browse"><i class="icon-globe"></i></a>--}}
							  {{--</div>--}}
							{{--</div>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li>--}}
					{{--<li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<a href="comingsoon.blade.php"><img src="./resources/assets/themes/images/portfolio/4.jpg" alt="bootstrap business templates"></a>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--<div class="btn-toolbar">--}}
							   {{--<div class="btn-group toolTipgroup">--}}
								{{--<a class="btn" href="#" data-placement="right" data-original-title="send email"><i class="icon-envelope"></i></a>--}}
								{{--<a class="btn" href="#" data-placement="top" data-original-title="do you like?"><i class="icon-thumbs-up"></i></a>--}}
								{{--<a class="btn" href="#" data-placement="top" data-original-title="dont like?"><i class="icon-thumbs-down"></i></a>--}}
								{{--<a class="btn" href="#" data-placement="top" data-original-title="share"><i class="icon-link"></i></a>--}}
								{{--<a href="comingsoon.blade.php" class="btn" data-placement="left" data-original-title="browse"><i class="icon-globe"></i></a>--}}
							  {{--</div>--}}
							{{--</div>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li><li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<a href="comingsoon.blade.php"><img src="./resources/assets/themes/images/portfolio/5.jpg" alt="bootstrap business templates"></a>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--<div class="btn-toolbar">--}}
							   {{--<div class="btn-group toolTipgroup">--}}
								{{--<a class="btn" href="#" data-placement="right" data-original-title="send email"><i class="icon-envelope"></i></a>--}}
								{{--<a class="btn" href="#" data-placement="top" data-original-title="do you like?"><i class="icon-thumbs-up"></i></a>--}}
								{{--<a class="btn" href="#" data-placement="top" data-original-title="dont like?"><i class="icon-thumbs-down"></i></a>--}}
								{{--<a class="btn" href="#" data-placement="top" data-original-title="share"><i class="icon-link"></i></a>--}}
								{{--<a href="comingsoon.blade.php" class="btn" data-placement="left" data-original-title="browse"><i class="icon-globe"></i></a>--}}
							  {{--</div>--}}
							{{--</div>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li>--}}
					{{--<li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<a href="http://mywebsolution.info" target="_blank" ><img src="./resources/assets/themes/images/portfolio/6.jpg" alt="bootstrap business templates"/></a>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--<div class="btn-toolbar">--}}
							   {{--<div class="btn-group toolTipgroup">--}}
								{{--<a class="btn" href="mailto:developer.sba@gmail.com" data-placement="right" data-original-title="send email"><i class="icon-envelope"></i></a>--}}
								{{--<a class="btn" href="#" data-placement="top" data-original-title="do you like?"><i class="icon-thumbs-up"></i></a>--}}
								{{--<a class="btn" href="#" data-placement="top" data-original-title="dont like?"><i class="icon-thumbs-down"></i></a>--}}
								{{--<a class="btn" href="#" data-placement="top" data-original-title="share"><i class="icon-link"></i></a>--}}
								{{--<a href="http://mywebsolution.info" target="_blank" class="btn" data-placement="left" data-original-title="browse"><i class="icon-globe"></i></a>--}}
							  {{--</div>--}}
							{{--</div>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li>--}}
					{{--<li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/7.jpg" alt="bootstrap business templates"></a>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li>--}}
					{{--<li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/8.jpg" alt="bootstrap business templates"></a>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li>--}}
					{{--<li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/9.jpg" alt="bootstrap business templates"></a>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li>--}}
					{{--<li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/10.jpg" alt="bootstrap business templates"></a>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li>--}}
					{{--<li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/11.jpg" alt="bootstrap business templates"></a>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li>--}}
					{{--<li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/2.jpg" alt="bootstrap business templates"></a>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li>--}}
				{{--</ul>--}}
				{{--<div class="pagination pull-right">--}}
				  {{--<ul>--}}
					{{--<li><a href="#">Prev</a></li>--}}
					{{--<li><a href="#">1</a></li>--}}
					{{--<li><a href="#">2</a></li>--}}
					{{--<li><a href="#">3</a></li>--}}
					{{--<li><a href="#">Next</a></li>--}}
				  {{--</ul>--}}
				{{--</div>--}}
				{{--</div>--}}
				{{--<div class="tab-pane" id="new">--}}
				{{--<ul class="thumbnails">--}}
				{{--<li class="span3">--}}
					{{--<div class="thumbnail">--}}
						{{--<div class="blockDtl">--}}
						{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/3.jpg" alt="bootstrap business templates"></a>--}}
						{{--<h4>My web solutions</h4>--}}
						{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
						{{--</div>--}}
					{{--</div>--}}
					{{--</li>--}}
					{{--<li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/1.jpg" alt="bootstrap business templates"></a>--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li>--}}
					{{--<li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/2.jpg" alt="bootstrap business templates"></a>--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li>--}}
					{{--<li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/3.jpg" alt="bootstrap business templates"></a>--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li><li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/3.jpg" alt="bootstrap business templates"></a>--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li><li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/3.jpg" alt="bootstrap business templates"></a>--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li>--}}
					{{--<li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/3.jpg" alt="bootstrap business templates"></a>--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li>--}}
					{{--<li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/3.jpg" alt="bootstrap business templates"></a>--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li>--}}
					{{--<li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/3.jpg" alt="bootstrap business templates"></a>--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li>--}}
					{{--<li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/3.jpg" alt="bootstrap business templates"></a>--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li>--}}
					{{--<li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/3.jpg" alt="bootstrap business templates"></a>--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li>--}}
					{{--<li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/3.jpg" alt="bootstrap business templates"></a>--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li>--}}
				{{--</ul>--}}

				{{--</div>--}}
				{{--<div class="tab-pane" id="popular">--}}
				{{--<ul class="thumbnails">--}}
				{{--<li class="span3">--}}
					{{--<div class="thumbnail">--}}
						{{--<div class="blockDtl">--}}
						{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/1.jpg" alt="bootstrap business templates"></a>--}}
						{{--<h4>My web solutions</h4>--}}
						{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
						{{--</div>--}}
					{{--</div>--}}
					{{--</li>--}}
					{{--<li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/3.jpg" alt="bootstrap business templates"></a>--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li>--}}
					{{--<li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/2.jpg" alt="bootstrap business templates"></a>--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li>--}}
					{{--<li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/3.jpg" alt="bootstrap business templates"></a>--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li><li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/2.jpg" alt="bootstrap business templates"></a>--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li><li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/1.jpg" alt="bootstrap business templates"></a>--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li>--}}
					{{--<li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/1.jpg" alt="bootstrap business templates"></a>--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li>--}}
					{{--<li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/1.jpg" alt="bootstrap business templates"></a>--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li>--}}
					{{--<li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/1.jpg" alt="bootstrap business templates"></a>--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li>--}}
					{{--<li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/1.jpg" alt="bootstrap business templates"></a>--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li>--}}
					{{--<li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/1.jpg" alt="bootstrap business templates"></a>--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li>--}}
					{{--<li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/1.jpg" alt="bootstrap business templates"></a>--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li>--}}
				{{--</ul>--}}


				{{--</div>--}}
				 {{--<div class="tab-pane" id="comingsoon">--}}
				{{--<ul class="thumbnails">--}}
				{{--<li class="span3">--}}
					{{--<div class="thumbnail">--}}
						{{--<div class="blockDtl">--}}
						{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/3.jpg" alt="bootstrap business templates"></a>--}}
						{{--<h4>My web solutions</h4>--}}
						{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
						{{--</div>--}}
					{{--</div>--}}
					{{--</li>--}}
					{{--<li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/3.jpg" alt="bootstrap business templates"></a>--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li>--}}
					{{--<li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/3.jpg" alt="bootstrap business templates"></a>--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li>--}}
					{{--<li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/3.jpg" alt="bootstrap business templates"></a>--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li><li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/4.jpg" alt="bootstrap business templates"></a>--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li><li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/1.jpg" alt="bootstrap business templates"></a>--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li>--}}
					{{--<li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/1.jpg" alt="bootstrap business templates"></a>--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li>--}}
					{{--<li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/1.jpg" alt="bootstrap business templates"></a>--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li>--}}
					{{--<li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/1.jpg" alt="bootstrap business templates"></a>--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li>--}}
					{{--<li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/1.jpg" alt="bootstrap business templates"></a>--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li>--}}
					{{--<li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/1.jpg" alt="bootstrap business templates"></a>--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li>--}}
					{{--<li class="span3">--}}
						{{--<div class="thumbnail">--}}
							{{--<div class="blockDtl">--}}
							{{--<a href="#"><img src="./resources/assets/themes/images/portfolio/1.jpg" alt="bootstrap business templates"></a>--}}
							{{--<h4>My web solutions</h4>--}}
							{{--<p>Our aim is simple - to provide affordable web design and development services for different devices. </p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</li>--}}
				{{--</ul>--}}


				{{--</div>--}}
			{{--</div>--}}
			{{--</div> <!-- /tabbable -->--}}


			{{--</div>--}}
			{{--</div>--}}
			<!-- ========================= -->


					  {{--<li>--}}
					  {{--<h4>Testiomonials</h4>--}}
					  {{--</li>--}}
					   {{--<li class="media well well-small">--}}
							{{--<a class="pull-left" href="#">--}}
							  {{--<img class="media-object" src="./resources/assets/themes/images/img64x64.png" alt="bootstrap business template"/>--}}
							{{--</a>--}}
							{{--<div class="media-body">--}}
							  {{--Cras sit amet nibh libero metus--}}
							  {{--Cras sit amet nibh ...<small> November 15 2012</small><a class="pull-right" href="#"><strong>Kim</strong></a>--}}
							{{--</div>--}}
					  {{--</li>--}}
					   {{--<li class="media well well-small">--}}
							{{--<a class="pull-left" href="#">--}}
							  {{--<img class="media-object" src="./resources/assets/themes/images/img64x64.png" alt="bootstrap business template"/>--}}
							{{--</a>--}}
							{{--<div class="media-body">--}}
							  {{--Cras sit amet nibh libero metus--}}
							  {{--Cras sit amet nibh ...<small> November 15 2012</small><a class="pull-right" href="#"><strong>Kim</strong></a>--}}
							{{--</div>--}}
					  {{--</li>--}}
					   {{--<li class="media well well-small">--}}
							{{--<a class="pull-left" href="#">--}}
							  {{--<img class="media-object" src="./resources/assets/themes/images/img64x64.png" alt="bootstrap business template"/>--}}
							{{--</a>--}}
							{{--<div class="media-body">--}}
							  {{--Cras sit amet nibh libero metus--}}
							  {{--Cras sit amet nibh ...<small> November 15 2012</small><a class="pull-right" href="#"><strong>Kim</strong></a>--}}
							{{--</div>--}}
					  {{--</li>--}}
					   {{--<li class="media well well-small">--}}
							{{--<a class="pull-left" href="#">--}}
							  {{--<img class="media-object" src="./resources/assets/themes/images/img64x64.png" alt="bootstrap business template"/>--}}
							{{--</a>--}}
							{{--<div class="media-body">--}}
							  {{--Cras sit amet nibh libero metus--}}
							  {{--Cras sit amet nibh ...<small> November 15 2012</small><a class="pull-right" href="#"><strong>Kim</strong></a>--}}
							{{--</div>--}}
					  {{--</li>--}}
					   {{--<li class="media well well-small">--}}
							{{--<a class="pull-left" href="#">--}}
							  {{--<img class="media-object" src="./resources/assets/themes/images/img64x64.png" alt="bootstrap business template"/>--}}
							{{--</a>--}}
							{{--<div class="media-body">--}}
							  {{--Cras sit amet nibh libero metus--}}
							  {{--Cras sit amet nibh ...<small> November 15 2012</small><a class="pull-right" href="#"><strong>Kim</strong></a>--}}
							{{--</div>--}}
					  {{--</li>--}}
					   {{--<li class="media well well-small">--}}
							{{--<a class="pull-left" href="#">--}}
							  {{--<img class="media-object" src="./resources/assets/themes/images/img64x64.png" alt="bootstrap business template"/>--}}
							{{--</a>--}}
							{{--<div class="media-body">--}}
							  {{--Cras sit amet nibh libero metus--}}
							  {{--Cras sit amet nibh ...<small> November 15 2012</small><a class="pull-right" href="#"><strong>Kim</strong></a>--}}
							{{--</div>--}}
					  {{--</li>--}}
					{{--</ul>--}}
		{{--</div>--}}

			{{--</div>--}}

			{{--</div>--}}

	{{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
 <!-- Footer
  ================================================== -->
<section id="footerSection">
<div class="container">
    <footer class="footer well well-small">
	<div class="row-fluid">
	{{--<div class="span4">--}}
			{{--<h4>Newsletter and Subscription</h4>--}}
			{{--<h5>Our aim</h5>--}}
			{{--<em>--}}
			{{--"To provide affordable web design and development services for different devices is our aim,--}}
			{{--that fully meet your requirements." <br/><br/>--}}
			{{--</em>--}}
			{{--<h5>What our client say?</h5>--}}
			{{--<em>--}}
			{{--" I can confirm, bougth the theme a couple of days afo and it is really fantastic. Very flexible, very good support. I really like it."--}}
			{{--</em>--}}
			{{--<br/><br/>--}}
			{{--<h5>Subscription</h5>--}}
			{{--<form>--}}
			{{--<div class="input-append">--}}
			  {{--<input id="appendedInputButton"  placeholder="Enter your e-mail" type="text">--}}
			  {{--<button class="btn btn-warning" type="button">send </button>--}}
			{{--</div>--}}
			{{--</form>--}}
		{{--</div>--}}
		{{--<div class="span5">--}}
		{{--<h4>Latest news</h4>--}}
		{{--<ul class="media-list">--}}
		  {{--<li class="media">--}}
			{{--<a class="pull-left" href="blog_details.blade.php">--}}
			  {{--<img class="media-object" src="./resources/assets/themes/images/img64x64.png" alt="bootstrap business template">--}}
			{{--</a>--}}
			{{--<div class="media-body">--}}
			  {{--<h5 class="media-heading">Why our customers satisfied?</h5>--}}
			  {{--"To provide affordable web design and..."<br/>--}}
			  {{--<small><em>November 14, 2012</em> <a href="blog_details.blade.php"> More</a></small>--}}
			{{--</div>--}}
		  {{--</li>--}}
		   {{--<li class="media">--}}
			{{--<a class="pull-left" href="blog_details.blade.php">--}}
			  {{--<img class="media-object" src="./resources/assets/themes/images/img64x64.png" alt="bootstrap business template">--}}
			{{--</a>--}}
			{{--<div class="media-body">--}}
			  {{--<h5 class="media-heading">Why our customers satisfied?</h5>--}}
			  {{--"To provide affordable web design and..."<br/>--}}
			  {{--<small><em>November 14, 2012</em> <a href="blog_details.blade.php"> More</a></small>--}}
			{{--</div>--}}
		  {{--</li>--}}
		   {{--<li class="media">--}}
			{{--<a class="pull-left" href="blog_details.blade.php">--}}
			  {{--<img class="media-object" src="./resources/assets/themes/images/img64x64.png" alt="bootstrap business template">--}}
			{{--</a>--}}
			{{--<div class="media-body">--}}
			  {{--<h5 class="media-heading">Why our customers satisfied?</h5>--}}
			  {{--"To provide affordable web design and..."<br/>--}}
			  {{--<small><em>November 14, 2012</em> <a href="blog_details.blade.php"> More</a></small>--}}
			{{--</div>--}}
		  {{--</li>--}}
		   {{--<li class="media">--}}
			{{--<a class="pull-left" href="blog_details.blade.php">--}}
			  {{--<img class="media-object" src="./resources/assets/themes/images/img64x64.png" alt="bootstrap business template">--}}
			{{--</a>--}}
			{{--<div class="media-body">--}}
			  {{--<h5 class="media-heading">Why our customers satisfied?</h5>--}}
			  {{--"To provide affordable web design and..."<br/>--}}
			  {{--<small><em>November 14, 2012</em> <a href="blog_details.blade.php"> More</a></small>--}}
			{{--</div>--}}
		  {{--</li>--}}
		{{--</ul>--}}
		{{--</div>--}}

	<div class="span3">
			<h4>ارتباط با ما</h4>
			<address style="margin-bottom:15px;">
			<strong><a href="indexx.blade.php" title="business"><i class=" icon-home"></i> اهواز - بلوار گلستان- دانشگاه شهید چمران اهواز </a></strong><br>
			</address>
			{{--Phone: <i class="icon-phone-sign"></i> &nbsp; 00123 456 000 789 <br>--}}
			{{--Email: <a href="contact.blade.php" title="contact"><i class="icon-envelope-alt"></i> info@companyltd.com</a><br/>--}}
			{{--Link: <a href="indexx.blade.php" title="Business ltd"><i class="icon-globe"></i> www.businessltd.com</a><br/><br/>--}}
			{{--<h5>Quick Links</h5>--}}
			<a href="contact.blade.php" title="services"><i class="icon-cogs"></i> ارتباط با ما </a><br/>
			{{--<a href="about.html" title=""><i class="icon-info-sign"></i> About us </a><br/>--}}
			{{--<a href="index.blade.php" title="portfolio"><i class="icon-question-sign"></i> Portfolio </a><br/>--}}

	{{--<h5>Find us on</h5>--}}
	{{--<div style="font-size:2.5em;">--}}
		{{--<a href="indexx.blade.php" title="" style="display:inline-block; width:1em"> <i class="icon-facebook-sign"> </i> </a>--}}
		{{--<a href="index.blade.php" title="" style="display:inline-block; width:1em"> <i class="icon-twitter-sign"> </i> </a>--}}
		{{--<a href="services.blade.php" title="" style="display:inline-block;width:1em"> <i class="icon-facetime-video"> </i> </a>--}}
		{{--<a href="services.blade.php" title="" style="display:inline-block;width:1em"> <i class="icon-google-plus-sign"> </i> </a>--}}
		{{--<a href="about.html" title="" style="display:inline-block;width:1em" > <i class="icon-rss"> </i> </a>--}}
	{{--</div>--}}
	</div>
    </div>
	{{--<p style="padding:18px 0 44px">&copy; 2018, allright reserved </p>--}}
	</footer>
    </div><!-- /container -->
</section>

<a href="#" class="btn" style="position: fixed; bottom: 38px; right: 10px; display: none; " id="toTop"> <i class="icon-arrow-up"></i></a>
<!-- Javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
	<script src="./resources/assets/themes/js/jquery-1.8.3.min.js"></script>
	<script src="./resources/assets/themes/js/bootstrap.min.js"></script>
	<script src="./resources/assets/themes/js/bootstrap-tooltip.js"></script>
    <script src="./resources/assets/themes/js/bootstrap-popover.js"></script>
	<script src="./resources/assets/themes/js/business_ltd_1.0.js"></script>
<!-- Themes switcher section ============================================================================================= -->
<div id="secectionBox">
<link rel="stylesheet" href="./resources/assets/themes/switch/themeswitch.css" type="text/css" media="screen" />
<script src="./resources/assets/themes/switch/theamswitcher.js" type="text/javascript" charset="utf-8"></script>
	<div id="themeContainer">
	<div id="hideme" class="themeTitle">Style Selector</div>
	<div class="themeName">Oregional Skin</div>
	<div class="images style">
	<a href="./resources/assets/themes/css/#" name="current"><img src="./resources/assets/themes/switch/images/clr/current.png" alt="bootstrap business templates" class="active"></a>
	</div>
	<div class="themeName">Bootswatch Skins (11)</div>
	<div class="images style">
		<a href="./resources/assets/themes/css/#" name="amelia" title="Amelia"><img src="./resources/assets/themes/switch/images/clr/amelia.png" alt="bootstrap business templates"></a>
		<a href="./resources/assets/themes/css/#" name="spruce" title="Spruce"><img src="./resources/assets/themes/switch/images/clr/spruce.png" alt="bootstrap business templates" ></a>
		<a href="./resources/assets/themes/css/#" name="superhero" title="Superhero"><img src="./resources/assets/themes/switch/images/clr/superhero.png" alt="bootstrap business templates"></a>
		<a href="./resources/assets/themes/css/#" name="cyborg"><img src="./resources/assets/themes/switch/images/clr/cyborg.png" alt="bootstrap business templates"></a>
		<a href="./resources/assets/themes/css/#" name="cerulean"><img src="./resources/assets/themes/switch/images/clr/cerulean.png" alt="bootstrap business templates"></a>
		<a href="./resources/assets/themes/css/#" name="journal"><img src="./resources/assets/themes/switch/images/clr/journal.png" alt="bootstrap business templates"></a>
		<a href="./resources/assets/themes/css/#" name="readable"><img src="./resources/assets/themes/switch/images/clr/readable.png" alt="bootstrap business templates"></a>
		<a href="./resources/assets/themes/css/#" name="simplex"><img src="./resources/assets/themes/switch/images/clr/simplex.png" alt="bootstrap business templates"></a>
		<a href="./resources/assets/themes/css/#" name="slate"><img src="./resources/assets/themes/switch/images/clr/slate.png" alt="bootstrap business templates"></a>
		<a href="./resources/assets/themes/css/#" name="spacelab"><img src="./resources/assets/themes/switch/images/clr/spacelab.png" alt="bootstrap business templates"></a>
		<a href="./resources/assets/themes/css/#" name="united"><img src="./resources/assets/themes/switch/images/clr/united.png" alt="bootstrap business templates"></a>
		<p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples and you can build your own color scheme in the backend.</small></p>
	</div>
	<div class="themeName">Background Patterns </div>
	<div class="images patterns">
		<a href="./resources/assets/themes/css/#" name="pattern1"><img src="./resources/assets/themes/switch/images/pattern/pattern1.png" alt="bootstrap business templates" class="active"></a>
		<a href="./resources/assets/themes/css/#" name="pattern2"><img src="./resources/assets/themes/switch/images/pattern/pattern2.png" alt="bootstrap business templates"></a>
		<a href="./resources/assets/themes/css/#" name="pattern3"><img src="./resources/assets/themes/switch/images/pattern/pattern3.png" alt="bootstrap business templates"></a>
		<a href="./resources/assets/themes/css/#" name="pattern4"><img src="./resources/assets/themes/switch/images/pattern/pattern4.png" alt="bootstrap business templates"></a>
		<a href="./resources/assets/themes/css/#" name="pattern5"><img src="./resources/assets/themes/switch/images/pattern/pattern5.png" alt="bootstrap business templates"></a>
		<a href="./resources/assets/themes/css/#" name="pattern6"><img src="./resources/assets/themes/switch/images/pattern/pattern6.png" alt="bootstrap business templates"></a>
		<a href="./resources/assets/themes/css/#" name="pattern7"><img src="./resources/assets/themes/switch/images/pattern/pattern7.png" alt="bootstrap business templates"></a>
		<a href="./resources/assets/themes/css/#" name="pattern8"><img src="./resources/assets/themes/switch/images/pattern/pattern8.png" alt="bootstrap business templates"></a>
		<a href="./resources/assets/themes/css/#" name="pattern9"><img src="./resources/assets/themes/switch/images/pattern/pattern9.png" alt="bootstrap business templates"></a>
		<a href="./resources/assets/themes/css/#" name="pattern10"><img src="./resources/assets/themes/switch/images/pattern/pattern10.png" alt="bootstrap business templates"></a>
		
		<a href="./resources/assets/themes/css/#" name="pattern11"><img src="./resources/assets/themes/switch/images/pattern/pattern11.png" alt="bootstrap business templates"></a>
		<a href="./resources/assets/themes/css/#" name="pattern12"><img src="./resources/assets/themes/switch/images/pattern/pattern12.png" alt="bootstrap business templates"></a>
		<a href="./resources/assets/themes/css/#" name="pattern13"><img src="./resources/assets/themes/switch/images/pattern/pattern13.png" alt="bootstrap business templates"></a>
		<a href="./resources/assets/themes/css/#" name="pattern14"><img src="./resources/assets/themes/switch/images/pattern/pattern14.png" alt="bootstrap business templates"></a>
		<a href="./resources/assets/themes/css/#" name="pattern15"><img src="./resources/assets/themes/switch/images/pattern/pattern15.png" alt="bootstrap business templates"></a>
		
		<a href="./resources/assets/themes/css/#" name="pattern16"><img src="./resources/assets/themes/switch/images/pattern/pattern16.png" alt="bootstrap business templates"></a>
		<a href="./resources/assets/themes/css/#" name="pattern17"><img src="./resources/assets/themes/switch/images/pattern/pattern17.png" alt="bootstrap business templates"></a>
		<a href="./resources/assets/themes/css/#" name="pattern18"><img src="./resources/assets/themes/switch/images/pattern/pattern18.png" alt="bootstrap business templates"></a>
		<a href="./resources/assets/themes/css/#" name="pattern19"><img src="./resources/assets/themes/switch/images/pattern/pattern19.png" alt="bootstrap business templates"></a>
		<a href="./resources/assets/themes/css/#" name="pattern20"><img src="./resources/assets/themes/switch/images/pattern/pattern20.png" alt="bootstrap business templates"></a>
		 
	</div>
	</div>
</div>
{{--<span id="themesBtn"></span>--}}
</body>
</html>