<?
$host = "127.0.0.1";
$user = "root";
$pass = "1234";
$dbname = "db_user";
$tblname = "tbl_member";

$objConnect = mysql_connect($host,$user,$pass);
$objDB = mysql_select_db($dbname);

mysql_query("SET NAMES UTF8");



?>