<?php
session_start();

	 if (isset($_POST['submit'])){
		$uname = $_POST["uname"];
	  	$pword = $_POST['pword'];
	  	if($uname ==""){
	  			echo "คุณยังไม่ได้กรอกชื่อผู้ใช้ครับ";
		} else if($pword =="") {      
				echo "คุณยังไม่ได้กรอกรหัสผ่านครับ";
		} else {                                     
			include ("include/config.php");

			$check_log = "SELECT * from tbl_member where (user='".$uname."' and pass='".$pword."')";
			$result = mysql_query($check_log);
			$num = mysql_num_rows($result);
			if($num <= 0) {                                                         
				echo "Username หรือ Password อาจจะผิดกรุณา Login ใหม่อีกครั้ง <br /><a href='Homepage.php'>Back</a>";
			} else {
				while ($data = mysql_fetch_array($result) ) 
				{
					if($data[status] == 'admin'){                          //ตรวจสอบสถานะของผู้ใช้ว่าเป็น Admin
						echo "Hi Welcome Back Admin <br />";             //สร้าง session สำหรับให้ admin นำค่าไปใช้งาน
							$_SESSION[ses_userid] = session_id();            //สร้าง session สำหรับเก็บค่า ID
							$_SESSION[ses_username] = $username;      //สร้าง session สำหรับเก็บค่า Username
							$_SESSION[ses_status] = "admin";						          
						echo "<meta http-equiv='refresh' content='1;URL=index_admin.php'>";//ส่งค่าจากหน้านี้ไปหน้า index_admin.php
						echo "waiting…………………………";
					} else if($data[status] == 'user') {
							$_SESSION[ses_userid] = session_id();                      //สร้าง session สำหรับให้ User นำไปใช้งาน
							$_SESSION[ses_username] = $username;
							$_SESSION[ses_status] = "user";							 //ตรวจสอบสถานะของผู้ใช้งานว่าเป็น user
						echo "<meta http-equiv='refresh' content='1;URL=index_user.php'>"; //ส่งค่าจากหน้านี้ไปหน้า index_user.php
						echo "<br />Waiting User…………………………";
					}
				}
			}
		}
	 }
?>