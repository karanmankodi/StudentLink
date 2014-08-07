<?php
session_start();
?>
<script src="Styles/JS/jquery-1.8.3.min.js"> </script>
<?php
$username = htmlentities($_POST["username"]);
$password = htmlentities($_POST["password"]);
$action = htmlentities($_GET["action"]);

if (isset($_SESSION["username"])) {	
	unset($_SESSION["username"]);
	unset($_SESSION["login"]);	
}

$logout = strcmp($action, "logout");
if($logout == 0) {
	unset ($_SESSION["login"]);
	unset ($_SESSION["username"]);
	$_SESSION["login"] = "logout";
	$sessionstatus = $_SESSION["login"];
	session_destroy();
	echo 
		"<script>
			$(document).ready(function() {
				alert('You have successfully logged out.');
			});
		</script>";  
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=Index.php">'; 
} 
	
$login = strcmp($action, "login");
if($login == 0) {
	$mysqliObj = new mysqli("localhost", "root", "root", "Project");
	if (mysql_errno()) {
		echo "Error occurred while trying to connect to Database.";
		exit;
	}
	$queryCheck = "SELECT EXISTS(SELECT * FROM UserAccounts WHERE UserName = '$username' AND Password = '$password')";
	$resultBin = $mysqliObj->query($queryCheck);
	while ($row = $resultBin->fetch_array(MYSQLI_BOTH)) 
	{
		if ($row[0] == 0) { 
			unset ($_SESSION["login"]);
			$_SESSION["login"] = "fail";
			$sessionstatus = $_SESSION["login"];

			echo 
			"<script>
				$(document).ready(function() {
					alert('Login failed.');
				});
			</script>";  
			 
		} else if ($row[0] == 1) {
			$_SESSION["login"] = "pass";
			$_SESSION["username"] = "$username";  
		}
	}
	// Close the connection
	$mysqliObj->close();
}
		
		
	
?>