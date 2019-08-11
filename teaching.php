<?php
	session_start();
	if($_SESSION['UserID'] == "")
	{
		echo "Please Login!";
		exit();
	}

	if($_SESSION['Status'] != "TEACHING")
	{
		echo "This page for User only!";
		exit();
	}	
	
	mysql_connect("localhost","root","12345678");
	mysql_select_db("record_db");
	$strSQL = "SELECT * FROM personnel WHERE UserID = '".$_SESSION['UserID']."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <link rel="icon">
  <title>teaching_record_system</title>
  <meta name="description">
  <meta name="keywords">

  <!-- CSS dependencies -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="wireframe.css">
</head>

<body class="bg-light">
  <div class="d-flex flex-column flex-md-row align-items-center p-3 mb-3 box-shadow border-bottom bg-primary shadow border-primary">
    <h4 class="my-0 mr-md-auto font-weight-normal shadow-none">ส่วนของการบันทึกการสอน</h4>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-light" href="#">หน้าหลัก</a>
      <a class="p-2 text-light" href="edit_profile.php">แก้ไขข้อมูล</a><a class="p-2 text-light" href="logout.php">ออกจากระบบ</a>
    </nav>
    <a class="btn shadow-none btn-outline-primary text-light"  style="" contenteditable="true"></a>
  </div>
  <div class="">
    <div class="container" style="">
      <div class="row">
        <div class="col-md-4 order-md-2">
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active"> ข้อมูลส่วนตัว</a>
            <a href="#" class="list-group-item list-group-item-action">ชื่อผู้ใช้: <?php echo $objResult["Name"]?></a>
            <a href="#" class="list-group-item list-group-item-action">สถานะ : <?php echo $objResult["Status"]?></a>
          </div>
        </div>
        <div class="col-md-8 order-md-1">
          
          <div class="row">
            <div class="col-md-6" style="">
              <div class="card-body p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="img/Icon01.png" width="150">
                <h4>รายงานข้อมูล</h4>
                <p class="mb-0">So absorbed in the exquisite sense of mere tranquil existence.</p>
              </div>
            </div>
            <div class="col-md-6" style="">
              <div class="card-body p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="img/Icon07.jpg" width="150">
                <h4>ข้อมูลบันทึกการสอน</h4>
                <p class="mb-0">So absorbed in the exquisite sense of mere tranquil existence.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="mb-0">สงวนลิขสิทธิ์ © 2019 งานส่งเสริมความสามารถพิเศษคอมพิวเตอร์. โรงเรียนเทพมิตรศึกษา</p>
        </div>
      </div>
    </div>
  </div>
</body>

</html>