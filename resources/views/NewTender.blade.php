<!DOCTYPE html>
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
                            @if(Auth::user()->role == 'ADMIN')
                                <li class="active"><a href="{{route('tender.create')}}">مناقصه جدید</a></li>
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
        <div class="container">
        @if(Auth::check()) <div> <label class="username" >کاربر:{{Auth::user()->name}}</label></div> @endif
        </div>
        <div class="container">
            <div class="row well">

                <form class="newtendercontainer" method="post"  action="{{route('tender.store')}}">
                    {{csrf_field()}}
                    <table>
                    {{--<div class="form-row form-inline" style="float: right">--}}
                        <th class="lbl"></th>
                        <th class="dscribs"></th>

                        <tr>
                            <td> <label class="control-label tablelable" for="name">عنوان مناقصه</label></td>
                            <td><input type="text" name="name" class="tableinput select" placeholder="مثال:تعمیر ساختمان" dir="rtl" required></td>
                        </tr>
                    {{--</div>--}}
                    {{--<div class="form-group form-inline">--}}
                        <tr>
                            <td>  <label class="control-label tablelable" for="field">موضوع مناقصه</label></td>
                            <td>
                                <select name="field" class=" tableinput">
                                    <option value="CONSTRUCTION">عمرانی</option>
                                    <option value="COMPUTER">کامپیوتر</option>
                                </select>
                            </td>

                        </tr>
                    {{--</div>--}}
                    {{--<div class="form-group form-inline" style="float: right">--}}
                        <tr>
                            <td><label class="control-label tablelable" for="description">توضیحات</label></td>
                            <td><textarea name="description" class="select tableinput form-control" required></textarea></td>
                        </tr>
                    {{--</div>--}}

                    {{--<div class="form-row form-inline">--}}
                        <tr>
                            <td> <label class="control-label tablelable" for="start_date">تاریخ شروع</label></td>
                            <td> <input type="text" name="start_date" class="form-control" id="fromDate1" placeholder="از تاریخ"
                                        data-mddatetimepicker="true" data-trigger="click" data-targetselector="#fromDate1"
                                        data-groupid="group1" data-fromdate="true" data-enabletimepicker="false"
                                        data-placement="right" data-disablebeforetoday="true"/></td>
                        </tr>
                    {{--</div>--}}
                        <tr>
                            <td><label class="control-label tablelable" for="end_date">تاریخ پایان</label></td>
                            <td><input type="text" name="end_date" class="form-control" id="toDate1" placeholder="تا تاریخ"
                                       data-mddatetimepicker="true" data-trigger="click" data-targetselector="#toDate1"
                                       data-groupid="group1" data-todate="true" data-enabletimepicker="false"
                                       data-placement="right"/></td>
                        </tr>
                    {{--<div class="form-row form-inline">--}}


                    {{--</div>--}}
                    </table>



                    <button type="submit" class="tblbutton">ثبت</button>

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
                    <div class="span4">
                        <h4>Newsletter and Subscription</h4>
                        <h5>Our aim</h5>
                        <em>
                            "To provide affordable web design and development services for different devices is our aim,
                            that fully meet your requirements." <br/><br/>
                        </em>
                        <h5>What our client say?</h5>
                        <em>
                            " I can confirm, bougth the theme a couple of days afo and it is really fantastic. Very flexible, very good support. I really like it."
                        </em>
                        <br/><br/>
                        <h5>Subscription</h5>
                        <form>
                            <div class="input-append">
                                <input id="appendedInputButton"  placeholder="Enter your e-mail" type="text">
                                <button class="btn btn-warning" type="button">send </button>
                            </div>
                        </form>
                    </div>
                    <div class="span5">
                        <h4>Latest news</h4>
                        <ul class="media-list">
                            <li class="media">
                                <a class="pull-left" href="blog_details.blade.php">
                                    <img class="media-object" src="../resources/assets/themes/images/img64x64.png" alt="bootstrap business template">
                                </a>
                                <div class="media-body">
                                    <h5 class="media-heading">Why our customers satisfied?</h5>
                                    "To provide affordable web design and..."<br/>
                                    <small><em>November 14, 2012</em> <a href="blog_details.blade.php"> More</a></small>
                                </div>
                            </li>
                            <li class="media">
                                <a class="pull-left" href="blog_details.blade.php">
                                    <img class="media-object" src="../resources/assets/themes/images/img64x64.png" alt="bootstrap business template">
                                </a>
                                <div class="media-body">
                                    <h5 class="media-heading">Why our customers satisfied?</h5>
                                    "To provide affordable web design and..."<br/>
                                    <small><em>November 14, 2012</em> <a href="blog_details.blade.php"> More</a></small>
                                </div>
                            </li>
                            <li class="media">
                                <a class="pull-left" href="blog_details.blade.php">
                                    <img class="media-object" src="../resources/assets/themes/images/img64x64.png" alt="bootstrap business template">
                                </a>
                                <div class="media-body">
                                    <h5 class="media-heading">Why our customers satisfied?</h5>
                                    "To provide affordable web design and..."<br/>
                                    <small><em>November 14, 2012</em> <a href="blog_details.blade.php"> More</a></small>
                                </div>
                            </li>
                            <li class="media">
                                <a class="pull-left" href="blog_details.blade.php">
                                    <img class="media-object" src="../resources/assets/themes/images/img64x64.png" alt="bootstrap business template">
                                </a>
                                <div class="media-body">
                                    <h5 class="media-heading">Why our customers satisfied?</h5>
                                    "To provide affordable web design and..."<br/>
                                    <small><em>November 14, 2012</em> <a href="blog_details.blade.php"> More</a></small>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="span3">
                        <h4>Visit us</h4>
                        <address style="margin-bottom:15px;">
                            <strong><a href="indexx.blade.php" title="business"><i class=" icon-home"></i> Business (p.) Ltd. </a></strong><br>
                            194, Vectoria Street, Newwork <br>
                            nw 488, USA<br>
                        </address>
                        Phone: <i class="icon-phone-sign"></i> &nbsp; 00123 456 000 789 <br>
                        Email: <a href="contact.blade.php" title="contact"><i class="icon-envelope-alt"></i> info@companyltd.com</a><br/>
                        Link: <a href="indexx.blade.php" title="Business ltd"><i class="icon-globe"></i> www.businessltd.com</a><br/><br/>
                        <h5>Quick Links</h5>
                        <a href="services.blade.php" title="services"><i class="icon-cogs"></i> Services </a><br/>
                        <a href="about.html" title=""><i class="icon-info-sign"></i> About us </a><br/>
                        <a href="index.blade.php" title="portfolio"><i class="icon-question-sign"></i> Portfolio </a><br/>

                        <h5>Find us on</h5>
                        <div style="font-size:2.5em;">
                            <a href="indexx.blade.php" title="" style="display:inline-block; width:1em"> <i class="icon-facebook-sign"> </i> </a>
                            <a href="index.blade.php" title="" style="display:inline-block; width:1em"> <i class="icon-twitter-sign"> </i> </a>
                            <a href="services.blade.php" title="" style="display:inline-block;width:1em"> <i class="icon-facetime-video"> </i> </a>
                            <a href="services.blade.php" title="" style="display:inline-block;width:1em"> <i class="icon-google-plus-sign"> </i> </a>
                            <a href="about.html" title="" style="display:inline-block;width:1em" > <i class="icon-rss"> </i> </a>
                        </div>
                    </div>
                </div>

                <p style="padding:18px 0 44px">&copy; 2012, allright reserved </p>
            </footer>
        </div><!-- /container -->
    </section>

    <a href="#" class="btn" style="position: fixed; bottom: 38px; right: 10px; display: none; " id="toTop"> <i class="icon-arrow-up"></i></a>
    <!-- Javascript
        ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="../resources/assets/themes/js/jquery-3.1.0.min.js"></script>
    <script src="../resources/assets/themes/js/bootstrap.min.js"></script>
    {{--<script src="../resources/assets/themes/js/bootstrap-tooltip.js"></script>--}}
    {{--<script src="../resources/assets/themes/js/bootstrap-popover.js"></script>--}}
    <script src="../resources/assets/themes/js/business_ltd_1.0.js"></script>

    <script src="../resources/assets/themes/js/MdBootstrapPersianDateTimePicker/jalaali.js" type="text/javascript"></script>
    <script src="../resources/assets/themes/js/MdBootstrapPersianDateTimePicker/jquery.Bootstrap-PersianDateTimePicker.js" type="text/javascript"></script>

</body>
</html>