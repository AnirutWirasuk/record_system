<?php
	session_start();
	mysql_connect("localhost","root","12345678");
	mysql_select_db("record_db");
	$strSQL = "SELECT * FROM personnel WHERE Username = '".mysql_real_escape_string($_POST['txtUsername'])."' 
	and Password = '".mysql_real_escape_string($_POST['txtPassword'])."'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
			$_SESSION["UserID"] = $objResult["UserID"];
			$_SESSION["Status"] = $objResult["Status"];

			session_write_close();
			
			if($objResult["Status"] == "ACADEMIC")
			{
				header("location:academic.php");
			}
			else
			{
				header("location:teaching.php");
			}
	}
	mysql_close();
?>