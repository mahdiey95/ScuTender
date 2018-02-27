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
	<style type="text/css" id="enject"></style>
</head>
<body>
<section id="headerSection">
	<div class="container">
		<div class="navbar">
			<div class="container">
				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<h1><a class="brand" href="index.blade.php"> Business <small>  Ltd.</small></a></h1>
				<div class="nav-collapse collapse">
					<ul class="nav pull-right">
						<li class=""><a href="index.blade.php">Home	</a></li>
						<li class=""><a href="services.blade.php">What we do?</a></li>
						<li class=""><a href="about_us.blade.php">Who we are?</a></li>
						<li class=""><a href="portfolio.blade.php">Portfolio</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Features<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="elements.blade.php">Page Elements</a></li>
								<li><a href="comingsoon.blade.php">Coming soon page</a></li>
							</ul>
						</li>
						<li class=""><a href="blog.blade.php">Blog</a></li>
						<li class=""><a href="contact.blade.php">Support</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Header Ends================================================ -->
<section id="bannerSection" style="background:url(./resources/assets/themes/images/banner/contact.png) no-repeat center center #000;">
	<div class="container" >	
		<h1 id="pageTitle">Contact <small> :We love to hear from you</small> 
		<span class="pull-right toolTipgroup">
			<a href="#" data-placement="top" data-original-title="Find us on via facebook"><img style="width:45px" src="./resources/assets/themes/images/facebook.png" alt="facebook" title="facebook"></a>
			<a href="#" data-placement="top" data-original-title="Find us on via twitter"><img style="width:45px" src="./resources/assets/themes/images/twitter.png" alt="twitter" title="twitter"></a>
			<a href="#" data-placement="top" data-original-title="Find us on via youtube"><img style="width:45px" src="./resources/assets/themes/images/youtube.png" alt="youtube" title="youtube"></a>
		</span>
		</h1>
	</div>
