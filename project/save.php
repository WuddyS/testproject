<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>Kw &middot; System Repairing Service</title>
	<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="jquery-mobile/jquery.mobile.theme-1.0.min.css" rel="stylesheet" type="text/css"/>
	<link href="jquery-mobile/jquery.mobile.structure-1.0.min.css" rel="stylesheet" type="text/css"/>
	<script src="jquery-mobile/jquery-1.6.4.min.js" type="text/javascript"></script>
	<script src="jquery-mobile/jquery.mobile-1.0.min.js" type="text/javascript"></script>
</head> 
<body>

<?
include ('include/config.php');

$room=$_POST['room'];
$problem=$_POST['problem'];
$reporter=$_POST['reporter'];
$typeproblem=$_POST['selectmenu'];
$email=$_POST['email'];
$success = false;

$strSQL ="INSERT INTO tbl_report (room, problem, reporter, email) 
	VALUES ('$room','$problem', '$reporter', '$email')";
$objQuery = mysql_query($strSQL);

if ($objQuery) {
	$success = true;
} else {
	$success = false;
}
?>  

<div data-role="page" id="pageSave">
  <div data-role="header">
    <h1>Your Recommended</h1>
  </div>
  <div data-role="content">
<? if ($success==true) { ?>
	<div style="text-align:center">
		<h2>Thanks!</h2>
		<p>Thanks for your recommended!</p>
		<p>&nbsp;<a href="index_user.php" data-role="button" data-icon="home">Go to Home</a></p>
    </div>

<? } else { ?>
	<div style="text-align:center">
	  <h2>Oops!</h2>
		<p style="color:#F00">Sorry, can not save your recommeded.</p>
		<p style="color:#F00">&nbsp;<a href="page21.php" data-role="button" data-icon="back">Try Again</a></p>
    </div>	
<? } ?>
      
  </div>
</div>
</body>
</html>