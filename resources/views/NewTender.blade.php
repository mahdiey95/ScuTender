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
                                <li class=""><a href="{{route('admin.help')}}">راهنما</a></li>
                                <li class="active"><a href="{{route('tender.create')}}">مناقصه جدید</a></li>
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
<!--Header Ends================================================ -->
<section id="bodySection">
    <div id="sectionTwo">
        <div class="container">
        @if(Auth::check()) <div> <label class="username" >کاربر:{{Auth::user()->name}}</label></div> @endif
        </div>
        <div class="container">
            <div class="row well">

                <form class="newtendercontainer" method="post"  action="{{route('tender.store')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <table class="mytable">
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
                        <tr>
                            <td><label class="control-label tablelable" for="description">توضیحات</label></td>
                            <td><textarea name="description" class="select tableinput textarea" required></textarea></td>
                        </tr>

                        <tr>
                            <td><label class="control-label tablelable" for="documents[]">فایل های مربوطه</label></td>
                            <td><input type="file" name="documents[]" class="select tableinput textarea" multiple/></td>
                        </tr>
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