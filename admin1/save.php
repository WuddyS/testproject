<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="jquery-mobile/jquery.mobile.theme-1.0.min.css" rel="stylesheet" type="text/css" />
<link href="jquery-mobile/jquery.mobile.structure-1.0.min.css" rel="stylesheet" type="text/css" />
<script src="jquery-mobile/jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="jquery-mobile/jquery.mobile-1.0.min.js" type="text/javascript"></script>
</head>

<body>

<?
/*
$objConnect = mysql_connect("localhost","root","1234") or die(mysql_error());
$objDB = mysql_select_db("foodDB");
mysql_query("SET NAMES utf8", $objConnect);
*/

$objConnect = mysql_connect("localhost","omyeemco_root","ball1978") or die(mysql_error());
$objDB = mysql_select_db("omyeemco_fooddb");
mysql_query("SET NAMES utf8", $objConnect);
	
$name=$_POST['txtName'];
$typeid=$_POST['selectType'];
$address=$_POST['txtAddress'];
$phone=$_POST['txtPhone'];
$detail=$_POST['txtDetail'];
$menu=$_POST['txtMenurecom'];
$timeservice=$_POST['txtService'];
$by=$_POST['txtBy'];
$success = false;

$strSQL ="INSERT INTO tbfood (foodname, ref_typeid, foodaddress, phone, detail, menurecom, timeservice, postby) 
	VALUES ('$name','$typeid', '$address', '$phone', '$detail', '$menu', '$timeservice', '$by')";
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
		<p>&nbsp;<a href="index.php" data-role="button" data-icon="home">Go to Home</a></p>
    </div>

<? } else { ?>
	<div style="text-align:center">
	  <h2>Oops!</h2>
		<p style="color:#F00">Sorry, can not save your recommeded.</p>
		<p style="color:#F00">&nbsp;<a href="frmSave.php" data-role="button" data-icon="back">Try Again</a></p>
    </div>	
<? } ?>
      
  </div>
</div>
</body>
</html>