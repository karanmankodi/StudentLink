<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Courses</title>
<link href="./Styles/CSS/bootstrap-theme.min.css" rel="stylesheet">
<link href="./Styles/CSS/bootstrap.min.css" rel="stylesheet">
<link href="./Styles/CSS/Custom.css" rel="stylesheet">
<link href="./Styles/CSS/weather-background.css" rel="stylesheet">
<link href="./Styles/CSS/homepage-icons.css" rel="stylesheet">
<link href="./Styles/CSS/courses.css" rel="stylesheet">
<script src="./Styles/JS/jquery-1.8.3.min.js"> </script>
<script src="./Styles/JS/jquery-2.0.3.min.js"> </script>
<script src="./Styles/JS/jquery.slides.min.js"> </script>
<script src="./Styles/JS/bootstrap.min.js"> </script>
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
						$('#filter-program').val('Information Systems');
					});
				</script>";  
			}
			if($user == "mustan") {
				echo 
				"<script>
					$(document).ready(function() {
						$('#filter-program').val('Information Systems');
					});
				</script>"; 
			}
			if($user == "asif") {
				echo 
				"<script>
					$(document).ready(function() {
						$('#filter-program').val('Computer Science');
					});
				</script>"; 
			}
			if($user == "jayneel") {
				echo 
				"<script>
					$(document).ready(function() {
						$('#filter-program').val('Telecommunications Systems');
					});
				</script>"; 
			}
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
	
	//course-table-details
	$("#details1").click(function() {
		$("#details-1").toggle();
	});
	$("#details2").click(function() {
		$("#details-2").toggle();
	});
	$("#details3").click(function() {
		$("#details-3").toggle();
	});
	$("#details4").click(function() {
		$("#details-4").toggle();
	});
	$("#details5").click(function() {
		$("#details-5").toggle();
	});
	$("#details6").click(function() {
		$("#details-6").toggle();
	});
	$("#details7").click(function() {
		$("#details-7").toggle();
	});
	$("#details8").click(function() {
		$("#details-8").toggle();
	});
	$("#details9").click(function() {
		$("#details-9").toggle();
	});
	$("#details10").click(function() {
		$("#details-10").toggle();
	});
	$("#details11").click(function() {
		$("#details-11").toggle();
	});
	$("#details12").click(function() {
		$("#details-12").toggle();
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
		
	//table filter	
	$('input.filter').on('keyup', function() {
   		var rex = new RegExp($(this).val(), 'i');
   		$('.searchable tr:even').hide();
        $('.searchable tr:even').filter(function() {
            return rex.test($(this).text());
        }).show();
    });
});
</script>

<?php include 'weather.php'; ?>
</head>

<body>
<!-- Header -->
	<header>
    	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 navbar-fixed-top navbar-inverse" id="header">
        	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
        		<a href="Index.php" class="btn" id="home-btn"><img src="./Images/Logo.jpg" class="img-responsive" alt="logo" id="img-logo" height="80" width="196"> </a>
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


