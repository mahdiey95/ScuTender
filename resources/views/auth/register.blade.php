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
                            <li class="active"><a href="{{route('register')}}"> ثبت نام</a></li>
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
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-8 col-md-offset-2">--}}
                    {{--<div class="panel panel-default">--}}
                        {{--<div class="panel-heading">Register</div>--}}

                        {{--<div class="panel-body">--}}
                            {{--<form class="form-horizontal" method="POST" action="{{ route('register') }}">--}}
                                {{--{{ csrf_field() }}--}}

                                {{--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">--}}
                                    {{--<label for="name" class="col-md-4 control-label">Name</label>--}}

                                    {{--<div class="col-md-6">--}}
                                        {{--<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>--}}

                                        {{--@if ($errors->has('name'))--}}
                                            {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                    {{--</span>--}}
                                        {{--@endif--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                                    {{--<label for="email" class="col-md-4 control-label">Username</label>--}}

                                    {{--<div class="col-md-6">--}}
                                        {{--<input id="email" type="text" class="form-control" name="username" value="{{ old('username') }}" required>--}}

                                        {{--@if ($errors->has('username'))--}}
                                            {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('username') }}</strong>--}}
                                    {{--</span>--}}
                                        {{--@endif--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                                    {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                                    {{--<div class="col-md-6">--}}
                                        {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                                        {{--@if ($errors->has('password'))--}}
                                            {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                        {{--@endif--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="form-group">--}}
                                    {{--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}

                                    {{--<div class="col-md-6">--}}
                                        {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="form-group">--}}
                                    {{--<div class="col-md-6 col-md-offset-4">--}}
                                        {{--<button type="submit" class="btn btn-primary">--}}
                                            {{--Register--}}
                                        {{--</button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</form>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <form method="post" action="{{route('register')}}" style="border:1px solid #ccc">
            {{ csrf_field() }}
            <div class="signupcontainer well">

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
                <p>لطفا اطلاعات دقیق خود را در فرم زیر ثبت کنید.</p>
                <hr>

                <label for="name"><b>نام شرکت</b></label>
                <input type="text" placeholder="نام شرکت" name="name" required>

                <label for="field"><b>زمینه کاری</b></label>
                <input type="text" placeholder="زمینه کاری شرکت خود را وارد کنید." name="field" required>

                <label for="registration_number"><b>شماره ثبت</b></label>
                <input type="number" placeholder="شماره ثبت شرکت را وارد کنید." name="registration_number" required>

                <label for="mobile"><b>تلفن تماس</b></label>
                <input type="number" placeholder="شماره موبایل خود را وارد کنید" name="phone" required>

                <label for="economic_id"><b>َشماره اقتصادی</b></label>
                <input type="number" placeholder="شماره اقتصادی شرکت را وارد کنید" name="economic_id" required>

                <label for="ceoname"><b>نام مدیرعامل</b></label>
                <input type="text" placeholder="نام مدیر عامل شرکت را وارد کنید" name="ceo_name" required>

                <label for="email"><b>ایمیل</b></label>
                <input type="email" placeholder="ایمیل را وارد کنید" name="email" required>

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
<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
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