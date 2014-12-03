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
<div data-role="page" id="pageIndex">
  <div data-role="content">
    <p><img src="images/food.jpg" width="480" height="164" /></p>
    <p>&nbsp;
    <ul data-role="listview" data-split-icon="arrow-r">
      <li data-role="list-divider">New Your Recommended</li>

<?
$objConnect = mysql_connect("localhost","root","1234") or die(mysql_error());
$objDB = mysql_select_db("db_user");
mysql_query("SET NAMES utf8", $objConnect);
	   
$strSQL = " SELECT * FROM tbl_report ORDER BY report_id DESC LIMIT 0, 3 ";

$objQuery = mysql_query($strSQL) or die (mysql_error()); 

while($objResult = mysql_fetch_array($objQuery))
{		
?>   
      
      <li><a href="#">
        <h3><?=$objResult["foodname"];?></h3>
        <p>By : <?=$objResult["postby"];?></p>
      </a><a href="list.php?fid=<?=$objResult["foodid"];?>">อ่านเพิ่มเติม</a></li>

<?
}
?>
    </ul>
    </p>
  <a href="recom.php" data-role="button" data-icon="info">All Your Recommended</a></div>
  <div data-role="footer" data-position="fixed">
	<div data-role="navbar">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="frmSave.php">Add your recommended</a></li>
      </ul>
    </div>	
  </div>
</div>
</body>
</html>