<!-- Courses Table -->
<div id="main-table-div" class="content-below-menu">
	<h2 class="h2 text-center"> Course Catalog </h2>
    <br />
    <table class="table-hover table table-responsive">
    	<tr id="row-heading">
        	<td class="table-heading">  </td>
            <td class="table-heading"> TERM </td>
            <td class="table-heading"> PROGRAM </td>
            <td class="table-heading"> CRN </td>
            <td class="table-heading"> COURSE NAME </td>
            <td class="table-heading"> INSTRUCTOR </td>
        </tr>
        <tr id="filter-row">
        	<td> </td>
            <td> <input type="text" id="filter-term" placeholder="Filter by Term" class="filter form-control"/> </td>
            <td> <input type="text" id="filter-program" placeholder="Filter by Program" class="filter form-control"/> </td>
            <td> <input type="text" id="filter-crn" placeholder="Filter by CRN" class="filter form-control"/> </td>
            <td> <input type="text" id="filter-coursename" placeholder="Filter by Course Name" class="filter form-control"/> </td>
            <td> <input type="text" id="filter-instructor" placeholder="Filter by Instructor" class="filter form-control"/> </td>
        </tr>
        <tbody class="searchable">
    	<tr id="row1">
        	<td> <br /> <a class="coursedetails" id="details1"> <img src="./Images/details.png" height="40" width="40" /> </a></td>
            <td> Summer Full 2014 </td>
            <td> Information Systems  </td>
            <td> 1001  </td>
            <td> C Programming </td>
            <td> John Smith  </td>
        </tr>
        <tr id="details-1" hidden="true">
        	<td colspan="6">
            	<div>
                    <h6 class="h6"> C Programming </h6>
                    <p class="text-info"> Serves as an introduction to the C programming language and the Unix operating system. Basic C programming language topics include data types, basic I/O, selection-control structures, loop structures, subroutines and modular design, arrays, strings, structures, advanced I/O, and Unix system calls. Discusses pointers in the context of parameter passing, array manipulation, and dynamic memory allocation. Unix topics include the file system, basic commands and utilities, utilities useful for program development, and shell scripting. Covers recursion and basic list structures. Prereq. Engineering students only. </p>
                </div>
            </td>
        </tr>
        <tr id="row2">
        	<td> <br /> <a class="coursedetails" id="details2"> <img src="./Images/details.png" height="40" width="40" /> </a></td>
            <td> Summer Full 2014 </td>
            <td> Information Systems  </td>
            <td> 1002  </td>
            <td> Application Engineering and Development </td>
            <td> Kal Bugrara </td>
        </tr>
        <tr id="details-2" hidden="true">
        	<td colspan="6">
            	<div>
                    <h6 class="h6"> Application Engineering and Development </h6>
                    <p class="text-info"> Covers the basics of Java programming such as arrays, control structures, class definitions, class hierarchies, inheritance, objects, streams, constructors, collections, and GUI components. Describes how to develop and execute Java applications and incorporates several programming projects, which strengthen the understanding of object-based and event-driven programming. Provides the student with the opportunity to achieve a strong working competency in object-oriented programming using the Java programming language. Prereq. Junior, senior, or graduate standing; engineering students only. </p>
                </div>
            </td>
        </tr>
        <tr id="row3">
        	<td> <br /> <a class="coursedetails" id="details3"> <img src="./Images/details.png" height="40" width="40" /> </a></td>
            <td> Summer Full 2014 </td>
            <td> Information Systems  </td>
            <td> 1003  </td>
            <td> Web Design and User Experience </td>
            <td> Yusuf Ozbek </td>
        </tr>
        <tr id="details-3" hidden="true">
        	<td colspan="6">
            	<div>
                    <h6 class="h6"> Web Design and User Experience </h6>
                    <p class="text-info"> Exposes students to both conceptual and technical aspects of Web design. User experience design is the discipline of creating a useful and usable website or application that is easily navigated and meets the needs of both the site owner and its users. Covers Web standards and best practices. Studies the fundamental concepts, techniques, practices, work flows, and tools associated with the practice of user-experience design in Web interfaces. Offers students an opportunity to learn the core principles of information architecture, usability, marketing hierarchy, and user experience for contextual, value-driven websites. Additional areas of focus include typography, color theory and composition, responsive design, CSS3 concepts, basic scripting, and JavaScript libraries to create functional, effective, and visually appealing websites. Prereq. INFO 5100. </p>
                </div>
            </td>
        </tr>
        <tr id="row4">
        	<td> <br /> <a class="coursedetails" id="details4"> <img src="./Images/details.png" height="40" width="40" /> </a></td>
            <td> Summer Full 2014 </td>
            <td> Information Systems  </td>
            <td> 1004  </td>
            <td> C Programming </td>
            <td> John Smith  </td>
        </tr>
        <tr id="details-4" hidden="true">
        	<td colspan="6">
            	<div>
                    <h6 class="h6"> C Programming </h6>
                    <p class="text-info"> Serves as an introduction to the C programming language and the Unix operating system. Basic C programming language topics include data types, basic I/O, selection-control structures, loop structures, subroutines and modular design, arrays, strings, structures, advanced I/O, and Unix system calls. Discusses pointers in the context of parameter passing, array manipulation, and dynamic memory allocation. Unix topics include the file system, basic commands and utilities, utilities useful for program development, and shell scripting. Covers recursion and basic list structures. Prereq. Engineering students only. </p>
                </div>
            </td>
        </tr>
        <tr id="row5">
        	<td> <br /> <a class="coursedetails" id="details5"> <img src="./Images/details.png" height="40" width="40" /> </a></td>
            <td> Summer Full 2014 </td>
            <td> Information Systems  </td>
            <td> 1005  </td>
            <td> Application Engineering and Development </td>
            <td> Kal Bugrara </td>
        </tr>
        <tr id="details-5" hidden="true">
        	<td colspan="6">
            	<div>
                    <h6 class="h6"> Application Engineering and Development </h6>
                    <p class="text-info"> Covers the basics of Java programming such as arrays, control structures, class definitions, class hierarchies, inheritance, objects, streams, constructors, collections, and GUI components. Describes how to develop and execute Java applications and incorporates several programming projects, which strengthen the understanding of object-based and event-driven programming. Provides the student with the opportunity to achieve a strong working competency in object-oriented programming using the Java programming language. Prereq. Junior, senior, or graduate standing; engineering students only. </p>
                </div>
            </td>
        </tr>
        <tr id="row6">
        	<td> <br /> <a class="coursedetails" id="details6"> <img src="./Images/details.png" height="40" width="40" /> </a></td>
            <td> Summer Full 2014 </td>
            <td> Information Systems  </td>
            <td> 1006  </td>
            <td> Web Design and User Experience </td>
            <td> Yusuf Ozbek </td>
        </tr>
        <tr id="details-6" hidden="true">
        	<td colspan="6">
            	<div>
                    <h6 class="h6"> Web Design and User Experience </h6>
                    <p class="text-info"> Exposes students to both conceptual and technical aspects of Web design. User experience design is the discipline of creating a useful and usable website or application that is easily navigated and meets the needs of both the site owner and its users. Covers Web standards and best practices. Studies the fundamental concepts, techniques, practices, work flows, and tools associated with the practice of user-experience design in Web interfaces. Offers students an opportunity to learn the core principles of information architecture, usability, marketing hierarchy, and user experience for contextual, value-driven websites. Additional areas of focus include typography, color theory and composition, responsive design, CSS3 concepts, basic scripting, and JavaScript libraries to create functional, effective, and visually appealing websites. Prereq. INFO 5100. </p>
                </div>
            </td>
        </tr>
        <tr id="row7">
        	<td> <br /> <a class="coursedetails" id="details7"> <img src="./Images/details.png" height="40" width="40" /> </a></td>
            <td> Summer Full 2014 </td>
            <td> Computer Science  </td>
            <td> 2001  </td>
            <td> C Programming </td>
            <td> John Smith  </td>
        </tr>
        <tr id="details-7" hidden="true">
        	<td colspan="6">
            	<div>
                    <h6 class="h6"> C Programming </h6>
                    <p class="text-info"> Serves as an introduction to the C programming language and the Unix operating system. Basic C programming language topics include data types, basic I/O, selection-control structures, loop structures, subroutines and modular design, arrays, strings, structures, advanced I/O, and Unix system calls. Discusses pointers in the context of parameter passing, array manipulation, and dynamic memory allocation. Unix topics include the file system, basic commands and utilities, utilities useful for program development, and shell scripting. Covers recursion and basic list structures. Prereq. Engineering students only. </p>
                </div>
            </td>
        </tr>
        <tr id="row8">
        	<td> <br /> <a class="coursedetails" id="details8"> <img src="./Images/details.png" height="40" width="40" /> </a></td>
            <td> Summer Full 2014 </td>
            <td> Computer Science  </td>
            <td> 2002  </td>
            <td> Application Engineering and Development </td>
            <td> Kal Bugrara </td>
        </tr>
        <tr id="details-8" hidden="true">
        	<td colspan="6">
            	<div>
                    <h6 class="h6"> Application Engineering and Development </h6>
                    <p class="text-info"> Covers the basics of Java programming such as arrays, control structures, class definitions, class hierarchies, inheritance, objects, streams, constructors, collections, and GUI components. Describes how to develop and execute Java applications and incorporates several programming projects, which strengthen the understanding of object-based and event-driven programming. Provides the student with the opportunity to achieve a strong working competency in object-oriented programming using the Java programming language. Prereq. Junior, senior, or graduate standing; engineering students only. </p>
                </div>
            </td>
        </tr>
        <tr id="row9">
        	<td> <br /> <a class="coursedetails" id="details9"> <img src="./Images/details.png" height="40" width="40" /> </a></td>
            <td> Summer Full 2014 </td>
            <td> Computer Science  </td>
            <td> 2003  </td>
            <td> Web Design and User Experience </td>
            <td> Yusuf Ozbek </td>
        </tr>
        <tr id="details-9" hidden="true">
        	<td colspan="6">
            	<div>
                    <h6 class="h6"> Web Design and User Experience </h6>
                    <p class="text-info"> Exposes students to both conceptual and technical aspects of Web design. User experience design is the discipline of creating a useful and usable website or application that is easily navigated and meets the needs of both the site owner and its users. Covers Web standards and best practices. Studies the fundamental concepts, techniques, practices, work flows, and tools associated with the practice of user-experience design in Web interfaces. Offers students an opportunity to learn the core principles of information architecture, usability, marketing hierarchy, and user experience for contextual, value-driven websites. Additional areas of focus include typography, color theory and composition, responsive design, CSS3 concepts, basic scripting, and JavaScript libraries to create functional, effective, and visually appealing websites. Prereq. INFO 5100. </p>
                </div>
            </td>
        </tr>
        <tr id="row10">
        	<td> <br /> <a class="coursedetails" id="details10"> <img src="./Images/details.png" height="40" width="40" /> </a></td>
            <td> Summer Full 2014 </td>
            <td> Computer Science  </td>
            <td> 2004  </td>
            <td> C Programming </td>
            <td> John Smith  </td>
        </tr>
        <tr id="details-10" hidden="true">
        	<td colspan="6">
            	<div>
                    <h6 class="h6"> C Programming </h6>
                    <p class="text-info"> Serves as an introduction to the C programming language and the Unix operating system. Basic C programming language topics include data types, basic I/O, selection-control structures, loop structures, subroutines and modular design, arrays, strings, structures, advanced I/O, and Unix system calls. Discusses pointers in the context of parameter passing, array manipulation, and dynamic memory allocation. Unix topics include the file system, basic commands and utilities, utilities useful for program development, and shell scripting. Covers recursion and basic list structures. Prereq. Engineering students only. </p>
                </div>
            </td>
        </tr>
        <tr id="row11">
        	<td> <br /> <a class="coursedetails" id="details11"> <img src="./Images/details.png" height="40" width="40" /> </a></td>
            <td> Summer Full 2014 </td>
            <td> Computer Science  </td>
            <td> 2005  </td>
            <td> Application Engineering and Development </td>
            <td> Kal Bugrara </td>
        </tr>
        <tr id="details-11" hidden="true">
        	<td colspan="6">
            	<div>
                    <h6 class="h6"> Application Engineering and Development </h6>
                    <p class="text-info"> Covers the basics of Java programming such as arrays, control structures, class definitions, class hierarchies, inheritance, objects, streams, constructors, collections, and GUI components. Describes how to develop and execute Java applications and incorporates several programming projects, which strengthen the understanding of object-based and event-driven programming. Provides the student with the opportunity to achieve a strong working competency in object-oriented programming using the Java programming language. Prereq. Junior, senior, or graduate standing; engineering students only. </p>
                </div>
            </td>
        </tr>
        <tr id="row12">
        	<td> <br /> <a class="coursedetails" id="details12"> <img src="./Images/details.png" height="40" width="40" /> </a></td>
            <td> Summer Full 2014 </td>
            <td> Computer Science  </td>
            <td> 2006  </td>
            <td> Web Design and User Experience </td>
            <td> Yusuf Ozbek </td>
        </tr>
        <tr id="details-12" hidden="true">
        	<td colspan="6">
            	<div>
                    <h6 class="h6"> Web Design and User Experience </h6>
                    <p class="text-info"> Exposes students to both conceptual and technical aspects of Web design. User experience design is the discipline of creating a useful and usable website or application that is easily navigated and meets the needs of both the site owner and its users. Covers Web standards and best practices. Studies the fundamental concepts, techniques, practices, work flows, and tools associated with the practice of user-experience design in Web interfaces. Offers students an opportunity to learn the core principles of information architecture, usability, marketing hierarchy, and user experience for contextual, value-driven websites. Additional areas of focus include typography, color theory and composition, responsive design, CSS3 concepts, basic scripting, and JavaScript libraries to create functional, effective, and visually appealing websites. Prereq. INFO 5100. </p>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
    </div>
<!-- Courses Table ends -->

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