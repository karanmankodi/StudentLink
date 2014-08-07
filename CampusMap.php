<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Campus Map</title>
<link href="./Styles/CSS/bootstrap-theme.min.css" rel="stylesheet">
<link href="./Styles/CSS/bootstrap.min.css" rel="stylesheet">
<link href="./Styles/CSS/Custom.css" rel="stylesheet">
<link href="./Styles/CSS/weather-background.css" rel="stylesheet">
<link href="./Styles/CSS/homepage-icons.css" rel="stylesheet">
<script src="./Styles/JS/jquery-1.8.3.min.js"> </script>
<script src="./Styles/JS/jquery-2.0.3.min.js"> </script>
<script src="./Styles/JS/jquery.slides.min.js"> </script>
<script src="./Styles/JS/bootstrap.min.js"> </script>
<?php
	$user = strval($_SESSION["username"]);
	$loginstatus = $_SESSION["login"];
	if ($_SESSION["username"] != ""){
		echo 
		"<script>
			$(document).ready(function() {
				$('#login-btn').html('$user');
				$('#login-btn').prop('disabled',true);
				$('#logout-btn-div').show();
				$('.after-login').removeClass('after-login');
			});
		</script>";  
	}
?>
<script>
$(document).ready(function() {
			//menu-buttons
	$("#acads-btn").mouseenter(function() {
		$("#acads-menu-list").show("slow");
	});
	$("#acads-menu-list").mouseleave(function() {
		$("#acads-menu-list").hide("slow");
	});
	$("#money-btn").mouseenter(function() {
		$("#money-menu-list").show("slow");
	});
	$("#money-menu-list").mouseleave(function() {
		$("#money-menu-list").hide("slow");
	});
	$("#personal-btn").mouseenter(function() {
		$("#personal-menu-list").show("slow");
	});
	$("#personal-menu-list").mouseleave(function() {
		$("#personal-menu-list").hide("slow");
	});
	$("#work-btn").mouseenter(function() {
		$("#work-menu-list").show("slow");
	});
	$("#work-menu-list").mouseleave(function() {
		$("#work-menu-list").hide("slow");
	});
	$("#food-btn").mouseenter(function() {
		$("#food-menu-list").show("slow");
	});
	$("#food-menu-list").mouseleave(function() {
		$("#food-menu-list").hide("slow");
	});
	$("#basics-btn").mouseenter(function() {
		$("#basics-menu-list").show("slow");
	});
	$("#basics-menu-list").mouseleave(function() {
		$("#basics-menu-list").hide("slow");
	});

	
	//campus-map
	$("#map1").hover(function() {
		$("#item1").slideToggle('slow', 'linear');
	});
	$("#map2").hover(function() {
		$("#item2").slideToggle('slow', 'linear');
	});
	$("#map3").hover(function() {
		$("#item3").slideToggle('slow', 'linear');
	});
	$("#map4").hover(function() {
		$("#item4").slideToggle('slow', 'linear');
	});
	$("#map5").hover(function() {
		$("#item5").slideToggle('slow', 'linear');
	});
	
		//footer
	$("#facebook-grey").mouseenter(function() {
		$("#facebook-grey").hide();
		$("#facebook-blue").show();
		$(this).tooltip();
	});
	$("#facebook-blue").mouseleave(function() {
		$("#facebook-blue").hide();
		$("#facebook-grey").show();
		$(this).tooltip();
	});
	$("#twitter-grey").mouseenter(function() {
		$("#twitter-grey").hide();
		$("#twitter-blue").show();
		$(this).tooltip();
	});
	$("#twitter-blue").mouseleave(function() {
		$("#twitter-blue").hide();
		$("#twitter-grey").show();
		$(this).tooltip();
	});
});
</script>
</head>

<body>

