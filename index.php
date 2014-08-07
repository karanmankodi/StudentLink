<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>University Student Link</title>
<link href="./Styles/CSS/bootstrap-theme.min.css" rel="stylesheet">
<link href="./Styles/CSS/bootstrap.min.css" rel="stylesheet">
<link href="./Styles/CSS/Custom.css" rel="stylesheet">
<link href="./Styles/CSS/weather-background.css" rel="stylesheet">
<link href="./Styles/CSS/homepage-icons.css" rel="stylesheet">
<script src="./Styles/JS/jquery-1.8.3.min.js"> </script>
<script src="./Styles/JS/jquery-2.0.3.min.js"> </script>
<script src="./Styles/JS/jquery.slides.min.js"> </script>
<script src="./Styles/JS/bootstrap.min.js"> </script>
<script src="./Styles/JS/jquery.rwdImageMaps.min.js"> </script>
<script src="./Styles/JS/jquery.jscroll.min.js"> </script>
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
	} 
?>
<script>
	$(document).ready(function() {
		
		//news maps
		$('img[usemap]').rwdImageMaps();
		
		//slideshow
		$("#slideshow").slidesjs({
			navigation: {
				active: false,
				effect: "fade"
			},
			play: {
				active: true,
				effect: "fade",
				interval: 5000,
				auto: true,
				swap: false,
				pauseOnHover: true,
				restartDelay: 2500
			},
			pagination: {
				active: false
			},
			width: 600,
			height: 400
		});
		
		//current events 
		$('.scroll').jscroll();
		
		//icon-animations
		$("#academics-div").mouseenter(function() {
			$("#academics-list").height($("#academics-icon").height());
			$("#academics-icon").hide("slow");
			$("#academics-list").show("slow");
		});
		$("#academics-div").mouseleave(function() {
			$("#academics-list").hide("slow");
			$("#academics-icon").show("slow");
		});
		$("#personal-icon").mouseenter(function() {
			$("#personal-list").height($("#personal-icon").height());
			$("#personal-icon").hide("slow");
			$("#personal-list").show("slow");
		});
		$("#personal-list").mouseleave(function() {
			$("#personal-list").hide("slow");
			$("#personal-icon").show("slow");
		});
		$("#moneymatters-icon").mouseenter(function() {
			$("#moneymatters-list").height($("#moneymatters-icon").height());
			$("#moneymatters-icon").hide("slow");
			$("#moneymatters-list").show("slow");
		});
		$("#moneymatters-list").mouseleave(function() {
			$("#moneymatters-list").hide("slow");
			$("#moneymatters-icon").show("slow");
		});
		$("#work-icon").mouseenter(function() {
			$("#work-list").height($("#work-icon").height());
			$("#work-icon").hide("slow");
			$("#work-list").show("slow");
		});
		$("#work-list").mouseleave(function() {
			$("#work-list").hide("slow");
			$("#work-icon").show("slow");
		});
		$("#foodshelter-icon").mouseenter(function() {
			$("#foodshelter-list").height($("#foodshelter-icon").height());
			$("#foodshelter-icon").hide("slow");
			$("#foodshelter-list").show("slow");
		});
		$("#foodshelter-list").mouseleave(function() {
			$("#foodshelter-list").hide("slow");
			$("#foodshelter-icon").show("slow");
		});
		$("#basics-icon").mouseenter(function() {
			$("#basics-list").height($("#basics-icon").height());
			$("#basics-icon").hide("slow");
			$("#basics-list").show("slow");
		});
		$("#basics-list").mouseleave(function() {
			$("#basics-list").hide("slow");
			$("#basics-icon").show("slow");
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
		
		// Login
		$("#login-username").blur(function() {
			var input = $(this).val();
			input = input.replace(/\s/g, '');
			if (input.length <= 0)
			{
				alert("Username cannot be blank");
			} else {
				$("#login-password").removeAttr("disabled");
				$("#btn-login").removeAttr("disabled"); 
			}
		});
		$("#btn-login").click(function() {
			var inputs='username='+$("#login-username").val()+
                   '&password='+$("#login-password").val();
			request = $.ajax ({
				type: "post",
				url: "Login.php?action=login",
				data: inputs,
       			success: function() {
       				$user = strval($_SESSION["username"]);
					$loginstatus = $_SESSION["login"];
					if ($_SESSION["username"] != ""){
						$(document).ready(function() {
							$('#login-btn').html('$user');
							$('#login-btn').prop('disabled',true);
							$('#logout-btn-div').show();
							$('.after-login').css('display','block');
							alert("Welcome $user");
						});  
					} 
				},
				beforeSend:function() {
    				$("#btn-login").html("Loading...")
   				},
				error:function() {
					alert("Error logging in.");
				}
			});
		});
		
		
	});
</script>


</head>

<body class="">

<div class="container">

<!-- Header -->
	<header>
    	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 navbar-fixed-top navbar-inverse" id="header">
        	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
        		<a href="Index.php" class="btn" id="home-btn"><img src="./Images/Logo.jpg" class="img-responsive" alt="logo" id="img-logo" height="80" width="196"> </a>
            </div>
            <div class="col-lg-7 col-md-5 col-sm-5 hidden-xs" align="center">
        		<h1 id="header-h1"> Student  L<i>i</i>nk </h1>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
            	<button class="btn btn-default btn-lg" data-toggle="modal" data-target="#login-box" id="login-btn">
                Login
                </button>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4" id="logout-btn-div" hidden="true">
            	<a href="Login.php?action=logout" name="logout-btn" class="btn btn-default btn-lg" id="logout-btn">
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

<div class="row">
<!-- Slideshow -->
    <div class="col-lg-8 col-md-8 hidden-sm hidden-xs slideshow well" id="slideshow">
    	<img src="./Images/News/News1.png" class="img-responsive" height="400" width="600" usemap="#news1_map"/>
        <img src="./Images/News/News2.png" class="img-responsive" height="400" width="600" usemap="#news2_map"/>
        <img src="./Images/News/News3.png" class="img-responsive" height="400" width="600" usemap="#news3_map"/>
        <img src="./Images/News/News4.png" class="img-responsive" height="400" width="600" usemap="#news4_map"/>
    </div>    
<!-- Slideshow ends -->
<!-- Slideshow image maps -->
<map name="news1_map" id="news1_map">
	<area shape="poly" coords=" 29,273, 697,271, 698,305, 273,306, 273,341, 30,342, 30,276" href="http://bunewsservice.com/night-riders-hundreds-of-cyclists-bike-marathon-route-at-midnight/" target="_blank" alt="news1"/>
</map>

<map name="news2_map" id="news2_map">
	<area shape="poly" coords=" 30,271, 652,270, 652,307, 119,307, 120,343, 29,343, 28,273" href="http://bunewsservice.com/thousands-gather-to-honor-mit-police-officer-sean-collier-on-the-anniversary-of-his-death/" target="_blank" alt="news2"/>
</map>

<map name="news3_map" id="news3_map">
	<area shape="poly" coords=" 30,271, 29,272, 249,272, 249,306, 245,308, 245,340, 28,342, 29,276" href="http://bunewsservice.com/marathon-2014-racing-forward/" target="_blank" alt="news3"/>
</map>

<map name="news4_map" id="news4_map">
	<area shape="poly" coords=" 29,272, 673,270, 674,307, 289,308, 288,343, 28,343, 31,276" href="http://bunewsservice.com/rucking-on-military-men-and-women-walk-26-2-miles-for-the-fallen/" target="_blank" alt="news4"/>
</map>
<!-- Slideshow Image Maps ends -->


<!-- Current Events -->
	<div class="col-lg-4 col-md-4 hidden-sm hidden-xs well pre-scrollable" id="currentevents">
    	<h3 class="text-center"> Current Events </h3>
    	<div class="scroll">
		<h3>Pitching In Around The World</h3>
        <img src="./Images/CurrentEvents/Event1.jpg" height="100%" width="100%" class="img-responsive" />
        <p>On April 5, Amy Robertson will be packing up food for a hunger-relief initiative in Beirut, Lebanon. On April 26, Matthew Smith will be cleaning up a riverside park in Stamford, Conn.

The two alums will be among thousands of BU alumni, faculty, staff, and students volunteering throughout April during the fifth annual Global Days of Service, a collaboration between the BU Alumni Association and the Community Service Center. In 2013, more than 3,200 volunteers served at 104 projects in 51 cities worldwide.

"We encourage all of BU to participate," says Susan Richardson, director of alumni programs and events. "We want to continue to strengthen the tradition of service that has been important to BU since its founding. We hope that alumni, faculty, staff, and friends feel a sense of pride in the impact that BU is having on the world by getting involved in worthwhile service opportunities."

</p>
        <a href="./Event2.html">Next Page</a>
        </div>
	</div>
<!-- Current Events ends -->

</div>
<!-- Menu icons -->
    <div id="menu-icons">
            <div class="col-md-4 col-sm-6 col-xs-12 menu-div" id="academics-div">
            	<div  id="academics-icon">
                <img src="./Images/academics-icon.jpg" class="img-responsive" height="100%" width="100%" />
                </div>
                <div id="academics-list" hidden="true">
                    <ul class="nav">
                        <li class="list-group-item-heading h3 text-center"> Academics </li>
                        <li> <a href="#" class="btn btn-default btn-block"> Class Schedule </a> </li>
                        <li> <a href="./Courses.php" class="btn btn-default btn-block"> Course Catalog </a> </li>
                        <li> <a href="./Calendar.php" class="btn btn-default btn-block"> Academics Calendar </a> </li>
                        <li> <a href="./DownloadableForms.php" class="btn btn-default btn-block"> Downloadable Forms </a> </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 menu-div" id="personal-div">
                <div id="personal-icon">
                <img src="./Images/personal-icon.jpg" class="img-responsive" height="100%" width="100%"  />
                </div>
                <div id="personal-list" hidden="true">
                    <ul class="nav">
                        <li class="list-group-item-heading h3 text-center"> Personal </li>
                        <li class="after-login"> <a href="#" class="btn btn-default btn-block after-login"> My Profile </a> </li>
                        <li> <a href="#" class="btn btn-default btn-block"> FitRec Membership </a> </li>
                        <li class="after-login"> <a href="./EMail.php" class="btn btn-default btn-block after-login"> Check EMail </a> </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 menu-div" id="moneymatters-div">
            	<div id="moneymatters-icon">
                <img src="./Images/moneymatters-icon.jpg" class="img-responsive" height="100%" width="100%" />
                </div>
                <div id="moneymatters-list" hidden="true">
                    <ul class="nav">
                        <li class="list-group-item-heading h3 text-center"> Money Matters </li>
                        <li class="after-login"> <a href="#" class="btn btn-default btn-block"> Student Account Inquiry </a> </li>
                        <li class="after-login"> <a href="#" class="btn btn-default btn-block"> Financial Aid Status </a> </li>
                        <li> <a href="#" class="btn btn-default btn-block"> Student Account FAQs </a> </li>
                    </ul>
                </div>
        </div>
            <div class="col-md-4 col-sm-6 col-xs-12 menu-div" id="work-div">
                <div id="work-icon">
                <img src="./Images/work-icon.jpg" class="img-responsive" height="100%" width="100%" />
                </div>
                <div id="work-list" hidden="true">
                    <ul class="nav">
                        <li class="list-group-item-heading h3 text-center"> Work </li>
                        <li> <a href="#" class="btn btn-default btn-block"> Student Employment Office </a> </li>
                        <li class="after-login"> <a href="#" class="btn btn-default btn-block"> Job Listings </a> </li>
                        <li> <a href="#" class="btn btn-default btn-block"> Career Advisory </a> </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 menu-div" id="foodshelter-div">
                <div id="foodshelter-icon">
                <img src="./Images/foodandshelter-icon.jpg" class="img-responsive" height="100%" width="100%"  />
                </div>
                <div id="foodshelter-list" hidden="true">
                    <ul class="nav">
                        <li class="list-group-item-heading h3 text-center"> Food & Shelter </li>
                        <li class="after-login"> <a href="#" class="btn btn-default btn-block"> Residence Assignment </a> </li>
                        <li class="after-login"> <a href="#" class="btn btn-default btn-block"> Convenience Points </a> </li>
                        <li> <a href="#" class="btn btn-default btn-block"> Off Campus Housing </a> </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 menu-div" id="basics-div">
            	<div  id="basics-icon">
                <img src="./Images/basics-icon.jpg" class="img-responsive" height="100%" width="100%" />
                </div>
                <div id="basics-list" hidden="true">
                    <ul class="nav">
                        <li class="list-group-item-heading h3 text-center"> Basics </li>
                        <li> <a href="#" class="btn btn-default btn-block"> Getting Started </a> </li>
                        <li class="after-login"> <a href="#" class="btn btn-default btn-block"> Student Central </a> </li>
                        <li> <a href="./CampusMap.php" class="btn btn-default btn-block"> Campus Map </a> </li>
                        <li> <a href="#" class="btn btn-default btn-block"> Report a Problem </a> </li>
                    </ul>
                </div>
         </div>
    </div>
<!-- Menu icons end -->


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


<!-- Login box -->
    <div class="modal fade" id="login-box" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel"> Login </h4>
                </div>
                <div class="modal-body">
                    <form id="loginform" class="form-horizontal" role="form" method="post">
                    <div style="margin-bottom: 25px">
                        <input id="login-username" type="text" class="form-control" name="username" value=""placeholder="username or email" width="100%">      
                    </div>
                    <div style="margin-bottom: 35px">
                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password" disabled="disabled" width="100%">
                    </div>
                    <div style="margin-top:10px" class="form-group">
                        <div class="col-sm-12 controls" align="center">
                            <input type="submit" name="submit" id="btn-login" disabled="disabled" class="btn btn-success text-center" />
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- Login box ends -->

</body>
</html>
