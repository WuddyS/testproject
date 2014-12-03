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
<div data-role="page" id="pageForm">
  <div data-role="header">
    <h1>Your Recommended</h1>
  </div>
  <div data-role="content">
    <form id="form1" name="form1" method="post" action="http://www.omyeem.com/Workshop02/save.php">

<?
$objConnect = mysql_connect("localhost","omyeemco_root","ball1978") or die(mysql_error());
$objDB = mysql_select_db("omyeemco_fooddb");
mysql_query("SET NAMES utf8", $objConnect);
	  
$strSQL = " SELECT * FROM tbtype
      	WHERE status=1
      	ORDER BY typename ASC ";

$objQuery = mysql_query($strSQL) or die (mysql_error()); 
?>  


    <div data-role="fieldcontain">
      <label for="selectType" class="select">ประเภทร้าน : </label>
      <select name="selectType" id="selectType">
<?
while($objResult = mysql_fetch_array($objQuery))
{	
?>      
        <option value="<?=$objResult["typeid"];?>"><?=$objResult["typename"];?></option>
<?
}
?>
      </select>
      <br />
      
      <div data-role="fieldcontain">
        <label for="txtName">ชื่อร้าน :</label>
        <input name="txtName" type="text" id="txtName" value="" maxlength="60"  />
      </div>        
        <br />
        
        <div data-role="fieldcontain">
          <label for="txtAddress">สถานที่ตั้ง :</label>
          <textarea cols="40" rows="5" name="txtAddress" id="txtAddress"></textarea>
        </div>          
          <br />
          
          <div data-role="fieldcontain">
            <label for="txtPhone">โทรศัพท์ :</label>
            <input name="txtPhone" type="text" id="txtPhone" value="" maxlength="15"  />
          </div>            
            <br />
            
            <div data-role="fieldcontain">
              <label for="txtDetail">รายละเอียดร้าน :</label>
              <textarea cols="40" rows="5" name="txtDetail" id="txtDetail"></textarea>
            </div>              
              <br />
              
              <div data-role="fieldcontain">
                <label for="txtService">เวลาเปิด/ปิด :</label>
                <input name="txtService" type="text" id="txtService" value="" maxlength="11"  />
(ex. 10.00-21.30)
              </div>
<br />

<div data-role="fieldcontain">
  <label for="txtMenurecom">เมนูแนะนำ:</label>
  <textarea cols="40" rows="5" name="txtMenurecom" id="txtMenurecom"></textarea>
</div>  
  <br />
  
  <div data-role="fieldcontain">
    <label for="txtBy">ผู้แนะนำ :</label>
    <input name="txtBy" type="text" id="txtBy" value="" maxlength="40"  />
  </div>    
    <br />
    
    <div data-role="controlgroup" data-type="horizontal">
      <input name="btnSubmit" type="submit" id="btnSubmit" value="Submit" />
      <input name="btnReset" type="reset" id="btnReset" value="Reset" />
    </div>
    <br />

    </form>
  </div>
</div>
</body>
</html>