<!-- Header -->
	<header>
    	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 navbar-fixed-top navbar-inverse" id="header">
        	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
        		<a href="./Index.php" class="btn" id="home-btn"><img src="Images/Logo.jpg" class="img-responsive" alt="logo" id="img-logo" height="80" width="196"> </a>
            </div>
            <div class="col-lg-7 col-md-5 col-sm-5 hidden-xs" align="center">
        		<h1 id="header-h1" class="h1"> Student  L<i>i</i>nk </h1>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-6" id="logout-btn-div" hidden="true">
            	<a href="./Login.php?action=logout" name="logout-btn" class="btn btn-default btn-lg" id="logout-btn">
                Logout
                </a>
            </div>
            
            <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs">
            	<a href="#" class="aw-widget-legal"> </a>
                <div id="awcc1396594091886" class="aw-widget-current"  data-locationkey="348735" data-unit="f" data-language="en-us"data-useip="false" data-uid="awcc1396594091886">
                </div>
				<script type="text/javascript" src="http://oap.accuweather.com/launch.js"> </script>
            </div>
        </div>
    </header>
<!-- Header ends -->

<!-- Menu -->
<div id="acads-menu-bar" class="navbar-fixed-top-custom navbar-inverse navbar-default navbar-brand btn-group-justified" role="navigation">
    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
        <button class="btn btn-primary btn-block" id="acads-btn"> Academics </button>
        <ul class="nav" hidden="true" id="acads-menu-list">
            <li> <a href="#" class="btn btn-default btn-block"> Class Schedule </a> </li>
            <li> <a href="./Courses.php" class="btn btn-default btn-block"> Course Catalog </a> </li>
            <li> <a href="./Calendar.php" class="btn btn-default btn-block"> Academics Calendar </a> </li>
            <li> <a href="./DownloadableForms.php" class="btn btn-default btn-block"> Downloadable Forms </a> </li>
        </ul>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
        <button class="btn btn-primary btn-block" id="personal-btn"> Personal </button>
        <ul class="nav" hidden="true" id="personal-menu-list">
            <li class="after-login"> <a href="#" class="btn btn-default btn-block"> My Profile </a> </li>
            <li> <a href="#" class="btn btn-default btn-block"> FitRec Membership </a> </li>
            <li class="after-login"> <a href="./EMail.php" class="btn btn-default btn-block"> Check EMail </a> </li>
        </ul>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
        <button class="btn btn-primary btn-block" id="money-btn"> Money Matters </button>
        <ul class="nav" hidden="true" id="money-menu-list">
            <li class="after-login"> <a href="#" class="btn btn-default btn-block"> Student Account Inquiry </a> </li>
            <li class="after-login"> <a href="#" class="btn btn-default btn-block"> Financial Aid Status </a> </li>
            <li> <a href="#" class="btn btn-default btn-block"> Student Account FAQs </a> </li>
        </ul>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
        <button class="btn btn-primary btn-block" id="work-btn"> Work </button>
        <ul class="nav" hidden="true" id="work-menu-list">
        	<li> <a href="#" class="btn btn-default btn-block"> Student Employment </a> </li>
            <li class="after-login"> <a href="#" class="btn btn-default btn-block"> Job Listings </a> </li>
            <li> <a href="#" class="btn btn-default btn-block"> Career Advisory </a> </li>
        </ul>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
        <button class="btn btn-primary btn-block" id="food-btn"> Food & Shelter </button>
        <ul class="nav" hidden="true" id="food-menu-list">
        	<li class="after-login"> <a href="#" class="btn btn-default btn-block"> Residence Assignment </a> </li>
            <li class="after-login"> <a href="#" class="btn btn-default btn-block"> Convenience Points </a> </li>
            <li> <a href="#" class="btn btn-default btn-block"> Off Campus Housing </a> </li>
        </ul>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
        <button class="btn btn-primary btn-block" id="basics-btn"> Basics </button>
        <ul class="nav" hidden="true" id="basics-menu-list">
        	<li> <a href="#" class="btn btn-default btn-block"> Getting Started </a> </li>
            <li class="after-login"> <a href="#" class="btn btn-default btn-block"> Student Central </a> </li>
            <li> <a href="./CampusMap.php" class="btn btn-default btn-block"> Campus Map </a> </li>
            <li> <a href="#" class="btn btn-default btn-block"> Report a Problem </a> </li>
        </ul>
    </div>
