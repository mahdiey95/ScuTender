<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>سامانه مناقصات دانشگاه شهید چمران اهواز</title>
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
	<link href="./resources/assets/themes/css/tender_status.css" rel="stylesheet" type="text/css">

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
								@if(Auth::user()->role == 'ADMIN' || Auth::user()->role == 'EXPERT')
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
		<div class="container">
		@if(Auth::check()) <div> <label class="username" >کاربر:{{Auth::user()->name}}</label></div> @endif
		</div>
		<div class="container">
		<div class="row">
			<div class="span9">
			<form class="well form-inline" style="direction: rtl" action="{{route('tender.search')}}" method="post">
				{{csrf_field()}}
				<label for="search_name">جستو جو بر اساس عنوان</label>
			    <input type="text" name="search_name" id="search_name" class="span2" placeholder="مثال:تعمیر ساختمان">
				<label for="search_field">زمینه کاری</label>
			  	<select name="search_field" id="search_field" class="span2">
					<option value="">همه زمینه ها</option>
					<option value="CONSTRUCTION">عمرانی</option>
					<option value="COMPUTER">کامپیوتر</option>
				</select>
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

									@if(count($tenders) == 0)
									<h3>هیچ مناقصه ای یافت نشد</h3>
									@endif

									@foreach($tenders as $tender)
                                    <li class="span3">
                                        <div class="tenders thumbnail">
                                            <div class="blockDtl">
                                                <h4 class="
														@if($tender->status == '1')
															tender_ongoing
														@elseif($tender->status == '2')
															tender_new
														@elseif($tender->status == '3')
															tender_deciding
														@elseif($tender->status == '4')
															tender_done
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
                            برای شرکت در مناقصات و مشاهده ی کامل مناقصات ابتدا باید در سایت ثبت نام کنید.
							در این سایت :
							<p class="tender_new">
							مناقصات جدید به رنگ آبی
							</p>
							<p class="tender_ongoing">
							مناقصات در حال برگزاری به رنگ سبز
							</p>
							<p class="tender_deciding">
							مناقصات در انتظار اعلام نتیجه به رنگ زرد
							</p>
							<p class="tender_done">
							و مناقصات به پایان رسیده با رنگ قرمز
							</p>
							مشخص شده اند.با تشکر
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
	<script src="./resources/assets/themes/js/jquery-1.8.3.min.js"></script>
	<script src="./resources/assets/themes/js/bootstrap.min.js"></script>
	<script src="./resources/assets/themes/js/bootstrap-tooltip.js"></script>
    <script src="./resources/assets/themes/js/bootstrap-popover.js"></script>
	<script src="./resources/assets/themes/js/business_ltd_1.0.js"></script>

{{--<span id="themesBtn"></span>--}}
</body>
</html>