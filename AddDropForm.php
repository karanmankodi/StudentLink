<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Add/Drop Form</title>
<link href="./Styles/css/bootstrap.css" type="text/css" rel="stylesheet">
<script src="./Styles/JS/jquery-1.8.3.min.js"> </script>
<script>
$(document).ready(function() {
	
});
</script>

</head>

<body width="100%">
<?php

		$user = strval($_SESSION["username"]);
		$loginstatus = $_SESSION["login"];
		if ($_SESSION["username"] != "") {
			if($user == "karan") {
				echo 
				"<script>
					$(document).ready(function() {
						$('#cname').val('College of Engineering')
						$('#lname').val('Mankodi');
						$('#fname').val('Karan');
						$('#minitial').val('K');
						$('#bid').val('001149837');
					});
				</script>";  
			}
			if($user == "mustan") {
				echo 
				"<script>
					$(document).ready(function() {
						$('#cname').val('College of Engineering')
						$('#lname').val('Lokhandwala');
						$('#fname').val('Mustansir');
						$('#minitial').val('Z');
						$('#bid').val('001168214');
					});
				</script>"; 
			}
			if($user == "asif") {
				echo 
				"<script>
					$(document).ready(function() {
						$('#cname').val('College of Computer Science')
						$('#lname').val('Motorwala');
						$('#fname').val('Asif');
						$('#minitial').val('A');
						$('#bid').val('019548372');
					});
				</script>"; 
			}
			if($user == "jayneel") {
				echo 
				"<script>
					$(document).ready(function() {
						$('#cname').val('Metropolitan College')
						$('#lname').val('Parikh');
						$('#fname').val('Jayneel');
						$('#minitial').val('P');
						$('#bid').val('026798267');
					});
				</script>"; 
			}
		}

?>

