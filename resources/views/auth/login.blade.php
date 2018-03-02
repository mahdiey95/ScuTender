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
    <link href="./resources/assets/themes/css/forms.css" rel="stylesheet" type="text/css">
    <style type="text/css" id="enject"></style>
</head>
<body>
<section id="logoSection">
    <img src=".\resources\assets\themes\images\logo\Iranian-flag.jpg" class="flagIR">
    <img class="logo" src=".\resources\assets\themes\images\logo\logo.png" >
</section>

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
                        <li class="active">
                            <form id="logout" action="{{route('logout')}}" method="post" >
                                {{csrf_token()}}
                                <a href="javascript:{}" onclick="document.getElementById('logout').submit()">خروج</a>
                            </form></li>
                        <li class=""><a href="NewTender.blade.php">مناقصه جدید</a></li>
                        <li class=""><a href="login">ورود</a></li>
                        <li class=""><a href="index.blade.php">خانه</a></li>
                        <li class=""><a href="register"> ثبت نام</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Features<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="elements.blade.php">Page Elements</a></li>
                                <li><a href="comingsoon.blade.php">Coming soon page</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="blog.blade.php">اخبار</a></li>
                        <li class=""><a href="contact.blade.php">تماس با ما</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Header Ends================================================ -->
<section id="bodySection">
    <div id="sectionTwo">
        {{--<div class="container well">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-8 col-md-offset-2">--}}
                    {{--<div class="panel panel-default">--}}
                        {{--<div class="panel-heading">ورود به سامانه</div>--}}

                        {{--<div class="panel-body">--}}
                            {{--<form class="form-horizontal" method="POST" action="{{ route('login') }}">--}}
                                {{--{{ csrf_field() }}--}}

                                {{--<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">--}}
                                    {{--<label for="email" class="col-md-4 control-label">نام کاربری</label>--}}

                                    {{--<div class="col-md-6">--}}
                                        {{--<input id="username" type="username" class="form-control" name="username" value="{{ old('username') }}" required autofocus>--}}

                                        {{--@if ($errors->has('username'))--}}
                                            {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('username') }}</strong>--}}
                                    {{--</span>--}}
                                        {{--@endif--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                                    {{--<label for="password" class="col-md-4 control-label">رمز عبور</label>--}}

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
                                    {{--<div class="col-md-6 col-md-offset-4">--}}
                                        {{--<div class="checkbox">--}}
                                            {{--<label>--}}
                                                {{--<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>مرا به خاطر بسپار--}}
                                            {{--</label>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="form-group">--}}
                                    {{--<div class="col-md-8 col-md-offset-4">--}}
                                        {{--<button type="submit" class="btn btn-primary">--}}
                                           {{--ورود--}}
                                        {{--</button>--}}

                                        {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                            {{--فراموشی رمز عبور--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</form>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        <div class="logincontainer well">
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                @if ($errors->has('username') || $errors->has('password'))
                    <span class="help-block">
                        <strong>نام کاربری یا رمز عبور اشتباه است</strong>
                    </span>
                @endif
                <label for="uname"><b>نام کاربری</b></label>
                <input type="text" placeholder="نام کاربری را وارد کنید" name="username" value="{{ old('username') }}" required autofocus>

                <label for="psw"><b>رمز عبور</b></label>
                <input type="password" placeholder="رمز عبور" name="password" required>

                <button type="submit">ورود</button>

                <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> مرا به خاطر بسپار

                    <span class="psw"><a href="{{ route('password.request') }}">فراموشی رمز عبور</a></span>
                </label>



            </form>
        </div>
    </div>

</section>


<!-- ========================= -->
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

<a href="#" class="btn" style="position: fixed; bottom: 38px; right: 10px; display: none; " id="toTop"> <i class="icon-arrow-up"></i> Go to top</a>
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