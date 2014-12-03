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
	<div data-role="page" id="page11">
		<div data-role="header">
			<h1>ฟอร์มเเจ้งซ่อม</h1>
		</div>
		<form name="form1" method="POST" action="save.php">
		<?
		include ("include/config.php");

		$sql = "SELECT * FROM tbl_typeproblem WHERE typeid";

		$objQuery = mysql_query($sql) or die (mysql_error()); 
		?>
		<div data-role="content" >
			  <div data-role="fieldcontain">
			    <label for="textinput"><strong>ชื่อผู้แจ้ง :</strong></label>
			    <input type="text" name="reporter" id="textinput" value=""  />
			  </div>	
		      <div data-role="fieldcontain">	      
		      	<label for="textinput2"><strong>Email :</strong></label>
		      	<input type="text" name="email" id="textinput2" value=""  />
		      </div>	     
              <div data-role="fieldcontain">
                <label for="textinput3"><strong>ห้อง :</strong></label>               
	              <input type="text" name="room" id="textinput3" value=""  />
              </div>		    
		      <div data-role="fieldcontain">
		            <label for="selectmenu" class="select"><strong>ประเภท:</strong></label>
		            <select name="selectmenu" id="selectmenu">
		            
		              <?
						while($objResult = mysql_fetch_array($objQuery))
					  {	
					  ?>      
        				<option value="<?=$objResult["typeid"];?>"><?=$objResult["typename"];?></option>
					  <?
					  }
					  ?>
					</select>
		      </div>        
		      <div data-role="fieldcontain">		            
		            <label for="textarea"><strong>อาการ:</strong></label>
		            <textarea cols="40" rows="15" name="problem" id="textarea"></textarea>                   			
		      </div>
		      <br />    
			    <div data-role="controlgroup" data-type="horizontal" align="center">
			      <input name="btnSubmit" type="submit" id="btnSubmit" value="Submit" />
			      <input name="btnReset" type="reset" id="btnReset" value="Reset" />
			    </div>
			  <br />
		</div>
		</form>
		<div data-role="footer" data-position="fixed">
			<h4>งานซ่อมบำรุงคอมพิวเตอร์โรงเรียนกัลยาณวัตร</h4>
		</div>
	</div>
</body>
</html>