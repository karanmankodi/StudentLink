<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>My Mail</title>
<link href="./Styles/CSS/bootstrap-theme.min.css" rel="stylesheet">
<link href="./Styles/CSS/bootstrap.min.css" rel="stylesheet">
<link href="./Styles/CSS/Custom.css" rel="stylesheet">
<link href="./Styles/CSS/weather-background.css" rel="stylesheet">
<link href="./Styles/CSS/email.css" rel="stylesheet">
<script src="./Styles/JS/jquery-1.8.3.min.js"> </script>
<script src="./Styles/JS/jquery-2.0.3.min.js"> </script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script src="./Styles/JS/bootstrap.min.js"> </script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"> </script>
<?php include 'weather.php'; ?>
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
				
			}
			if($user == "mustan") {
				
			}
			if($user == "asif") {
				
			}
			if($user == "jayneel") {
				
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

	
	// Floating left menu  
	$(window).scroll(function() {
		var	menuPosition=$('#mail-menu').position().top;
		var scrollAmount=$(window).scrollTop();
		if (menuPosition < scrollAmount) {
     		 $('#mail-menu').css({ position: 'fixed', top: 250 });
    	} else {
      		$('#mail-menu').animate('position','static', 1500, "easeOutQuint");
    	}
	});
	
	// change background on hover
	$(".mail-row").mouseenter(function() {
		$(this).toggleClass("row-selected");
		$(this).find("a:first").show();
	});
	$(".mail-row").mouseleave(function() {
		$(this).toggleClass("row-selected");
		$(this).find("a:first").hide();
	});
	
	//change flag
	$(".btn-flag-black").click(function() {
		$(this).hide();
		$(this).next().show();
	});
	$(".btn-flag-red").click(function() {
		$(this).hide();
		$(this).prev().show();
	});
	
	function toggleClassOnCheckbox($param) {
		if($($param).prop("checked")) {
			$($param).closest("tr").removeClass("mail-row")
			$($param).closest("tr").addClass("mail-row-checked");
			$("#reply-btn-div").show();
			$("#delete-btn-div").show();
			$("#unread-btn-div").show();
			if($(":checkbox:checked").length > 0) {
				$("#clear-selected").show();
				$("#reply-btn-div").show();
				$("#delete-btn-div").show();
				$("#unread-btn-div").show();
			}
			
		} else {
			$($param).closest("tr").removeClass("mail-row-checked")
			$($param).closest("tr").addClass("mail-row");
			$("#check-all").prop("checked", false);
			if($(":checkbox:checked").length > 0) {
				$("#clear-selected").show();
				$("#reply-btn-div").show();
				$("#delete-btn-div").show();
				$("#unread-btn-div").show();
			} else {
				$("#clear-selected").hide();
				$("#reply-btn-div").hide();
				$("#delete-btn-div").hide();
				$("#unread-btn-div").hide();
			}
		}
	}
	
	
	// change background of selected row
	$(".mail-checkbox").click(function() {
		toggleClassOnCheckbox($(this));
	});
	
	//check all
	$("#check-all").click(function() {
		if($(this).prop('checked')) {
        	$(' tr td input[type="checkbox"]').each(function() {
            	$(this).prop('checked', true);
				toggleClassOnCheckbox($(this));
        	});
    	} else {
        	$(' tr td input[type="checkbox"]').each(function() {
            	$(this).prop('checked', false);
				toggleClassOnCheckbox($(this));
        	});
    	}
	});
	
	$("#clear-selected").click(function() {
		toggleClassOnCheckbox($(this));
	});
	
	$("#delete-btn").click(function() {
		var result = confirm("Are you sure?");
		if (result == true) {
			$(":checkbox:checked").parent().parent().hide('slow');
			$("#clear-selected").hide();
			$("#reply-btn-div").hide();
			$("#delete-btn-div").hide();
			$("#unread-btn-div").hide();
		} else {
			
		}
	});
	
	$(".btn-delete").click(function() {
		var result = confirm("Are you sure?");
		if (result == true) {
			$(this).parent().parent().parent().hide('slow');
		} else {
			
		}
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
   		$('.searchable tr').hide();
        $('.searchable tr').filter(function() {
            return rex.test($(this).text());
        }).show();
    });

  });
  </script>