<div class="container">
	<form action="./AddDropFormPDF.php" method="get" target="_blank">
    <br>
	<div class="demo-headline row">
    	<div class="col-lg-3 col-md-3 col-sm-3">
    	<img src="./Images/Logo.jpg" alt="logo" height="100" width="200">
    	</div>
        <div class="col-lg-6 col-md-6 col-sm-6">
        <h1 align="center">  ADD/DROP FORM </h1>
        <input type="text" name="semesterandyear" class="form-control" placeholder="Academic Semester & Year">
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
        <h4 align="center"> Office of the University Registrar </h4>
        <input type="text" name="collegename" id="cname" class="form-control" placeholder="College Name">
        </div>
    </div>
    <br>
    <h3 class="demo-panel-title"> PERSONAL INFORMATION </h3>
    <br>
    <div class="row">
    	<div class="col-sm-4 col-lg-4 col-md-4">
        	<div class="form-group">
            	<input type="text" id="lname" name="lastname" value="" placeholder="Last name" class="form-control">
            </div>
        </div>
    	<div class="col-sm-4 col-lg-4 col-md-4">
        	<div class="form-group">
            	<input type="text" id="fname" name="firstname" value="" placeholder="First name" class="form-control">
            </div>
        </div>
    	<div class="col-sm-1 col-lg-1 col-md-1">
        	<div class="form-group">
            	<input type="text" id="minitial" name="middleinitial" value="" placeholder="Middle Initial" class="form-control">
            </div>
        </div>
        <div class="col-sm-3 col-lg-3 col-md-3">
        	<div class="form-group">
            	<input type="text" id="bid" name="buid" value="" placeholder="BU ID" class="form-control">
            </div>
        </div>
    </div>
    <br>
    <br>
    <h4> INSTRUCTIONS AND NOTES: </h4>
    <h5> This form may be used to add or drop courses, change a class selection, indicate audit status, or change a credits in a variable credit class. The college of the course, course number and section are required and all must be filled in completely. The Class Schedule must be viewed online using the Registrars Office homepage, www.bu.edu/reg and/or the student link at www.bu.edu/studentlink. </h5>
    <br>
    <h4> FOR STANDARD COURSES* </h4>
    <h5> ADD: You may add classes for the first two weeks of class only. </h5>
    <h5> DROP: Courses dropped in the first five weeks would not be recorded as a part of your permanent record. Drops after the fifth week receive a W grade, indicating course withdrawal and you will be charged for the course.</h5>
    <h5> AUDIT: Status cannot be changed after fifth week of class.  </h5>
    <h5> CREDIT CHANGE: Enter the new number of credit hours for the course. </h5>
    <br>
    <h5> *Non-standard course information can be obtained at the Registrars website on www.bu.edu/reg. </h5>
    
    
    
    
    <br>
    <br>
    <table class="table" width="100%">
    <tr>
    <div class="row">
    	<td>
    	<p class="panel-heading"> ACTION </p>
        </td>
        <td>
        <p class="panel-heading"> COLLEGE </p>
        </td>
        <td>
    	<p class="panel-heading"> COURSE # </p>
        </td>
        <td>
    	<p class="panel-heading"> CREDITS </p>
        </td>
    </div>
    </tr>
    <tr>
    <div class="row">
    	<td>
        <div class="form-group">
            <select name="action1" value="">
            	<option value=""></option>
                <option value="Add">Add</option>
                <option value="Drop">Drop</option>
                <option value="Audit">Audit</option>
                <option value="CreditChange">Credit Change</option>
            </select>
        </div>
        </td>
        <td>
        <input type="text" name="college1" class="form-control">
        </td>
        <td>
        <input type="text" name="courses1" class="form-control">
        </td>
        <td>
        <input type="text" name="credits1" class="form-control">
        </td>
    </div>
    </tr>
    <tr>
    <div class="row">
    	<td>
        <div class="form-group">
            <select name="action2" value="">
            	<option value=""></option>
                <option value="Add">Add</option>
                <option value="Drop">Drop</option>
                <option value="Audit">Audit</option>
                <option value="CreditChange">Credit Change</option>
            </select>
        </div>
        </td>
        <td>
        <input type="text" name="college2" class="form-control">
        </td>
        <td>
        <input type="text" name="courses2" class="form-control">
        </td>
        <td>
        <input type="text" name="credits2" class="form-control">
        </td>
    </div>
    </tr>
    <tr>
    <div class="row">
    	<td>
        <div class="form-group">
            <select name="action3" value="">
            	<option value=""></option>
                <option value="Add">Add</option>
                <option value="Drop">Drop</option>
                <option value="Audit">Audit</option>
                <option value="CreditChange">Credit Change</option>
            </select>
        </div>
        </td>
        <td>
        <input type="text" name="college3" class="form-control">
        </td>
        <td>
        <input type="text" name="courses3" class="form-control">
        </td>
        <td>
        <input type="text" name="credits3" class="form-control">
        </td>
    </div>
    </tr>
    <tr>
    <div class="row">
    	<td>
        <div class="form-group">
            <select name="action4" value="">
            	<option value=""></option>
                <option value="Add">Add</option>
                <option value="Drop">Drop</option>
                <option value="Audit">Audit</option>
                <option value="CreditChange">Credit Change</option>
            </select>
        </div>
        </td>
        <td>
        <input type="text" name="college4" class="form-control">
        </td>
        <td>
        <input type="text" name="courses4" class="form-control">
        </td>
        <td>
        <input type="text" name="credits4" class="form-control">
        </td>
    </div>
    </tr>
    <tr>
    <div class="row">
    	<td>
        <div class="form-group">
            <select name="action5" value="">
            	<option value=""></option>
                <option value="Add">Add</option>
                <option value="Drop">Drop</option>
                <option value="Audit">Audit</option>
                <option value="CreditChange">Credit Change</option>
            </select>
        </div>
        </td>
        <td>
        <input type="text" name="college5" class="form-control">
        </td>
        <td>
        <input type="text" name="courses5" class="form-control">
        </td>
        <td>
        <input type="text" name="credits5" class="form-control">
        </td>
    </div>
    </tr>
    <tr>
    <div class="row">
    	<td>
        <div class="form-group">
            <select name="action6" value="">
            	<option value=""></option>
                <option value="Add">Add</option>
                <option value="Drop">Drop</option>
                <option value="Audit">Audit</option>
                <option value="CreditChange">Credit Change</option>
            </select>
        </div>
        </td>
        <td>
        <input type="text" name="college6" class="form-control">
        </td>
        <td>
        <input type="text" name="courses6" class="form-control">
        </td>
        <td>
        <input type="text" name="credits6" class="form-control">
        </td>
    </div>
    </tr>
    </table>
    <br>
    <br>
    <div class="row">
    	<input type="submit" class="btn btn-block btn-lg btn-primary" value="Submit"> 
    </div>
   	</form>
</div>
</body>
</html>
