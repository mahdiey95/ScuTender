<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>جزییات مناقصه</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link id="callCss" rel="stylesheet" href="../resources/assets/themes/current/bootstrap.min.css" type="text/css" media="screen"/>
    <link href="../resources/assets/themes/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
    <link href="../resources/assets/themes/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="../resources/assets/themes/css/base.css" rel="stylesheet" type="text/css">
    <link href="../resources/assets/themes/css/default_header.css" rel="stylesheet" type="text/css">
    <link href="../resources/assets/themes/css/forms.css" rel="stylesheet" type="text/css">
    <link href="../resources/assets/themes/css/tender_status.css" rel="stylesheet" type="text/css">
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

{{--<section id="bannerSection" style="background:url(../resources/assets/themes/images/banner/portfolio.png) no-repeat center center #000;">--}}
{{--<div class="container" >--}}
{{--<h1 id="pageTitle">سامانه مناقصات  <small> دانشگاه شهید چمران اهواز</small>--}}
{{--<span class="pull-right toolTipgroup">--}}
{{--<a href="#" data-placement="top" data-original-title="Find us on via facebook"><img style="width:45px" src="../resources/assets/themes/images/facebook.png" alt="facebook" title="facebook"></a>--}}
{{--<a href="#" data-placement="top" data-original-title="Find us on via twitter"><img style="width:45px" src="../resources/assets/themes/images/twitter.png" alt="twitter" title="twitter"></a>--}}
{{--<a href="#" data-placement="top" data-original-title="Find us on via youtube"><img style="width:45px" src="../resources/assets/themes/images/youtube.png" alt="youtube" title="youtube"></a>--}}
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
            <div class="row">
                <div class="span9">
                    <ul class="media-list" >
                        <li class="media well well-small">
                            <h4>{{$tender->name}}</h4>
                            <p>
                                {{$tender->description}}
                            </p>
                        </li>
                        <li class="media well well-small">
                            <h4>اسناد مناقصه</h4>
                            <p>
                                @if(count($documents) == 0)
                                    هیچ سندی برای این مناقصه ثبت نشده
                                @else
                                    @foreach($documents as $document)
                                        <a href="{{route('donwload' , ['category' => 'tenders',
                                'directory' => $tender->id,
                                'filename' => $document])}}">
                                            {{$document}}
                                        </a>
                                        <br/>
                                    @endforeach
                                @endif
                            </p>
                        <li/>

                        <li class="media well well-small">
                            @if($tender->status == '2')
                                <h4 class="tender_new">مناقصه هنوز شروع نشده است</h4>
                            @endif
                            @if($tender->status == '3')
                                <h4 class="tender_deciding">مناقصه به پایان رسیده و در مرحله تصمیم گیری است</h4>
                            @endif
                            @if($tender->status == '4')
                                <h4 class="tender_done">مناقصه به پایان رسیده است</h4>
                            @endif



                            @if($tender->status != '4')
                                <h4>پیشنهاد شما برای این مناقصه</h4>
                                @if (session('success'))
                                    <div class="flash-message">
                                        <div class="alert alert-success">
                                            {{session('success')}}
                                        </div>
                                    </div>
                                @endif
                                <form method="post" action="{{route('suggestion')}}" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <fieldset @if($tender->status == 2 || $tender->status == 3) disabled @endif>
                                        <div class="suggestion">
                                            <div class="form-inline">
                                                <label for="price">قیمت پیشنهادی</label>
                                                <input type="number" name="price" value="{{$suggestion->price or ""}}" required/>
                                             </div>
                                            <div class="form-inline">
                                                <label for="duration" >زمان پیشنهادی(روز)</label>
                                                <input type="number" name="duration" value="{{$suggestion->duration or ""}}" required/>
                                             </div>
                                            <div class="form-inline">
                                                <label for="conditions">شرایط</label>
                                                <textarea class="textarea" name="conditions" required style="background: #f1f1f1">{{$suggestion->conditions or ""}}</textarea>
                                            </div>
                                            <div class="form-inline">
                                                <label for="duration" >فایل های پیوست</label>
                                                <input type="file" name="files[]" multiple/>
                                            </div>
                                            <div class="form-inline">
                                                <input class="saggestioninput" type="submit" value="ثبت پیشنهاد">
                                            </div>
                                            <input name="tender_id" type="hidden" value="{{$tender->id}}">
                                        </div>
                                    </fieldset>
                                </form>

                            @else
                                <h4>برنده مناقصه شرکت {{$winner_name}}</h4>
                            @endif

                        </li>

                    </ul>
                </div>
                <div class="span3">
                    <ul class="media-list">
                        <li class="media well well-small">
                            <h4>تاریخ شروع</h4>
                            <p>
                                {{$tender->start_date}}
                            </p>
                        </li>
                        <li class="media well well-small">
                            <h4>تاریخ پایان</h4>
                            <p>
                                {{$tender->end_date}}
                            </p>
                        </li>
                    </ul>
                </div>

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
{{--<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>--}}
<script src="../resources/assets/themes/js/jquery-1.8.3.min.js"></script>
<script src="../resources/assets/themes/js/bootstrap.min.js"></script>
<script src="../resources/assets/themes/js/bootstrap-tooltip.js"></script>
<script src="../resources/assets/themes/js/bootstrap-popover.js"></script>
<script src="../resources/assets/themes/js/business_ltd_1.0.js"></script>

</body>
</html>