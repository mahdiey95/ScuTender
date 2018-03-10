<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ایجاد مناقصه جدید</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link id="callCss" rel="stylesheet" href="../resources/assets/themes/current/bootstrap.min.css" type="text/css" media="screen"/>
    <link href="../resources/assets/themes/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
    {{--<link rel="stylesheet" href="../resources/assets/themes/css/bootstrap-theme.min.css" />--}}
    <link href="../resources/assets/themes/css/jquery.Bootstrap-PersianDateTimePicker.css" rel="stylesheet" type="text/css">
    <link href="../resources/assets/themes/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="../resources/assets/themes/css/base.css" rel="stylesheet" type="text/css">
    <link href="../resources/assets/themes/css/default_header.css" rel="stylesheet" type="text/css">
    <link href="../resources/assets/themes/css/forms.css" rel="stylesheet" type="text/css">
    <link href="../resources/assets/themes/css/taghvimpopup.css" rel="stylesheet" type="text/css">

    <style type="text/css" id="enject"></style>

</head>
<body>
<div id="logoSection" >
    <div class="container">
        <div class="division ">
            <img src="..\resources\assets\themes\images\logo\Iranian-flag.jpg" class="flagIR">
        </div>
        <div class="division">
            <img class="logo" src="..\resources\assets\themes\images\logo\logo.png" >
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
                                <li class="active"><a href="{{route('admin.help')}}">راهنما</a></li>
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

                            <li class=""><a href="{{route('tender.index')}}">خانه</a></li>

                    </ul>

                </div>

            </div>
        </div>
    </div>
</section>
{{--=================================--}}
<section id="bodySection">
    <div id="sectionTwo">
        <div class="container">
           <p>برای استفاده ازقابلیت های سامانه ابتدا باید با نام کاربری و رمز عبور خود به سیستم وارد شوید.
           پس از ورود با کلیک کردن روی هر یک از مناقصات می توانید جزییات مناقصه را همراه با لیست شرکت ها و پیشنهادات آن ها با جزییات را مشاهده کنید.<br>
           در صورت انتخاب هر یک از شرکت ها می توانید به لیست تمامی پیشنهادات آن شرکت از ابتدای ثبت نام در سیستم دسترسی داشته باشید.<br>
           در صورتی که یک مناقصه در مرحله در دست بررسی قرار داشته باشد کاربران مدیر می توانند شرکت منتخب را با انتخاب پذیرش پیشنهاد انتخاب کنند. برای انتخاب شرکت برتر باید تمامی مدیران رای موافق خود را اعلام کنند.
           <br> از طریق تب شرکت ها می توانید لیست شرکت های ثبت نام کرده در سامانه را مشاهده کنید<br>
           برای ایجاد مناقصه جدید با انتخاب تب مناقصه جدید می توانید توضیحات مناقصه را وارد کرده و تاریخ برگزاری را روی تقویم مشخص کنید.<br>
           ب تشکر<br>سامانه مناقصات دانشگاه شهید چمران اهواز</p>
        </div>
    </div>
</section>
{{--=================================--}}
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
<script src="../resources/assets/themes/js/jquery-3.1.0.min.js"></script>
<script src="../resources/assets/themes/js/bootstrap.min.js"></script>
{{--<script src="../resources/assets/themes/js/bootstrap-tooltip.js"></script>--}}
{{--<script src="../resources/assets/themes/js/bootstrap-popover.js"></script>--}}
<script src="../resources/assets/themes/js/business_ltd_1.0.js"></script>

<script src="../resources/assets/themes/js/MdBootstrapPersianDateTimePicker/jalaali.js" type="text/javascript"></script>
<script src="../resources/assets/themes/js/MdBootstrapPersianDateTimePicker/jquery.Bootstrap-PersianDateTimePicker.js" type="text/javascript"></script>

</body>
</html>