

<!DOCTYPE html>
<html lang="en">


<head>
	<title>@yield('title')</title>

	<meta charset="utf-8">
        <meta name="robots" content="all,follow">
        <meta name="googlebot" content="index,follow,snippet,archive">
        <meta name=title content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="" />
        <meta name=keywords content="" />

	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,800,900,200,100' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Noticia+Text:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,400,200,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>


	<link rel="stylesheet" type="text/css" href="https://iseeyou.com.tw/sweet_theme/css/bootstrap.css" media="screen">	

        <!-- REVOLUTION BANNER CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="https://iseeyou.com.tw/sweet_theme/css/fullwidth.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="https://iseeyou.com.tw/sweet_theme/css/settings.css" media="screen" />

	<link rel="stylesheet" type="text/css" href="https://iseeyou.com.tw/sweet_theme/css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="https://iseeyou.com.tw/sweet_theme/css/jquery.bxslider.css" media="screen">
	<link rel="stylesheet" type="text/css" href="https://iseeyou.com.tw/sweet_theme/css/style.css" media="screen">
	<link rel="stylesheet" type="text/css" href="https://iseeyou.com.tw/sweet_theme/css/responsive.css" media="screen">



</head>

<style type="text/css"> 

#img {
    display: block;
    width: 100%;
    height: 215px;

    background-repeat: no-repeat;
    background-size: 100% auto;
}
#title h1 {font-family:Microsoft JhengHei;}
#title h2 {font-family:Microsoft JhengHei;}
#title h3 {font-family:Microsoft JhengHei;}
#title h4 {font-family:Microsoft JhengHei;}
</style>

<body>

		
        <!-- Header
            ================================================== -->
        <header class="clearfix">

            <div class="top-line">
                <div class="container">
                    <div class="right-line clearfix">
                        <ul>
                                <li><a href='/car/announce'>管理</a></li><li><a href='#'>登入</a></li>
                        </ul>
                        <div class="mobile-version">
                                <a href='/car/announce'>管理</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='#'>登入</a>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <!-- end topline -->

            <div class="upper-header">
                <div class="container">

                    <div class="logo">
                            <a href="/"><img src="https://laravel.com/assets/img/components/logo-laravel.svg" alt="好食集散地 iSeeYou" height="60px"></a>
                    </div>

                    <div class="clear"><br></div>

                </div>
                <!-- End container -->
            </div>
            <!-- End Upper-header -->

            <div class="nav-border"></div>
            <div class="container">
                <!-- Navigation -->
                <nav id="nav">
                    <ul id="navlist" class="sf-menu clearfix">
                            <li class=""><a href="../">預約租車</a></li>
                            <li><a href="/booking/list">預約查詢</a></li>
                    </ul>
                </nav>
            </div>


        </header>
        <!-- End Header -->

	<!-- Container -->
        <div id="container">
                <!-- content -->
                @yield('content')
                
        </div>
	<!-- end content -->	

        <!-- footer -->
        <footer class="banner-footer">
            <!-- end contanir & inner-footer -->
            <div class="nocontainer">
                <div class="last-div">
                    <div class="row">
                        <div class="col-md-12">
                                <center><span style="font-family:Microsoft JhengHei;">&copy; 2018 拉拉租車  All Rights Reserved.</span></center>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
        <!-- End footer -->


	<script type="text/javascript" src="https://iseeyou.com.tw/sweet_theme/js/jquery.min.js"></script>
	<script type="text/javascript" src="https://iseeyou.com.tw/sweet_theme/js/jquery.superfish.js"></script>
	<script type="text/javascript" src="https://iseeyou.com.tw/sweet_theme/js/jquery.bxslider.js"></script>
	<script type="text/javascript" src="https://iseeyou.com.tw/sweet_theme/js/bootstrap.js"></script>
	<script type="text/javascript" src="https://iseeyou.com.tw/sweet_theme/js/jquery.nicescroll.min.js"></script>
  	<script type="text/javascript" src="https://iseeyou.com.tw/sweet_theme/js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="https://iseeyou.com.tw/sweet_theme/js/jquery.imagesloaded.min.js"></script>
        <!-- jQuery KenBurn Slider  -->
        <script type="text/javascript" src="https://iseeyou.com.tw/sweet_theme/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="https://iseeyou.com.tw/sweet_theme/js/script.js"></script>



	
</body>
</html>