</head>

<body>
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


<!-- Navigation bar -->
    <div class="clearfix container row mail-content-below-menu navbar-inverse navbar-default navbar-brand btn-group-justified">
    <div class="col-lg-1 com-md-1 hidden-sm hidden-xs">
    <img src="./Images/mailbox.png" height="50" width="50" class="img-responsive img-rounded" />
    </div>
    <div class="col-lg-2 col-md-2 hidden-sm hidden-xs">
    <h3 class="h3 text-center" style="color:#FFF"> My Mail </h3>
    </div>
    <div id="reply-btn-div" class="col-lg-2 col-md-2 col-sm-2" hidden="true">
    <a id="reply-btn" class="btn btn-default btn-block mail-button"> Reply </a>
    </div>
    <div id="delete-btn-div" class="col-lg-2 col-md-2 col-sm-2" hidden="true">
    <button id="delete-btn" class="btn btn-default btn-block mail-button"> Delete </button>
    </div>
    <div id="unread-btn-div" class="col-lg-2 col-md-2 col-sm-2" hidden="true">
    <button id="unread-btn" class="btn btn-default btn-block mail-button"> Mark as Unread </button>
    </div>
    <div id="read-btn-div" class="col-lg-2 col-md-2 col-sm-2" hidden="true">
    <button id="read-btn" class="btn btn-default btn-block mail-button"> Mark as Read </button>
    </div>
   	<div class="col-lg-1 pull-right">
    <img src="./Images/user.png" height="50" width="50" class="img-responsive img-rounded" />
    </div>
    
    
    
    
    
    </div>
<!-- Navigation ends -->
    
<!-- Sidebar -->
    <div class="row clearfix">
    <div id="mail-menu" class="col-lg-2 col-md-2 col-sm-2">
        <ul class="nav">
            <li> <a href="#" class="btn"> Compose </a> </li>
            <li> <a href="#" class="btn"> Inbox </a> </li>
            <li> <a href="#" class="btn"> Important </a> </li>
            <li> <a href="#" class="btn"> Sent Mail </a> </li>
            <li> <a href="#" class="btn"> Drafts </a> </li>
        </ul>
    </div>
    
<!-- Sidebar  ends -->
   
