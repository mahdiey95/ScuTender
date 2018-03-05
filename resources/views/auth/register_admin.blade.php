<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ثبت نام در سامانه</title>
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
    <link href="./resources/assets/themes/css/forms.css" rel="stylesheet" type="text/css">
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
                            @if(Auth::user()->role == 'ADMIN')
                                <li class=""><a href="{{route('tender.create')}}">مناقصه جدید</a></li>
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
<!--Header Ends================================================ -->
<section id="bodySection">
    <div id="sectionTwo">
        <form method="post" action="{{route('admin.store')}}" style="border:1px solid #ccc">
            {{ csrf_field() }}
            <div class="signupcontainer well">

                @if (session('success'))
                    <div class="flash-message">
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                    </div>
                @endif

                @if (count($errors) != 0)
                    <span class="help-block">
                    <strong>خطا در ذخیره اطلاعات</strong>

                        @if($errors->has('username'))
                            @if(strpos($errors->first('username'),'taken'))
                                <br/>
                                <strong>نام کاربری از قبل وجود دارد</strong>
                            @endif
                        @endif

                        @if($errors->has('password'))
                            @if(strpos($errors->first('password'),'match'))
                                <br/>
                                <strong>رمز عبور های وارد شده یکسان نیستند</strong>
                            @endif
                        @endif


                </span>
                @endif

                <h1>فرم ثبت نام</h1>

                <hr>

                <label for="name"><b>نام و نام خانوادگی</b></label>
                <input type="text"  name="name" required>

                <label for="title"><b>سمت</b></label>
                <input type="text" name="title" required>

                <label for="role"><b>دسترسی سیستم</b></label>
                <select name="role" class=" tableinput">
                    <option value="ADMIN">مدیریت</option>
                    <option value="EXPERT">کارشناس</option>
                </select>

                <label for="username"><b>نام کاربری</b></label>
                <input type="text" placeholder="نام کاربری را وارد کنید" name="username" required>

                <label for="password"><b>رمز عبور</b></label>
                <input type="password" placeholder="رمز عبور خود را وارد کنید" name="password" required>

                <label for="password_confirmation"><b>تکرار رمز عبور</b></label>
                <input type="password" placeholder="رمز عبور خود را مجددا وارد کنید" name="password_confirmation" required>


                {{--<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>--}}

                <div class="clearfix">
                    {{--<button type="button" class="cancelbtn">Cancel</button>--}}
                    <button type="submit" class="signupbtn">ثبت نام</button>
                </div>


            </div>
        </form>

    </div>

</section>


<!-- ========================= -->

<!-- Footer
  ================================================== -->
<section id="footerSection">
    <div class="container">
        <footer class="footer well well-small">
            <div class="row-fluid">
                <div class="span3">
                    <h4>ارتباط با ما</h4>
                    <address style="margin-bottom:15px;">
                        <strong>{{--<a href="indexx.blade.php" title="business">--}}<i class=" icon-home"></i> اهواز - بلوار گلستان- دانشگاه شهید چمران اهواز </a></strong><br>
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

</body>
</html>