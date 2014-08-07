<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>My Calendar</title>
<link href="./Styles/CSS/bootstrap-theme.min.css" rel="stylesheet">
<link href="./Styles/CSS/bootstrap.min.css" rel="stylesheet">
<link href="./Styles/CSS/Custom.css" rel="stylesheet">
<script src="./Styles/JS/jquery-1.8.3.min.js"> </script>
<script src="./Styles/JS/jquery-2.0.3.min.js"> </script>
<script src="./Styles/JS/bootstrap.min.js"> </script>
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
<?php
		$user = strval($_SESSION["username"]);
		$loginstatus = $_SESSION["login"];
		if ($_SESSION["username"] != "") {
			echo 
			"<script>
				$(document).ready(function() {
					$('#login-btn').html('$user');
					$('#login-btn').prop('disabled',true);
					$('#logout-btn-div').show();
					$('.after-login').removeClass('after-login');
				});
			</script>";  
			if($user == "karan") {
				echo 
				"<script>
					$(document).ready(function() {
						$('#karan-calendar').show();
					});
				</script>";  
			}
			if($user == "mustan") {
				echo 
				"<script>
					$(document).ready(function() {
						$('#mustan-calendar').show();
					});
				</script>"; 
			}
			if($user == "asif") {
				echo 
				"<script>
					$(document).ready(function() {
						$('#asif-calendar').show();
					});
				</script>"; 
			}
			if($user == "jayneel") {
				echo 
				"<script>
					$(document).ready(function() {
						$('#karan-calendar').show();
					});
				</script>";
			}
		}

?>
<!-- Header -->
	<header>
    	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 navbar-fixed-top navbar-inverse" id="header">
        	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
        		<a href="./Index.php" class="btn" id="home-btn"><img src="./Images/Logo.jpg" class="img-responsive" alt="logo" id="img-logo" height="80" width="196"> </a>
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


<!-- Calendars -->
<div class="col-lg-12 col-md-12 col-sm-12 content-below-menu clearfix">
<iframe id="karan-calendar" src="https://www.google.com/calendar/embed?title=Interactive%20Python%20Spring%202014%20Calendar&amp;height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=interactivepythonspring2013%40gmail.com&amp;color=%232952A3&amp;ctz=America%2FNew_York" style=" border-width:0 " width="100%" height="600" frameborder="0" scrolling="no" hidden="true"></iframe>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 content-below-menu clearfix">
<iframe id="mustan-calendar" src="https://www.google.com/calendar/embed?title=Holidays%20in%20United%20States&amp;height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=en.usa%23holiday%40group.v.calendar.google.com&amp;color=%23875509&amp;ctz=America%2FNew_York" style=" border-width:0 " width="100%" height="600" frameborder="0" scrolling="no" hidden="true"></iframe>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 content-below-menu clearfix">
<iframe id="asif-calendar" src="https://www.google.com/calendar/embed?title=Birthdays&amp;height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=%23contacts%40group.v.calendar.google.com&amp;color=%232F6309&amp;ctz=America%2FNew_York" style=" border-width:0 " width="100%" height="600" frameborder="0" scrolling="no" hidden="true"></iframe>
</div>
<!-- Calendars end -->

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