<!-- Content section -->
<div id="mail-content-div" class="col-lg-10 col-md-10 col-sm-10">
    <table class="table">
        <tr id="row-heading">
        	<td class="table-heading">  </td>
            <td class="table-heading" colspan="2"> SENDER </td>
            <td class="table-heading"> SUBJECT </td>
            <td class="table-heading"> DATE </td>
        </tr>
		<tr id="row-heading-menus">
        	<td class="table-heading"> <input type="checkbox" id="check-all"/> </td>
            <td class="table-heading" hidden="true" id="items-selected"> </td>
            <td class="table-heading" hidden="true" id="clear-selected"> <a href="" id="clear-selected-btn"> Clear Selected </td>
            <td> </td>
            <td> </td>
        </tr>

        
        <tr id="filter-row">
        	<td> </td>
            <td colspan="2"> <input type="text" id="filter-term" placeholder="Filter by Sender" class="filter form-control"/> </td>
            <td> <input type="text" id="filter-program" placeholder="Filter by Subject" class="filter form-control"/> </td>
            <td> <input type="text" id="filter-crn" placeholder="Filter by Date" class="filter form-control"/> </td>
        </tr>
		
        <tbody class="searchable">
    	<tr class="mail-row">
        	<td> <input type="checkbox" class="mail-checkbox" /> </td>
            <td colspan="2"> 
                <p class="sender"> Joshua Hayden, MBR, DIG 
                <a hidden="true" class="btn-delete"> 
                    <img src="./Images/Delete.png" height="25" width="25"/> 
                </a> 
                </p> </td>
            <td> 
            	<p class="subject"> 
            	<a class="btn-flag-black"> 
                	<img src="./Images/flag-black.png" height="25" width="25"/> 
                </a> 
                <a class="btn-flag-red" hidden="true"> 
                	<img src="./Images/flag-red.png" height="25" width="25"/> 
                </a>
                Cloud Software Engineers Needed (Big Data Infrastructure) </p> </td>
            <td> <p class="date"> 04/19/14 </p>  </td>
        </tr>
        <tr class="mail-row">
        	<td> <input type="checkbox" class="mail-checkbox" /> </td>
            <td colspan="2"> 
                <p class="sender"> George Henry, VP, Sales 
                <a hidden="true" class="btn-delete"> 
                    <img src="./Images/Delete.png" height="25" width="25"/> 
                </a> 
                </p> </td>
            <td> 
            	<p class="subject"> 
            	<a class="btn-flag-black"> 
                	<img src="./Images/flag-black.png" height="25" width="25"/> 
                </a> 
                <a class="btn-flag-red" hidden="true"> 
                	<img src="./Images/flag-red.png" height="25" width="25"/> 
                </a>
                Sales Executives Needed (Big Data Infrastructure) </p> </td>
            <td> <p class="date"> 04/19/14 </p>  </td>
        </tr>
        <tr class="mail-row">
        	<td> <input type="checkbox" class="mail-checkbox" /> </td>
            <td colspan="2"> 
                <p class="sender"> Adam Johnson, GM, ENG 
                <a hidden="true" class="btn-delete"> 
                    <img src="./Images/Delete.png" height="25" width="25"/> 
                </a> 
                </p> </td>
            <td> 
            	<p class="subject"> 
            	<a class="btn-flag-black"> 
                	<img src="./Images/flag-black.png" height="25" width="25"/> 
                </a> 
                <a class="btn-flag-red" hidden="true"> 
                	<img src="./Images/flag-red.png" height="25" width="25"/> 
                </a>
                Engineers Needed (Web Infrastructure) </p> </td>
            <td> <p class="date"> 04/19/14 </p>  </td>
        </tr>
        <tr class="mail-row">
        	<td> <input type="checkbox" class="mail-checkbox" /> </td>
            <td colspan="2"> 
                <p class="sender"> John Smith, MD, DEV 
                <a hidden="true" class="btn-delete"> 
                    <img src="./Images/Delete.png" height="25" width="25"/> 
                </a> 
                </p> </td>
            <td> 
            	<p class="subject"> 
            	<a class="btn-flag-black"> 
                	<img src="./Images/flag-black.png" height="25" width="25"/> 
                </a> 
                <a class="btn-flag-red" hidden="true"> 
                	<img src="./Images/flag-red.png" height="25" width="25"/> 
                </a>
                Developers Needed (Cloud Infrastructure) </p> </td>
            <td> <p class="date"> 04/19/14 </p>  </td>
        </tr>