</div>
<!-- Menu ends -->

<div class="text-center">
	<h2 class="h2"> Hover over the map to see the campus! </h2>
</div>
<!-- Campus Map -->

<img src="./Images/CampusMap/main_map.gif" class="img-responsive" width="100%" height="100%" alt="Insert Alt" usemap="#image_map" border="0">

<map name="image_map" id="image_map">
	<area shape="poly" id="map1" coords=" 1,1, 4,280, 196,281, 185,82, 4,2" alt="red hotspot" href="#" title="" rel="tooltip"/>
	<area shape="poly" id="map2" coords=" 203,86, 212,282, 423,281, 424,101, 206,87" alt="green hotspot" href="#" title="" rel="tooltip"/>
	<area shape="poly" id="map3" coords=" 434,103, 437,279, 598,277, 596,194, 724,193, 724,98, 436,102" alt="purple hotspot" href="#" title="" rel="tooltip"/>
	<area shape="poly" id="map4" coords=" 603,200, 604,277, 977,280, 981,193, 606,202" alt="yellow hotspot" href="#" title="" rel="tooltip"/>
	<area shape="poly" id="map5" coords=" 733,97, 732,193, 1022,192, 1031,218, 1068,219, 1127,130, 1062,92, 736,98" alt="olive hotspot" href="#" title="" rel="tooltip"/>
</map>

<!-- Campus Map ends -->

<!-- Detailed images -->
<div align="center">
	<div id="img1" class="campusmap-img1-div img-responsive">
        <img id="item1" class="campusmap-img-size" src="./Images/CampusMap/img1.jpg" hidden="true" height="300" width="900"/>
    </div>
    <div id="img2" class="campusmap-img2-div img-responsive">
        <img id="item2" class="campusmap-img-size" src="./Images/CampusMap/img2.jpg" hidden="true" height="300" width="900" />
    </div>
    <div id="img3" class="campusmap-img3-div img-responsive">
        <img id="item3" class="campusmap-img-size" src="./Images/CampusMap/img3.jpg" hidden="true" height="300" width="900"/>
    </div>
    <div id="img4" class="campusmap-img4-div img-responsive">
        <img id="item4" class="campusmap-img-size" src="./Images/CampusMap/img4.jpg" hidden="true" height="300" width="900"/>
    </div>
    <div id="img5" class="campusmap-img5-div img-responsive">
        <img id="item5" class="campusmap-img-size" src="./Images/CampusMap/img5.jpg" hidden="true" height="300" width="900"/>
    </div>
</div>

<!-- Detailed images ends -->

<!-- Footer -->
<div id="footer">
	<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
    	<h5> University, Boston, MA 02115 </h5>
    </div>
    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" id="facebook">
    	<a title="Like us!" href="www.facebook.com" id="facebook-grey" rel="tooltip"> <img src="./Images/facebook-grey.png" width="30" height="30" /> </a>
    	<a title="Like us!" href="www.facebook.com" id="facebook-blue" rel="tooltip" hidden="true"> <img src="./Images/facebook-blue.png" width="30" height="30" /> </a>
    </div>
    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" id="facebook">
    	<a title="Follow us!" href="www.twitter.com" id="twitter-grey" rel='tooltip'> <img src="./Images/twitter-grey.png" width="30" height="30" /> </a>
    	<a title="Follow us!" href="www.twitter.com" id="twitter-blue" rel='tooltip' hidden="true"> <img src="./Images/twitter-blue.png" width="30" height="30" /> </a>
    </div>
</div>

<!-- Footer ends -->

</body>
</html>
