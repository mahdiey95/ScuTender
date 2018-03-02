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
    <link id="callCss" rel="stylesheet" href="../resources/assets/themes/current/bootstrap.min.css" type="text/css" media="screen"/>
    <link href="../resources/assets/themes/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
    <link href="../resources/assets/themes/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="../resources/assets/themes/css/base.css" rel="stylesheet" type="text/css">
    <link href="../resources/assets/themes/css/default_header.css" rel="stylesheet" type="text/css">
    <link href="../resources/assets/themes/css/forms.css" rel="stylesheet" type="text/css">
    <style type="text/css" id="enject"></style>
</head>
<body>
<section id="logoSection">
    <img src="..\resources\assets\themes\images\logo\Iranian-flag.jpg" class="flagIR">
    <img class="logo" src="..\resources\assets\themes\images\logo\logo.png" >
</section>

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
                        <li class="active"><form id="logout" action="{{route('logout')}}" method="post" >
                                {{csrf_field()}}
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
                            <td> <label class="control-label tablelable" for="startDate">تاریخ شروع</label></td>
                            <td> <input type="date" name="startDate" class="form-control tableinput select" dir="rtl" required></td>
                        </tr>
                    {{--</div>--}}
                        <tr>
                            <td><label class="control-label tablelable" for="endDate">تاریخ پایان</label></td>
                            <td><input type="date" name="endDate" class="form-control tableinput select"  dir="rtl" required></td>
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

    <a href="#" class="btn" style="position: fixed; bottom: 38px; right: 10px; display: none; " id="toTop"> <i class="icon-arrow-up"></i> Go to top</a>
    <!-- Javascript
        ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="../resources/assets/themes/js/jquery-1.8.3.min.js"></script>
    <script src="../resources/assets/themes/js/bootstrap.min.js"></script>
    <script src="../resources/assets/themes/js/bootstrap-tooltip.js"></script>
    <script src="../resources/assets/themes/js/bootstrap-popover.js"></script>
    <script src="../resources/assets/themes/js/business_ltd_1.0.js"></script>
    <!-- Themes switcher section ============================================================================================= -->
    <div id="secectionBox">
        <link rel="stylesheet" href="../resources/assets/themes/switch/themeswitch.css" type="text/css" media="screen" />
        <script src="../resources/assets/themes/switch/theamswitcher.js" type="text/javascript" charset="utf-8"></script>
        <div id="themeContainer">
            <div id="hideme" class="themeTitle">Style Selector</div>
            <div class="themeName">Oregional Skin</div>
            <div class="images style">
                <a href="../resources/assets/themes/css/#" name="current"><img src="../resources/assets/themes/switch/images/clr/current.png" alt="bootstrap business templates" class="active"></a>
            </div>
            <div class="themeName">Bootswatch Skins (11)</div>
            <div class="images style">
                <a href="../resources/assets/themes/css/#" name="amelia" title="Amelia"><img src="../resources/assets/themes/switch/images/clr/amelia.png" alt="bootstrap business templates"></a>
                <a href="../resources/assets/themes/css/#" name="spruce" title="Spruce"><img src="../resources/assets/themes/switch/images/clr/spruce.png" alt="bootstrap business templates" ></a>
                <a href="../resources/assets/themes/css/#" name="superhero" title="Superhero"><img src="../resources/assets/themes/switch/images/clr/superhero.png" alt="bootstrap business templates"></a>
                <a href="../resources/assets/themes/css/#" name="cyborg"><img src="../resources/assets/themes/switch/images/clr/cyborg.png" alt="bootstrap business templates"></a>
                <a href="../resources/assets/themes/css/#" name="cerulean"><img src="../resources/assets/themes/switch/images/clr/cerulean.png" alt="bootstrap business templates"></a>
                <a href="../resources/assets/themes/css/#" name="journal"><img src="../resources/assets/themes/switch/images/clr/journal.png" alt="bootstrap business templates"></a>
                <a href="../resources/assets/themes/css/#" name="readable"><img src="../resources/assets/themes/switch/images/clr/readable.png" alt="bootstrap business templates"></a>
                <a href="../resources/assets/themes/css/#" name="simplex"><img src="../resources/assets/themes/switch/images/clr/simplex.png" alt="bootstrap business templates"></a>
                <a href="../resources/assets/themes/css/#" name="slate"><img src="../resources/assets/themes/switch/images/clr/slate.png" alt="bootstrap business templates"></a>
                <a href="../resources/assets/themes/css/#" name="spacelab"><img src="../resources/assets/themes/switch/images/clr/spacelab.png" alt="bootstrap business templates"></a>
                <a href="../resources/assets/themes/css/#" name="united"><img src="../resources/assets/themes/switch/images/clr/united.png" alt="bootstrap business templates"></a>
                <p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples and you can build your own color scheme in the backend.</small></p>
            </div>
            <div class="themeName">Background Patterns </div>
            <div class="images patterns">
                <a href="../resources/assets/themes/css/#" name="pattern1"><img src="../resources/assets/themes/switch/images/pattern/pattern1.png" alt="bootstrap business templates" class="active"></a>
                <a href="../resources/assets/themes/css/#" name="pattern2"><img src="../resources/assets/themes/switch/images/pattern/pattern2.png" alt="bootstrap business templates"></a>
                <a href="../resources/assets/themes/css/#" name="pattern3"><img src="../resources/assets/themes/switch/images/pattern/pattern3.png" alt="bootstrap business templates"></a>
                <a href="../resources/assets/themes/css/#" name="pattern4"><img src="../resources/assets/themes/switch/images/pattern/pattern4.png" alt="bootstrap business templates"></a>
                <a href="../resources/assets/themes/css/#" name="pattern5"><img src="../resources/assets/themes/switch/images/pattern/pattern5.png" alt="bootstrap business templates"></a>
                <a href="../resources/assets/themes/css/#" name="pattern6"><img src="../resources/assets/themes/switch/images/pattern/pattern6.png" alt="bootstrap business templates"></a>
                <a href="../resources/assets/themes/css/#" name="pattern7"><img src="../resources/assets/themes/switch/images/pattern/pattern7.png" alt="bootstrap business templates"></a>
                <a href="../resources/assets/themes/css/#" name="pattern8"><img src="../resources/assets/themes/switch/images/pattern/pattern8.png" alt="bootstrap business templates"></a>
                <a href="../resources/assets/themes/css/#" name="pattern9"><img src="../resources/assets/themes/switch/images/pattern/pattern9.png" alt="bootstrap business templates"></a>
                <a href="../resources/assets/themes/css/#" name="pattern10"><img src="../resources/assets/themes/switch/images/pattern/pattern10.png" alt="bootstrap business templates"></a>

                <a href="../resources/assets/themes/css/#" name="pattern11"><img src="../resources/assets/themes/switch/images/pattern/pattern11.png" alt="bootstrap business templates"></a>
                <a href="../resources/assets/themes/css/#" name="pattern12"><img src="../resources/assets/themes/switch/images/pattern/pattern12.png" alt="bootstrap business templates"></a>
                <a href="../resources/assets/themes/css/#" name="pattern13"><img src="../resources/assets/themes/switch/images/pattern/pattern13.png" alt="bootstrap business templates"></a>
                <a href="../resources/assets/themes/css/#" name="pattern14"><img src="../resources/assets/themes/switch/images/pattern/pattern14.png" alt="bootstrap business templates"></a>
                <a href="../resources/assets/themes/css/#" name="pattern15"><img src="../resources/assets/themes/switch/images/pattern/pattern15.png" alt="bootstrap business templates"></a>

                <a href="../resources/assets/themes/css/#" name="pattern16"><img src="../resources/assets/themes/switch/images/pattern/pattern16.png" alt="bootstrap business templates"></a>
                <a href="../resources/assets/themes/css/#" name="pattern17"><img src="../resources/assets/themes/switch/images/pattern/pattern17.png" alt="bootstrap business templates"></a>
                <a href="../resources/assets/themes/css/#" name="pattern18"><img src="../resources/assets/themes/switch/images/pattern/pattern18.png" alt="bootstrap business templates"></a>
                <a href="../resources/assets/themes/css/#" name="pattern19"><img src="../resources/assets/themes/switch/images/pattern/pattern19.png" alt="bootstrap business templates"></a>
                <a href="../resources/assets/themes/css/#" name="pattern20"><img src="../resources/assets/themes/switch/images/pattern/pattern20.png" alt="bootstrap business templates"></a>

            </div>
        </div>
    </div>
    <span id="themesBtn"></span>
</body>
</html>