<tr class="mail-row">
        	<td> <input type="checkbox" class="mail-checkbox" /> </td>
            <td colspan="2"> 
                <p class="sender"> Joshua Hayden, MBR, DIG 
                <a hidden="true" class="btn-delete"> 
                    <img src="./Images/Delete.png" height="25" width="25"/> 
                </a> 
                </p> </td>
            <td> 
            	<p class="subject"> 
            	<a class="btn-flag-black"> 
                	<img src="./Images/flag-black.png" height="25" width="25"/> 
                </a> 
                <a class="btn-flag-red" hidden="true"> 
                	<img src="./Images/flag-red.png" height="25" width="25"/> 
                </a>
                Cloud Software Engineers Needed (Big Data Infrastructure) </p> </td>
            <td> <p class="date"> 04/19/14 </p>  </td>
        </tr>
        <tr class="mail-row">
        	<td> <input type="checkbox" class="mail-checkbox" /> </td>
            <td colspan="2"> 
                <p class="sender"> George Henry, VP, Sales 
                <a hidden="true" class="btn-delete"> 
                    <img src="./Images/Delete.png" height="25" width="25"/> 
                </a> 
                </p> </td>
            <td> 
            	<p class="subject"> 
            	<a class="btn-flag-black"> 
                	<img src="./Images/flag-black.png" height="25" width="25"/> 
                </a> 
                <a class="btn-flag-red" hidden="true"> 
                	<img src="./Images/flag-red.png" height="25" width="25"/> 
                </a>
                Sales Executives Needed (Big Data Infrastructure) </p> </td>
            <td> <p class="date"> 04/19/14 </p>  </td>
        </tr>
        <tr class="mail-row">
        	<td> <input type="checkbox" class="mail-checkbox" /> </td>
            <td colspan="2"> 
                <p class="sender"> Adam Johnson, GM, ENG 
                <a hidden="true" class="btn-delete"> 
                    <img src="./Images/Delete.png" height="25" width="25"/> 
                </a> 
                </p> </td>
            <td> 
            	<p class="subject"> 
            	<a class="btn-flag-black"> 
                	<img src="./Images/flag-black.png" height="25" width="25"/> 
                </a> 
                <a class="btn-flag-red" hidden="true"> 
                	<img src="./Images/flag-red.png" height="25" width="25"/> 
                </a>
                Engineers Needed (Web Infrastructure) </p> </td>
            <td> <p class="date"> 04/19/14 </p>  </td>
        </tr>
        <tr class="mail-row">
        	<td> <input type="checkbox" class="mail-checkbox" /> </td>
            <td colspan="2"> 
                <p class="sender"> John Smith, MD, DEV 
                <a hidden="true" class="btn-delete"> 
                    <img src="./Images/Delete.png" height="25" width="25"/> 
                </a> 
                </p> </td>
            <td> 
            	<p class="subject"> 
            	<a class="btn-flag-black"> 
                	<img src="./Images/flag-black.png" height="25" width="25"/> 
                </a> 
                <a class="btn-flag-red" hidden="true"> 
                	<img src="./Images/flag-red.png" height="25" width="25"/> 
                </a>
                Developers Needed (Cloud Infrastructure) </p> </td>
            <td> <p class="date"> 04/19/14 </p>  </td>
        </tr><tr class="mail-row">
        	<td> <input type="checkbox" class="mail-checkbox" /> </td>
            <td colspan="2"> 
                <p class="sender"> Joshua Hayden, MBR, DIG 
                <a hidden="true" class="btn-delete"> 
                    <img src="./Images/Delete.png" height="25" width="25"/> 
                </a> 
                </p> </td>
            <td> 
            	<p class="subject"> 
            	<a class="btn-flag-black"> 
                	<img src="./Images/flag-black.png" height="25" width="25"/> 
                </a> 
                <a class="btn-flag-red" hidden="true"> 
                	<img src="./Images/flag-red.png" height="25" width="25"/> 
                </a>
                Cloud Software Engineers Needed (Big Data Infrastructure) </p> </td>
            <td> <p class="date"> 04/19/14 </p>  </td>
        </tr>
        <tr class="mail-row">
        	<td> <input type="checkbox" class="mail-checkbox" /> </td>
            <td colspan="2"> 
                <p class="sender"> George Henry, VP, Sales 
                <a hidden="true" class="btn-delete"> 
                    <img src="./Images/Delete.png" height="25" width="25"/> 
                </a> 
                </p> </td>
            <td> 
            	<p class="subject"> 
            	<a class="btn-flag-black"> 
                	<img src="./Images/flag-black.png" height="25" width="25"/> 
                </a> 
                <a class="btn-flag-red" hidden="true"> 
                	<img src="./Images/flag-red.png" height="25" width="25"/> 
                </a>
                Sales Executives Needed (Big Data Infrastructure) </p> </td>
            <td> <p class="date"> 04/19/14 </p>  </td>
        </tr>
        <tr class="mail-row">
        	<td> <input type="checkbox" class="mail-checkbox" /> </td>
            <td colspan="2"> 
                <p class="sender"> Adam Johnson, GM, ENG 
                <a hidden="true" class="btn-delete"> 
                    <img src="./Images/Delete.png" height="25" width="25"/> 
                </a> 
                </p> </td>
            <td> 
            	<p class="subject"> 
            	<a class="btn-flag-black"> 
                	<img src="./Images/flag-black.png" height="25" width="25"/> 
                </a> 
                <a class="btn-flag-red" hidden="true"> 
                	<img src="./Images/flag-red.png" height="25" width="25"/> 
                </a>
                Engineers Needed (Web Infrastructure) </p> </td>
            <td> <p class="date"> 04/19/14 </p>  </td>
        </tr>
        <tr class="mail-row">
        	<td> <input type="checkbox" class="mail-checkbox" /> </td>
            <td colspan="2"> 
                <p class="sender"> John Smith, MD, DEV 
                <a hidden="true" class="btn-delete"> 
                    <img src="./Images/Delete.png" height="25" width="25"/> 
                </a> 
                </p> </td>
            <td> 
            	<p class="subject"> 
            	<a class="btn-flag-black"> 
                	<img src="./Images/flag-black.png" height="25" width="25"/> 
                </a> 
                <a class="btn-flag-red" hidden="true"> 
                	<img src="./Images/flag-red.png" height="25" width="25"/> 
                </a>
                Developers Needed (Cloud Infrastructure) </p> </td>
            <td> <p class="date"> 04/19/14 </p>  </td>
        </tr><tr class="mail-row">
        	<td> <input type="checkbox" class="mail-checkbox" /> </td>
            <td colspan="2"> 
                <p class="sender"> Joshua Hayden, MBR, DIG 
                <a hidden="true" class="btn-delete"> 
                    <img src="./Images/Delete.png" height="25" width="25"/> 
                </a> 
                </p> </td>
            <td> 
            	<p class="subject"> 
            	<a class="btn-flag-black"> 
                	<img src="./Images/flag-black.png" height="25" width="25"/> 
                </a> 
                <a class="btn-flag-red" hidden="true"> 
                	<img src="./Images/flag-red.png" height="25" width="25"/> 
                </a>
                Cloud Software Engineers Needed (Big Data Infrastructure) </p> </td>
            <td> <p class="date"> 04/19/14 </p>  </td>
        </tr>
        <tr class="mail-row">
        	<td> <input type="checkbox" class="mail-checkbox" /> </td>
            <td colspan="2"> 
                <p class="sender"> George Henry, VP, Sales 
                <a hidden="true" class="btn-delete"> 
                    <img src="./Images/Delete.png" height="25" width="25"/> 
                </a> 
                </p> </td>
            <td> 
            	<p class="subject"> 
            	<a class="btn-flag-black"> 
                	<img src="./Images/flag-black.png" height="25" width="25"/> 
                </a> 
                <a class="btn-flag-red" hidden="true"> 
                	<img src="./Images/flag-red.png" height="25" width="25"/> 
                </a>
                Sales Executives Needed (Big Data Infrastructure) </p> </td>
            <td> <p class="date"> 04/19/14 </p>  </td>
        </tr>
        <tr class="mail-row">
        	<td> <input type="checkbox" class="mail-checkbox" /> </td>
            <td colspan="2"> 
                <p class="sender"> Adam Johnson, GM, ENG 
                <a hidden="true" class="btn-delete"> 
                    <img src="./Images/Delete.png" height="25" width="25"/> 
                </a> 
                </p> </td>
            <td> 
            	<p class="subject"> 
            	<a class="btn-flag-black"> 
                	<img src="./Images/flag-black.png" height="25" width="25"/> 
                </a> 
                <a class="btn-flag-red" hidden="true"> 
                	<img src="./Images/flag-red.png" height="25" width="25"/> 
                </a>
                Engineers Needed (Web Infrastructure) </p> </td>
            <td> <p class="date"> 04/19/14 </p>  </td>
        </tr>
        <tr class="mail-row">
        	<td> <input type="checkbox" class="mail-checkbox" /> </td>
            <td colspan="2"> 
                <p class="sender"> John Smith, MD, DEV 
                <a hidden="true" class="btn-delete"> 
                    <img src="./Images/Delete.png" height="25" width="25"/> 
                </a> 
                </p> </td>
            <td> 
            	<p class="subject"> 
            	<a class="btn-flag-black"> 
                	<img src="./Images/flag-black.png" height="25" width="25"/> 
                </a> 
                <a class="btn-flag-red" hidden="true"> 
                	<img src="./Images/flag-red.png" height="25" width="25"/> 
                </a>
                Developers Needed (Cloud Infrastructure) </p> </td>
            <td> <p class="date"> 04/19/14 </p>  </td>
        </tr><tr class="mail-row">
        	<td> <input type="checkbox" class="mail-checkbox" /> </td>
            <td colspan="2"> 
                <p class="sender"> Joshua Hayden, MBR, DIG 
                <a hidden="true" class="btn-delete"> 
                    <img src="./Images/Delete.png" height="25" width="25"/> 
                </a> 
                </p> </td>
            <td> 
            	<p class="subject"> 
            	<a class="btn-flag-black"> 
                	<img src="./Images/flag-black.png" height="25" width="25"/> 
                </a> 
                <a class="btn-flag-red" hidden="true"> 
                	<img src="./Images/flag-red.png" height="25" width="25"/> 
                </a>
                Cloud Software Engineers Needed (Big Data Infrastructure) </p> </td>
            <td> <p class="date"> 04/19/14 </p>  </td>
        </tr>
        <tr class="mail-row">
        	<td> <input type="checkbox" class="mail-checkbox" /> </td>
            <td colspan="2"> 
                <p class="sender"> George Henry, VP, Sales 
                <a hidden="true" class="btn-delete"> 
                    <img src="./Images/Delete.png" height="25" width="25"/> 
                </a> 
                </p> </td>
            <td> 
            	<p class="subject"> 
            	<a class="btn-flag-black"> 
                	<img src="./Images/flag-black.png" height="25" width="25"/> 
                </a> 
                <a class="btn-flag-red" hidden="true"> 
                	<img src="./Images/flag-red.png" height="25" width="25"/> 
                </a>
                Sales Executives Needed (Big Data Infrastructure) </p> </td>
            <td> <p class="date"> 04/19/14 </p>  </td>
        </tr>
        <tr class="mail-row">
        	<td> <input type="checkbox" class="mail-checkbox" /> </td>
            <td colspan="2"> 
                <p class="sender"> Adam Johnson, GM, ENG 
                <a hidden="true" class="btn-delete"> 
                    <img src="./Images/Delete.png" height="25" width="25"/> 
                </a> 
                </p> </td>
            <td> 
            	<p class="subject"> 
            	<a class="btn-flag-black"> 
                	<img src="./Images/flag-black.png" height="25" width="25"/> 
                </a> 
                <a class="btn-flag-red" hidden="true"> 
                	<img src="./Images/flag-red.png" height="25" width="25"/> 
                </a>
                Engineers Needed (Web Infrastructure) </p> </td>
            <td> <p class="date"> 04/19/14 </p>  </td>
        </tr>
        <tr class="mail-row">
        	<td> <input type="checkbox" class="mail-checkbox" /> </td>
            <td colspan="2"> 
                <p class="sender"> John Smith, MD, DEV 
                <a hidden="true" class="btn-delete"> 
                    <img src="./Images/Delete.png" height="25" width="25"/> 
                </a> 
                </p> </td>
            <td> 
            	<p class="subject"> 
            	<a class="btn-flag-black"> 
                	<img src="./Images/flag-black.png" height="25" width="25"/> 
                </a> 
                <a class="btn-flag-red" hidden="true"> 
                	<img src="./Images/flag-red.png" height="25" width="25"/> 
                </a>
                Developers Needed (Cloud Infrastructure) </p> </td>
            <td> <p class="date"> 04/19/14 </p>  </td>
        </tr><tr class="mail-row">
        	<td> <input type="checkbox" class="mail-checkbox" /> </td>
            <td colspan="2"> 
                <p class="sender"> Joshua Hayden, MBR, DIG 
                <a hidden="true" class="btn-delete"> 
                    <img src="./Images/Delete.png" height="25" width="25"/> 
                </a> 
                </p> </td>
            <td> 
            	<p class="subject"> 
            	<a class="btn-flag-black"> 
                	<img src="./Images/flag-black.png" height="25" width="25"/> 
                </a> 
                <a class="btn-flag-red" hidden="true"> 
                	<img src="./Images/flag-red.png" height="25" width="25"/> 
                </a>
                Cloud Software Engineers Needed (Big Data Infrastructure) </p> </td>
            <td> <p class="date"> 04/19/14 </p>  </td>
        </tr>
        <tr class="mail-row">
        	<td> <input type="checkbox" class="mail-checkbox" /> </td>
            <td colspan="2"> 
                <p class="sender"> George Henry, VP, Sales 
                <a hidden="true" class="btn-delete"> 
                    <img src="./Images/Delete.png" height="25" width="25"/> 
                </a> 
                </p> </td>
            <td> 
            	<p class="subject"> 
            	<a class="btn-flag-black"> 
                	<img src="./Images/flag-black.png" height="25" width="25"/> 
                </a> 
                <a class="btn-flag-red" hidden="true"> 
                	<img src="./Images/flag-red.png" height="25" width="25"/> 
                </a>
                Sales Executives Needed (Big Data Infrastructure) </p> </td>
            <td> <p class="date"> 04/19/14 </p>  </td>
        </tr>
        <tr class="mail-row">
        	<td> <input type="checkbox" class="mail-checkbox" /> </td>
            <td colspan="2"> 
                <p class="sender"> Adam Johnson, GM, ENG 
                <a hidden="true" class="btn-delete"> 
                    <img src="./Images/Delete.png" height="25" width="25"/> 
                </a> 
                </p> </td>
            <td> 
            	<p class="subject"> 
            	<a class="btn-flag-black"> 
                	<img src="./Images/flag-black.png" height="25" width="25"/> 
                </a> 
                <a class="btn-flag-red" hidden="true"> 
                	<img src="./Images/flag-red.png" height="25" width="25"/> 
                </a>
                Engineers Needed (Web Infrastructure) </p> </td>
            <td> <p class="date"> 04/19/14 </p>  </td>
        </tr>
        <tr class="mail-row">
        	<td> <input type="checkbox" class="mail-checkbox" /> </td>
            <td colspan="2"> 
                <p class="sender"> John Smith, MD, DEV 
                <a hidden="true" class="btn-delete"> 
                    <img src="./Images/Delete.png" height="25" width="25"/> 
                </a> 
                </p> </td>
            <td> 
            	<p class="subject"> 
            	<a class="btn-flag-black"> 
                	<img src="./Images/flag-black.png" height="25" width="25"/> 
                </a> 
                <a class="btn-flag-red" hidden="true"> 
                	<img src="./Images/flag-red.png" height="25" width="25"/> 
                </a>
                Developers Needed (Cloud Infrastructure) </p> </td>
            <td> <p class="date"> 04/19/14 </p>  </td>
        </tr><tr class="mail-row">
        	<td> <input type="checkbox" class="mail-checkbox" /> </td>
            <td colspan="2"> 
                <p class="sender"> Joshua Hayden, MBR, DIG 
                <a hidden="true" class="btn-delete"> 
                    <img src="./Images/Delete.png" height="25" width="25"/> 
                </a> 
                </p> </td>
            <td> 
            	<p class="subject"> 
            	<a class="btn-flag-black"> 
                	<img src="./Images/flag-black.png" height="25" width="25"/> 
                </a> 
                <a class="btn-flag-red" hidden="true"> 
                	<img src="./Images/flag-red.png" height="25" width="25"/> 
                </a>
                Cloud Software Engineers Needed (Big Data Infrastructure) </p> </td>
            <td> <p class="date"> 04/19/14 </p>  </td>
        </tr>
        <tr class="mail-row">
        	<td> <input type="checkbox" class="mail-checkbox" /> </td>
            <td colspan="2"> 
                <p class="sender"> George Henry, VP, Sales 
                <a hidden="true" class="btn-delete"> 
                    <img src="./Images/Delete.png" height="25" width="25"/> 
                </a> 
                </p> </td>
            <td> 
            	<p class="subject"> 
            	<a class="btn-flag-black"> 
                	<img src="./Images/flag-black.png" height="25" width="25"/> 
                </a> 
                <a class="btn-flag-red" hidden="true"> 
                	<img src="./Images/flag-red.png" height="25" width="25"/> 
                </a>
                Sales Executives Needed (Big Data Infrastructure) </p> </td>
            <td> <p class="date"> 04/19/14 </p>  </td>
        </tr>
        <tr class="mail-row">
        	<td> <input type="checkbox" class="mail-checkbox" /> </td>
            <td colspan="2"> 
                <p class="sender"> Adam Johnson, GM, ENG 
                <a hidden="true" class="btn-delete"> 
                    <img src="./Images/Delete.png" height="25" width="25"/> 
                </a> 
                </p> </td>
            <td> 
            	<p class="subject"> 
            	<a class="btn-flag-black"> 
                	<img src="./Images/flag-black.png" height="25" width="25"/> 
                </a> 
                <a class="btn-flag-red" hidden="true"> 
                	<img src="./Images/flag-red.png" height="25" width="25"/> 
                </a>
                Engineers Needed (Web Infrastructure) </p> </td>
            <td> <p class="date"> 04/19/14 </p>  </td>
        </tr>
        <tr class="mail-row">
        	<td> <input type="checkbox" class="mail-checkbox" /> </td>
            <td colspan="2"> 
                <p class="sender"> John Smith, MD, DEV 
                <a hidden="true" class="btn-delete"> 
                    <img src="./Images/Delete.png" height="25" width="25"/> 
                </a> 
                </p> </td>
            <td> 
            	<p class="subject"> 
            	<a class="btn-flag-black"> 
                	<img src="./Images/flag-black.png" height="25" width="25"/> 
                </a> 
                <a class="btn-flag-red" hidden="true"> 
                	<img src="./Images/flag-red.png" height="25" width="25"/> 
                </a>
                Developers Needed (Cloud Infrastructure) </p> </td>
            <td> <p class="date"> 04/19/14 </p>  </td>
        </tr><tr class="mail-row">
        	<td> <input type="checkbox" class="mail-checkbox" /> </td>
            <td colspan="2"> 
                <p class="sender"> Joshua Hayden, MBR, DIG 
                <a hidden="true" class="btn-delete"> 
                    <img src="./Images/Delete.png" height="25" width="25"/> 
                </a> 
                </p> </td>
            <td> 
            	<p class="subject"> 
            	<a class="btn-flag-black"> 
                	<img src="./Images/flag-black.png" height="25" width="25"/> 
                </a> 
                <a class="btn-flag-red" hidden="true"> 
                	<img src="./Images/flag-red.png" height="25" width="25"/> 
                </a>
                Cloud Software Engineers Needed (Big Data Infrastructure) </p> </td>
            <td> <p class="date"> 04/19/14 </p>  </td>
        </tr>
        <tr class="mail-row">
        	<td> <input type="checkbox" class="mail-checkbox" /> </td>
            <td colspan="2"> 
                <p class="sender"> George Henry, VP, Sales 
                <a hidden="true" class="btn-delete"> 
                    <img src="./Images/Delete.png" height="25" width="25"/> 
                </a> 
                </p> </td>
            <td> 
            	<p class="subject"> 
            	<a class="btn-flag-black"> 
                	<img src="./Images/flag-black.png" height="25" width="25"/> 
                </a> 
                <a class="btn-flag-red" hidden="true"> 
                	<img src="./Images/flag-red.png" height="25" width="25"/> 
                </a>
                Sales Executives Needed (Big Data Infrastructure) </p> </td>
            <td> <p class="date"> 04/19/14 </p>  </td>
        </tr>
        <tr class="mail-row">
        	<td> <input type="checkbox" class="mail-checkbox" /> </td>
            <td colspan="2"> 
                <p class="sender"> Adam Johnson, GM, ENG 
                <a hidden="true" class="btn-delete"> 
                    <img src="./Images/Delete.png" height="25" width="25"/> 
                </a> 
                </p> </td>
            <td> 
            	<p class="subject"> 
            	<a class="btn-flag-black"> 
                	<img src="./Images/flag-black.png" height="25" width="25"/> 
                </a> 
                <a class="btn-flag-red" hidden="true"> 
                	<img src="./Images/flag-red.png" height="25" width="25"/> 
                </a>
                Engineers Needed (Web Infrastructure) </p> </td>
            <td> <p class="date"> 04/19/14 </p>  </td>
        </tr>
        <tr class="mail-row">
        	<td> <input type="checkbox" class="mail-checkbox" /> </td>
            <td colspan="2"> 
                <p class="sender"> John Smith, MD, DEV 
                <a hidden="true" class="btn-delete"> 
                    <img src="./Images/Delete.png" height="25" width="25"/> 
                </a> 
                </p> </td>
            <td> 
            	<p class="subject"> 
            	<a class="btn-flag-black"> 
                	<img src="./Images/flag-black.png" height="25" width="25"/> 
                </a> 
                <a class="btn-flag-red" hidden="true"> 
                	<img src="./Images/flag-red.png" height="25" width="25"/> 
                </a>
                Developers Needed (Cloud Infrastructure) </p> </td>
            <td> <p class="date"> 04/19/14 </p>  </td>
        </tr>        </tbody>
	</table>
</div>
<!-- Content section ends -->
</div>
 
 
   
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