</section> 
<section id="bodySection">
	<div class="container">
	<hr class="soften">
	<h1>Components used in this project are:</h1>
	<hr class="soften"/>	
	<header>
		<div class="container">
		<div class="page-header">
		<h3>A. Navigation</h3>
		</div>
		<!-- Navbar
		================================================== -->
	<section id="navbar">
	  <div class="navbar">
		<div class="navbar-inner">
		  <div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			</a>
			<a class="brand" href="#">Project name</a>
			<div class="nav-collapse">
			  <ul class="nav">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">Link</a></li>
				<li><a href="#">Link</a></li>
				<li><a href="#">Link</a></li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="#">Action</a></li>
					<li><a href="#">Another action</a></li>
					<li><a href="#">Something else here</a></li>
					<li class="divider"></li>
					<li class="nav-header">Nav header</li>
					<li><a href="#">Separated link</a></li>
					<li><a href="#">One more separated link</a></li>
				  </ul>
				</li>
			  </ul>
			  <form class="navbar-search pull-left" action="#">
				<input type="text" class="search-query span2" placeholder="Search"/>
			  </form>
			  <ul class="nav pull-right">
				<li><a href="#">Link</a></li>
				<li class="divider-vertical"></li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="#">Action</a></li>
					<li><a href="#">Another action</a></li>
					<li><a href="#">Something else here</a></li>
					<li class="divider"></li>
					<li><a href="#">Separated link</a></li>
				  </ul>
				</li>
			  </ul>
			</div><!-- /.nav-collapse -->
		  </div>
		</div><!-- /navbar-inner -->
	  </div><!-- /navbar -->
	</section>
		</div>	 
		</header>

		
		
		
	<!-- Heading
	================================================== -->
	<div class="page-header">
	<h3>B.  Headings </h3>
	</div>
	<div class="row-fluid">
	<div class="span4">
		<h6>h6. Heading 6</h6>
		<h5>h5. Heading 5</h5>
		<h4>h4. Heading 4</h4>
		<h3>h3. Heading 3</h3>
		<h2>h2. Heading 2</h2>
		<h1>h1. Heading 1</h1>
	</div>
	<div class="span4">
		<h6><a href="#">h6. Heading 6</a></h6>
		<h5><a href="#">h5. Heading 5</a></h5>
		<h4><a href="#">h4. Heading 4</a></h4>
		<h3><a href="#">h3. Heading 3</a></h3>
		<h2><a href="#">h2. Heading 2</a></h2>
		<h1><a href="#">h1. Heading 1</a></h1>
	</div>
	<div class="span4">
		<h6><a href="#">h6. Heading 6 <small>Small text</small></a></h6>
		<h5><a href="#">h5. Heading 5 <small>Small text</small> </a></h5>
		<h4><a href="#">h4. Heading 4 <small>Small text</small> </a></h4>
		<h3><a href="#">h3. Heading 3 <small>Small text</small> </a></h3>
		<h2><a href="#">h2. Heading 2 <small>Small text</small></a></h2>
		<h1><a href="#">h1. Heading 1 <small>Small text</small></a></h1>
	</div>
	</div>
	<!-- Heading
	================================================== -->
	<div class="page-header">
	<h3>C.  Grids </h3>
	</div>
	<div id="grids">
	<ul class="nav nav-tabs" id="myTab">
	  <li><a href="#one" data-toggle="tab">1 Column page</a></li>
	  <li class="active"><a href="#two" data-toggle="tab">2 Column page</a></li>
	  <li><a data-toggle="tab" href="#three">3 Comumn page</a></li>
	  <li><a href="#four" data-toggle="tab">4 Comumn page</a></li>
	</ul>
	 
	<div class="tab-content">
	  <div class="tab-pane" id="one">
	  <div class="row-fluid">
		 <div class="span12">
		  <h4>Lorem Ipsum is simply dummy text ... </h4>
		  <p>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		  </p>
		  </div>
	  </div>
	  </div>
	  <div class="tab-pane active" id="two">
	  <div class="row-fluid">
		  <div class="span6">
		  <h4>Lorem Ipsum is simply dummy text ... </h4>
			<p>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			</p>
		  </div>
		  <div class="span6">
		  <h4>Lorem Ipsum is simply dummy text ... </h4>
			<p>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			</p>
		  </div>
	  </div>
	  </div>
	  <div class="tab-pane" id="three">
	  <div class="row-fluid">
		<div class="span4">
		  <h4>Lorem Ipsum is simply dummy text ... </h4>
			<p>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			</p>
		  </div>
		  <div class="span4">
			<h4>Lorem Ipsum is simply dummy text ... </h4>
			<p>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			</p>
		  </div>
		  <div class="span4">
			<h4>Lorem Ipsum is simply dummy text ... </h4>
			<p>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			</p>
		  </div>
		 </div>
	  </div>
	  <div class="tab-pane" id="four">
	  <div class="row-fluid">
		<div class="span3">
			<h4>Lorem Ipsum is simply dummy text ... </h4>
			<p>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			</p>
		 </div>
		  <div class="span3">
			<h4>Lorem Ipsum is simply dummy text ... </h4>
			<p>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			</p>
		  </div>
		  <div class="span3">
			<h4>Lorem Ipsum is simply dummy text ... </h4>
			<p>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			</p>
		  </div>
		  <div class="span3">
			<h4>Lorem Ipsum is simply dummy text ... </h4>
			<p>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			</p>
		  </div>
	  
	  </div>
	</div>
	</div>
	</div>

	<!-- Button Groups
	================================================== -->
	  <div class="page-header">
		<h3>D. Button <small>button groups and buttons</small></h3>
	  </div>
	  <div class="row-fluid">
	  <div class="span6">
		<section id="buttonGroups">
		  <h4>Button groups</h4><br/>
			<div class="btn-group" style="margin: 9px 0;">
			  <button class="btn">Left</button>
			  <button class="btn">Middle</button>
			  <button class="btn">Right</button>
			</div>
		  <h4>Toolbar example</h4>
		 
		  <div class="btn-toolbar">
			<div class="btn-group">
			  <button class="btn">1</button>
			  <button class="btn">2</button>
			  <button class="btn">3</button>
			  <button class="btn">4</button>
			</div>
			<div class="btn-group">
			  <button class="btn">5</button>
			  <button class="btn">6</button>
			  <button class="btn">7</button>
			</div>
			<div class="btn-group">
			  <button class="btn">8</button>
			</div>
		  </div>
		</section>
		  </div>

	<!-- Split button dropdowns
	================================================== -->
	<div class="span6">
	<section id="buttonDropdowns">
	  <h4>Button dropdowns</h4>
		  <div class="btn-toolbar" style="margin-top: 18px;">
			<div class="btn-group">
			  <button class="btn dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
			  <ul class="dropdown-menu">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			  </ul>
			</div><!-- /btn-group -->
			
			<div class="btn-group">
			  <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
			  <ul class="dropdown-menu">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			  </ul>
			</div><!-- /btn-group -->
			<div class="btn-group">
			  <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Danger <span class="caret"></span></button>
			  <ul class="dropdown-menu">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			  </ul>
			</div><!-- /btn-group -->

			<div class="btn-group">
			  <button class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Warning <span class="caret"></span></button>
			  <ul class="dropdown-menu">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			  </ul>
			</div><!-- /btn-group -->
			<div class="btn-group">
			  <button class="btn btn-success dropdown-toggle" data-toggle="dropdown">Success <span class="caret"></span></button>
			  <ul class="dropdown-menu">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			  </ul>
			</div><!-- /btn-group -->
			<div class="btn-group">
			  <button class="btn btn-info dropdown-toggle" data-toggle="dropdown">Info <span class="caret"></span></button>
			  <ul class="dropdown-menu">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			  </ul>
			</div><!-- /btn-group -->
			<div class="btn-group">
			  <button class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">Inverse <span class="caret"></span></button>
			  <ul class="dropdown-menu">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			  </ul>
			</div><!-- /btn-group -->
			<div class="btn-toolbar" style="margin-top: 18px;">
			<div class="btn-group">
			  <button class="btn btn-large dropdown-toggle" data-toggle="dropdown">Large button <span class="caret"></span></button>
			  <ul class="dropdown-menu">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			  </ul>
			</div><!-- /btn-group -->
			<div class="btn-group">
			  <button class="btn btn-small dropdown-toggle" data-toggle="dropdown">Small button <span class="caret"></span></button>
			  <ul class="dropdown-menu">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			  </ul>
			</div><!-- /btn-group -->
			<div class="btn-group">
			  <button class="btn btn-mini dropdown-toggle" data-toggle="dropdown">Mini button <span class="caret"></span></button>
			  <ul class="dropdown-menu">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			  </ul>
			</div><!-- /btn-group -->
		  </div>
		  <div class="btn-toolbar" style="margin-top: 18px;">
			<div class="btn-group">
			  <button class="btn">Action</button>
			  <button class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
			  <ul class="dropdown-menu">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			  </ul>
			</div><!-- /btn-group -->
			<div class="btn-group">
			  <button class="btn btn-primary">Action</button>
			  <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
			  <ul class="dropdown-menu">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			  </ul>
			</div><!-- /btn-group -->
			<div class="btn-group">
			  <button class="btn btn-danger">Danger</button>
			  <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
			  <ul class="dropdown-menu">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			  </ul>
			</div>
			
			<div class="btn-group">
			  <button class="btn btn-warning">Warning</button>
			  <button class="btn btn-warning dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
			  <ul class="dropdown-menu">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			  </ul>
			</div><!-- /btn-group -->
			<div class="btn-group">
			  <button class="btn btn-success">Success</button>
			  <button class="btn btn-success dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
			  <ul class="dropdown-menu">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			  </ul>
			</div><!-- /btn-group -->
			<div class="btn-group">
			  <button class="btn btn-info">Info</button>
			  <button class="btn btn-info dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
			  <ul class="dropdown-menu">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			  </ul>
			</div><!-- /btn-group -->
		  </div>
		  </div>
	</section>
		  </div>
	<!-- Using Icon
	================================================== -->
	<section id="navs">
	  <div class="page-header">
		<h3>E. Using Icon</h3>
	  </div>
	  <div class="row-fluid">
	  <div class="span6">
	  <div class="well" style="padding: 8px 0;">
			<ul class="nav nav-list">
			  <li class="nav-header">List header</li>
			  <li class="active"><a href="#"><i class="icon-white icon-home"></i> Home</a></li>
			  <li><a href="#"><i class="icon-book"></i> Library</a></li>
			  <li><a href="#"><i class="icon-pencil"></i> Applications</a></li>
			  <li class="nav-header">Another list header</li>
			  <li><a href="#"><i class="icon-user"></i> Profile</a></li>
			  <li><a href="#"><i class="icon-cog"></i> Settings</a></li>
			  <li class="divider"></li>
			  <li><a href="#"><i class="icon-flag"></i> Help</a></li>
			</ul>
		  </div>
		  </div>
		  <div class="span6">
		  <h4>Stacked tabs</h4><br/>
		  <ul class="nav nav-tabs nav-stacked">
			<li class="active"><a href="#">Home</a></li>
			<li><a href="#">Profile</a></li>
			<li><a href="#">Item 1</a></li>
			<li><a href="#">Item 2</a></li>
			<li><a href="#">Messages</a></li>
		  </ul>
		 </div>
		 </div>
	</section>
	<!-- Breadcrumbs
	================================================== -->
	<section id="breadcrumbs">
	  <div class="page-header">
		<h3>F. Breadcrumbs </h3>
	  </div>
	  <ul class="breadcrumb">
			<li class="active">Home</li>
		  </ul>
		  <ul class="breadcrumb">
			<li><a href="#">Home</a> <span class="divider">/</span></li>
			<li class="active">Library</li>
		  </ul>
		  <ul class="breadcrumb">
			<li><a href="#">Home</a> <span class="divider">/</span></li>
			<li><a href="#">Library</a> <span class="divider">/</span></li>
			<li class="active">Data</li>
		  </ul>
	</section>

	<!-- Pagination
	================================================== -->
	<section id="pagination">
	  <div class="page-header">
		<h3>G. Pagination </h3>
	  </div>
		<div class="row-fluid">
		<div class="span3">
		  <div class="pagination">
			<ul>
			  <li class="disabled"><a href="#">&laquo;</a></li>
			  <li class="active"><a href="#">1</a></li>
			  <li><a href="#">2</a></li>
			  <li><a href="#">3</a></li>
			  <li><a href="#">4</a></li>
			  <li><a href="#">&raquo;</a></li>
			</ul>
		  </div>
		  </div>
		  <div class="span3">
		  <div class="pagination">
			<ul>
			  <li><a href="#">&laquo;</a></li>
			  <li><a href="#">10</a></li>
			  <li class="active"><a href="#">11</a></li>
			  <li><a href="#">12</a></li>
			  <li><a href="#">&raquo;</a></li>
			</ul>
		  </div>
		  </div>
		   <div class="span3">
		  <div class="pagination">
			<ul>
			  <li><a href="#">&laquo;</a></li>
			  <li class="active"><a href="#">10</a></li>
			  <li class="disabled"><a href="#">...</a></li>
			  <li><a href="#">20</a></li>
			  <li><a href="#">&raquo;</a></li>
			</ul>
		  </div>
		  </div>
		   <div class="span3">
		  <div class="pagination pagination-centered">
			<ul>
			  <li class="active"><a href="#">1</a></li>
			  <li><a href="#">2</a></li>
			  <li><a href="#">3</a></li>
			  <li><a href="#">4</a></li>
			  <li><a href="#">5</a></li>
			</ul>
		  </div>
		  </div>
		  </div>
	</section>
	<!-- Labels
	================================================== -->
	<section id="labels">
	  <div class="page-header">
		<h3>H. Labels </h3>
	  </div>
	  <table class="table table-bordered table-striped">
		<thead>
		  <tr>
			<th>Labels</th>
			<th>Markup</th>
		  </tr>
		</thead>
		<tbody>
		  <tr>
			<td>
			  <span class="label">Default</span>
			</td>
			<td>
			  <code>&lt;span class="label"&gt;Default&lt;/span&gt;</code>
			</td>
		  </tr>
		  <tr>
			<td>
			  <span class="label label-success">Success</span>
			</td>
			<td>
			  <code>&lt;span class="label label-success"&gt;Success&lt;/span&gt;</code>
			</td>
		  </tr>
		  <tr>
			<td>
			  <span class="label label-warning">Warning</span>
			</td>
			<td>
			  <code>&lt;span class="label label-warning"&gt;Warning&lt;/span&gt;</code>
			</td>
		  </tr>
		  <tr>
			<td>
			  <span class="label label-important">Important</span>
			</td>
			<td>
			  <code>&lt;span class="label label-important"&gt;Important&lt;/span&gt;</code>
			</td>
		  </tr>
		  <tr>
			<td>
			  <span class="label label-info">Info</span>
			</td>
			<td>
			  <code>&lt;span class="label label-info"&gt;Info&lt;/span&gt;</code>
			</td>
		  </tr>
		  <tr>
			<td>
			  <span class="label label-inverse">Inverse</span>
			</td>
			<td>
			  <code>&lt;span class="label label-inverse"&gt;Inverse&lt;/span&gt;</code>
			</td>
		  </tr>
		</tbody>
	  </table>
	</section>



	<!-- Badges
	================================================== -->
	<section id="badges">
	  <div class="page-header">
		<h3>I. Badges </h3>
	  </div>
		  <table class="table table-bordered table-striped">
			<thead>
			  <tr>
				<th>Name</th>
				<th>Example</th>
				<th>Markup</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<td>
				  Default
				</td>
				<td>
				  <span class="badge">1</span>
				</td>
				<td>
				  <code>&lt;span class="badge"&gt;1&lt;/span&gt;</code>
				</td>
			  </tr>
			  <tr>
				<td>
				  Success
				</td>
				<td>
				  <span class="badge badge-success">2</span>
				</td>
				<td>
				  <code>&lt;span class="badge badge-success"&gt;2&lt;/span&gt;</code>
				</td>
			  </tr>
			  <tr>
				<td>
				  Warning
				</td>
				<td>
				  <span class="badge badge-warning">4</span>
				</td>
				<td>
				  <code>&lt;span class="badge badge-warning"&gt;4&lt;/span&gt;</code>
				</td>
			  </tr>
			  <tr>
				<td>
				  Important
				</td>
				<td>
				  <span class="badge badge-important">6</span>
				</td>
				<td>
				  <code>&lt;span class="badge badge-important"&gt;6&lt;/span&gt;</code>
				</td>
			  </tr>
			  <tr>
				<td>
				  Info
				</td>
				<td>
				  <span class="badge badge-info">8</span>
				</td>
				<td>
				  <code>&lt;span class="badge badge-info"&gt;8&lt;/span&gt;</code>
				</td>
			  </tr>
			  <tr>
				<td>
				  Inverse
				</td>
				<td>
				  <span class="badge badge-inverse">10</span>
				</td>
				<td>
				  <code>&lt;span class="badge badge-inverse"&gt;10&lt;/span&gt;</code>
				</td>
			  </tr>
			</tbody>
		  </table>
	</section>



	<!-- Typographic components
	================================================== -->
	<section id="typography">
	  <div class="page-header">
		<h3>J. Typographic components </h3>
	  </div>

		  <div class="hero-unit">
			<h1>Hello, world!</h1>
			<p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
			<p><a class="btn btn-primary btn-large">Learn more</a></p>
		  </div>
	</section>



	<!-- Thumbnails
	================================================== -->
	<section id="thumbnails">
	  <div class="page-header">
		<h3>K. Thumbnails </h3>
	  </div>

	  <div class="row-fluid">
		<div class="span6">
		  <ul class="thumbnails">
			<li class="span3">
			  <a href="#" class="thumbnail">
				<img src="http://placehold.it/260x180" alt="">
			  </a>
			</li>
			<li class="span3">
			  <a href="#" class="thumbnail">
				<img src="http://placehold.it/260x180" alt="">
			  </a>
			</li>
			<li class="span3">
			  <a href="#" class="thumbnail">
				<img src="http://placehold.it/260x180" alt="">
			  </a>
			</li>
			<li class="span3">
			  <a href="#" class="thumbnail">
				<img src="http://placehold.it/260x180" alt="">
			  </a>
			</li>
		  </ul>
		  <br/>
		  <ul class="thumbnails">
			<li class="span4">
			  <a href="#" class="thumbnail">
				<img src="http://placehold.it/360x268" alt="">
			  </a>
			</li>
			<li class="span2">
			  <a href="#" class="thumbnail">
				<img src="http://placehold.it/160x120" alt="">
			  </a>
			</li>
			<li class="span2">
			  <a href="#" class="thumbnail">
				<img src="http://placehold.it/160x120" alt="">
			  </a>
			</li>
			<li class="span2">
			  <a href="#" class="thumbnail">
				<img src="http://placehold.it/160x120" alt="">
			  </a>
			</li>
			<li class="span2">
			  <a href="#" class="thumbnail">
				<img src="http://placehold.it/160x120" alt="">
			  </a>
			</li>
			<li class="span2">
			  <a href="#" class="thumbnail">
				<img src="http://placehold.it/160x120" alt="">
			  </a>
			</li>
		  </ul>
		</div>
		<div class="span6">
		   <ul class="thumbnails">
			<li class="span6">
			  <div class="thumbnail">
				<img src="http://placehold.it/260x180" alt="">
				<div class="caption">
				  <h5>Thumbnail label</h5>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				  <p><a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn">Action</a></p>
				</div>
			  </div>
			</li>
			<li class="span6">
			  <div class="thumbnail">
				<img src="http://placehold.it/260x180" alt="">
				<div class="caption">
				  <h5>Thumbnail label</h5>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				  <p><a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn">Action</a></p>
				</div>
			  </div>
			</li>
		  </ul>
		</div>
	  </div>

	</section>



	<!-- Alerts
	================================================== -->
	<section id="alerts">
	  <div class="page-header">
		<h3>L. Alerts </h3>
	  </div>

	<div class="row-fluid">
		<div class="span4">
		  <h4>Error or danger</h4>
		  <div class="alert alert-error">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Oh snap!</strong> Change a few things up and try submitting again.
		  </div>
	<pre class="prettyprint linenums">
	&lt;div class="alert alert-error"&gt;
	  ...
	&lt;/div&gt;
	</pre>
		</div>
		<div class="span4">
		  <h4>Success</h4>
		  <div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Well done!</strong> You successfully read this important alert message.
		  </div>
	<pre class="prettyprint linenums">
	&lt;div class="alert alert-success"&gt;
	  ...
	&lt;/div&gt;
	</pre>
		</div>
		<div class="span4">
		  <h4>Information</h4>
		  <div class="alert alert-info">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
		  </div>
	<pre class="prettyprint linenums">
	&lt;div class="alert alert-info"&gt;
	  ...
	&lt;/div&gt;
	</pre>
		</div>
	  </div>

	</section>



	<!-- Progress bars
	================================================== -->
	<section id="progress">
	  <div class="page-header">
		<h3>M. Progress bars </h3>
	  </div>
		<div class="row-fluid">
		<div class="span4">
		  <h4>Basic</h4><br/>
		  <div class="progress">
			<div class="bar" style="width: 60%;"></div>
		  </div>
	<pre class="prettyprint linenums">
	&lt;div class="progress"&gt;
		&lt;div class="bar"
		style="width: 60%;"&gt;&lt;/div&gt;
	&lt;/div&gt;
	</pre>
		</div>
		<div class="span4">
		  <h4>Striped (no-IE)</h4><br/>
		  <div class="progress progress-striped">
			<div class="bar" style="width: 20%;"></div>
		  </div>
			<pre class="prettyprint linenums">
	&lt;div class="progress progress-striped"&gt;
		&lt;div class="bar"
		style="width: 20%;"&gt;&lt;/div&gt;
	&lt;/div&gt;
			</pre>
		</div>
		<div class="span4">
		  <h4>Animated (no IE)</h4><br/>
		  <div class="progress progress-striped active">
			<div class="bar" style="width: 45%"></div>
		  </div>
	<pre class="prettyprint linenums">
	&lt;div class="progress progress-striped
		 active"&gt;
	  &lt;div class="bar"
		   style="width: 40%;"&gt;&lt;/div&gt;
	&lt;/div&gt;
	</pre>
		</div>
	  </div>
	  <div class="row-fluid">
		<div class="span6">
		  <div class="progress progress-info" style="margin-bottom: 9px;">
			<div class="bar" style="width: 20%"></div>
		  </div>
		  <div class="progress progress-success" style="margin-bottom: 9px;">
			<div class="bar" style="width: 40%"></div>
		  </div>
		  <div class="progress progress-warning" style="margin-bottom: 9px;">
			<div class="bar" style="width: 60%"></div>
		  </div>
		  <div class="progress progress-danger" style="margin-bottom: 9px;">
			<div class="bar" style="width: 80%"></div>
		  </div>
		</div>
		 <div class="span6">
		  <div class="progress progress-info progress-striped" style="margin-bottom: 9px;">
			<div class="bar" style="width: 20%"></div>
		  </div>
		  <div class="progress progress-success progress-striped" style="margin-bottom: 9px;">
			<div class="bar" style="width: 40%"></div>
		  </div>
		  <div class="progress progress-warning progress-striped" style="margin-bottom: 9px;">
			<div class="bar" style="width: 60%"></div>
		  </div>
		  <div class="progress progress-danger progress-striped" style="margin-bottom: 9px;">
			<div class="bar" style="width: 80%"></div>
		  </div>
		</div>
		</div>

	</section>


	<!-- Miscellaneous
	================================================== -->
	<section id="form">
	  <div class="page-header">
		<h3>N. Form </h3>
	  </div>
	  <div class="row-fluid">
		<div class="span6">
			<form class="well form-inline">
			  <input type="text" class="input-small" placeholder="Email">
			  <input type="password" class="input-small" placeholder="Password">
			  <label class="checkbox">
				<input type="checkbox"> Remember me
			  </label>
			  <button type="submit" class="btn">Sign in</button>
			</form>
		</div>
		<div class="span6">
			<form class="well form-search">
			  <input type="text" class="input-medium search-query">
			  <button type="submit" class="btn">Search</button>
			</form>
		</div>
	  </div><!--/row-->
	  <div class="row-fluid">
		<div class="span6">
			<form class="form-inline">
			<fieldset>
			 <div class="control-group">
				<label class="control-label" for="input14">Text input</label>
				<div class="controls">
				  <input type="text" class="input-small" id="input14">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="input12">Text input</label>
				<div class="controls">
				  <input type="text" class="input-medium" id="input12">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="input13">Text input</label>
				<div class="controls">
				  <input type="text" class="input-xlarge" id="input13">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="input_1">Text input</label>
				<div class="controls">
				  <input type="text" class="input-xxlarge" id="input_1">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="select01">Select list</label>
				<div class="controls">
				  <select id="select01">
					<option>something</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				  </select>
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="fileInput">File input</label>
				<div class="controls">
				  <input class="input-file" id="fileInput" type="file">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="textarea">Textarea</label>
				<div class="controls">
				  <textarea class="input-xxlarge" id="textarea1" rows="3"></textarea>
				</div>
			  </div>		  
			  <div class="form-actions">
				<button type="submit" class="btn btn-primary">Save changes</button>
				<button class="btn">Cancel</button>
			  </div>
			</fieldset>
		  </form>
		</div>
		<div class="span6">
		<form class="form-horizontal">
			<fieldset>
			  <div class="control-group">
				<label class="control-label" for="input01">Text input</label>
				<div class="controls">
				  <input type="text" class="input-xlarge" id="input01">
				 
				</div>
			  </div>
			   <div class="control-group">
				<label class="control-label" for="input11">Text input</label>
				<div class="controls">
				  <input type="text" class="input-xlarge" id="input11">
				 
				</div>
			  </div>
			   <div class="control-group">
				<label class="control-label" for="textarea">Textarea</label>
				<div class="controls">
				  <textarea class="input-xlarge" id="textarea" rows="3" style="height:65px"></textarea>
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="optionsCheckbox">Checkbox</label>
				<div class="controls">
				  <label class="checkbox">
					<input type="checkbox" id="optionsCheckbox" value="option1"/>
				  </label>
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="select11">Select list</label>
				<div class="controls">
				  <select class="span9" id="select11">
					<option>something</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				  </select>
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="multiSelect">Multicon-select</label>
				<div class="controls">
				  <select class="span9" multiple="multiple" id="multiSelect">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				  </select>
				</div>
			  </div>
			 
			  <div class="control-group">
				<label class="control-label" for="appendedInputButton">Append with button</label>
				<div class="controls">
				  <div class="input-append">
					<input class="span10" id="appendedInputButton" size="44" type="text"><button class="btn" type="button">Go!</button>
				  </div>
				</div>
			  </div>
			  
			  <div class="control-group">
				<label class="control-label">Radio buttons</label>
				<div class="controls">
				  <label class="radio">
					<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
					Option one is this and that�be sure to include why it's great
				  </label>
				</div>
			  </div>
			  <div class="form-actions">
				<button type="submit" class="btn btn-primary">Save changes</button>
				<button class="btn">Cancel</button>
			  </div>
			</fieldset>
		  </form>
			
		</div>
	</div>
	</section>

	<section id="Table">
	  <div class="page-header">
		<h3>O. Table </h3>
	  </div>
	  <div class="row-fluid">
		<div class="span6">
			<table class="table">
			<thead>
			  <tr>
				<th>#</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Username</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<td>1</td>
				<td>Mark</td>
				<td>Otto</td>
				<td>@mdo</td>
			  </tr>
			  <tr>
				<td>2</td>
				<td>Jacob</td>
				<td>Thornton</td>
				<td>@fat</td>
			  </tr>
			  <tr>
				<td>3</td>
				<td>Larry</td>
				<td>the Bird</td>
				<td>@twitter</td>
			  </tr>
			</tbody>
		  </table>
		</div>
		<div class="span6">
			<table class="table table-striped">
			<thead>
			  <tr>
				<th>#</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Username</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<td>1</td>
				<td>Mark</td>
				<td>Otto</td>
				<td>@mdo</td>
			  </tr>
			  <tr>
				<td>2</td>
				<td>Jacob</td>
				<td>Thornton</td>
				<td>@fat</td>
			  </tr>
			  <tr>
				<td>3</td>
				<td>Larry</td>
				<td>the Bird</td>
				<td>@twitter</td>
			  </tr>
			</tbody>
		  </table>
		</div>
		</div>
		<div class="row-fluid">
			<div class="span6">
			<table class="table table-bordered">
			<thead>
			  <tr>
				<th>#</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Username</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<td rowspan="2">1</td>
				<td>Mark</td>
				<td>Otto</td>
				<td>@mdo</td>
			  </tr>
			  <tr>
				<td>Mark</td>
				<td>Otto</td>
				<td>@TwBootstrap</td>
			  </tr>
			  <tr>
				<td>2</td>
				<td>Jacob</td>
				<td>Thornton</td>
				<td>@fat</td>
			  </tr>
			  <tr>
				<td>3</td>
				<td>Jacob</td>
				<td>Thornton</td>
				<td>@fat</td>
			  </tr>
			  <tr>
				<td>4</td>
				<td>Jacob</td>
				<td>Thornton</td>
				<td>@fat</td>
			  </tr>
			  <tr>
				<td>5</td>
				<td>Jacob</td>
				<td>Thornton</td>
				<td>@fat</td>
			  </tr>
			  <tr>
				<td>6</td>
				<td colspan="2">Larry the Bird</td>
				<td>@twitter</td>
			  </tr>
			</tbody>
		  </table>
			</div>
			<div class="span6">
			<table class="table table-condensed">
			<thead>
			  <tr>
				<th>#</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Username</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<td>1</td>
				<td>Mark</td>
				<td>Otto</td>
				<td>@mdo</td>
			  </tr>
			  <tr>
			  
				<td>2</td>
				<td>Jacob</td>
				<td>Thornton</td>
				<td>@fat</td>
			  </tr>
			  <tr>
				<td>3</td>
				<td colspan="2">Larry the Bird</td>
				<td>@twitter</td>
			  </tr>
			</tbody>
		  </table>
		  <br/>
		  <table class="table table-striped table-bordered table-condensed">
			<thead>
			  <tr>
				<th></th>
				<th colspan="2">Full name</th>
				<th></th>
			  </tr>
			  <tr>
				<th>#</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Username</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<td>1</td>
				<td>Mark</td>
				<td>Otto</td>
				<td>@mdo</td>
			  </tr>
			  <tr>
				<td>2</td>
				<td>Jacob</td>
				<td>Thornton</td>
				<td>@fat</td>
			  </tr>
			  <tr>
				<td>3</td>
				<td colspan="2">Larry the Bird</td>
				<td>@twitter</td>
			  </tr>
			</tbody>
		  </table>
			</div>
		</div>
	</section>

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
			  <input id="appendedInputButton1"  placeholder="Enter your e-mail" type="text"/>
			  <button class="btn btn-warning" type="button">send </button>
			</div>
			</form>
		</div>
		<div class="span5">
		<h4>Latest news</h4>
		<ul class="media-list">
		  <li class="media">
			<a class="pull-left" href="blog_details.blade.php">
			  <img class="media-object" src="./resources/assets/themes/images/img64x64.png" alt="bootstrap business template">
			</a>
			<div class="media-body">
			  <h5 class="media-heading">Why our customers satisfied?</h5>
			  "To provide affordable web design and..."<br/>
			  <small><em>November 14, 2012</em> <a href="blog_details.blade.php"> More</a></small>
			</div>
		  </li>
		   <li class="media">
			<a class="pull-left" href="blog_details.blade.php">
			  <img class="media-object" src="./resources/assets/themes/images/img64x64.png" alt="bootstrap business template">
			</a>
			<div class="media-body">
			  <h5 class="media-heading">Why our customers satisfied?</h5>
			  "To provide affordable web design and..."<br/>
			  <small><em>November 14, 2012</em> <a href="blog_details.blade.php"> More</a></small>
			</div>
		  </li>
		   <li class="media">
			<a class="pull-left" href="blog_details.blade.php">
			  <img class="media-object" src="./resources/assets/themes/images/img64x64.png" alt="bootstrap business template">
			</a>
			<div class="media-body">
			  <h5 class="media-heading">Why our customers satisfied?</h5>
			  "To provide affordable web design and..."<br/>
			  <small><em>November 14, 2012</em> <a href="blog_details.blade.php"> More</a></small>
			</div>
		  </li>
		   <li class="media">
			<a class="pull-left" href="blog_details.blade.php">
			  <img class="media-object" src="./resources/assets/themes/images/img64x64.png" alt="bootstrap business template">
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
			<strong><a href="index.blade.php" title="business"><i class=" icon-home"></i> Business (p.) Ltd. </a></strong><br>
				194, Vectoria Street, Newwork <br>
				nw 488, USA<br>
			</address>
			Phone: <i class="icon-phone-sign"></i> &nbsp; 00123 456 000 789 <br>
			Email: <a href="contact.blade.php" title="contact"><i class="icon-envelope-alt"></i> info@companyltd.com</a><br/>
			Link: <a href="index.blade.php" title="Business ltd"><i class="icon-globe"></i> www.businessltd.com</a><br/><br/>
			<h5>Quick Links</h5>	
			<a href="services.blade.php" title="services"><i class="icon-cogs"></i> Services </a><br/>
			<a href="about.html" title=""><i class="icon-info-sign"></i> About us </a><br/>
			<a href="portfolio.blade.php" title="portfolio"><i class="icon-question-sign"></i> Portfolio </a><br/>

	<h5>Find us on</h5>	
	<div style="font-size:2.5em;">
		<a href="#facebook" role="button" data-toggle="modal" style="display:inline-block; width:1em"> <i class="icon-facebook-sign"> </i> </a> 
		<a href="#twitter" role="button" data-toggle="modal" title="" style="display:inline-block; width:1em"> <i class="icon-twitter-sign"> </i> </a>
		<a href="#youtube" role="button" data-toggle="modal" style="display:inline-block;width:1em"> <i class="icon-facetime-video"> </i> </a>
		<a href="#" title="" style="display:inline-block;width:1em"> <i class="icon-google-plus-sign"> </i> </a>
		<a href="#rss" role="button" data-toggle="modal" style="display:inline-block;width:1em" > <i class="icon-rss"> </i> </a>
		<!-- Facebook -->
		<div id="facebook" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="facebook" aria-hidden="true">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
			<h3>Facebook Header</h3>
		  </div>
		  <div class="modal-body">
			<p>"Our aim is simple - to provide affordable web design and development services for Mobile and Computer by creating websites that fully meet your requirements a professional look that inspire confidence in your customer."</p>
		  </div>
		  <div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			<button class="btn btn-primary">Save changes</button>
		  </div>
		</div>
		<!-- Twitter -->
		<div id="twitter" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="twitter" aria-hidden="true">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
			<h3>Twitter Header</h3>
		  </div>
		  <div class="modal-body">
			<p>"Our aim is simple - to provide affordable web design and development services for Mobile and Computer by creating websites that fully meet your requirements a professional look that inspire confidence in your customer."</p>
		  </div>
		  <div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			<button class="btn btn-primary">Save changes</button>
		  </div>
		</div>
		<!-- Rss feed -->
		<div id="rss" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="rss" aria-hidden="true">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
			<h3>RSS fed header</h3>
		  </div>
		  <div class="modal-body">
			<p>"Our aim is simple - to provide affordable web design and development services for Mobile and Computer by creating websites that fully meet your requirements a professional look that inspire confidence in your customer."</p>
		  </div>
		  <div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			<button class="btn btn-primary">Save changes</button>
		  </div>
		</div>
		<!-- Youtube -->
		<div id="youtube" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="youtube" aria-hidden="true">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
			<h3>Youtube Vedio</h3>
		  </div>
		  <div class="modal-body">
			<iframe style="min-width:420px; min-height:315px; border:0" src="http://www.youtube.com/embed/tlfq6d8Lpuc" ></iframe>
		  </div>
		  <div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			<button class="btn btn-primary">Save changes</button>
		  </div>
		</div>


		
		
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
<span id="themesBtn"></span>
</body>
</html>