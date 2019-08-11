<?php
	session_start();
	if($_SESSION['UserID'] == "")
	{
		echo "Please Login!";
		exit();
	}

	if($_SESSION['Status'] != "ACADEMIC")
	{
		echo "This page for User only!";
		exit();
	}	
	
	mysql_connect("localhost","root","12345678");
	mysql_select_db("record_db");
	$strSQL = "SELECT * FROM teaching WHERE UserID = '".$_SESSION['UserID']."' ";
	$objQuery = mysql_query($strSQL);
	
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <link rel="icon" href="https://templates.pingendo.com/assets/Pingendo_favicon.ico">
  <title>register</title>
  <meta name="description" content="Wireframe design of a checkout form by Pingendo">
  <meta name="keywords" content="Pingendo bootstrap example template wireframe checkout form">
  <meta name="author" content="Pingendo">
  <!-- CSS dependencies -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="wireframe.css">
</head>

<body class="bg-light">
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="text-center col-md-7 mx-auto">
          <h2><b>ลงทะเบียนครูประจำวิชา</b></h2>
        </div>
      </div>
    </div>
  </div>
  <div class="" style="">
    <div class="container">
      <div class="row">
        <div class="col-md-4 order-md-2">
          <h4 class="d-flex justify-content-between mb-3" contenteditable="true"> <span class="text-muted">รายชื่อครูประจำวิชา</span> </h4>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between">
              <div>
                <h6 class="my-0"><b>Product name</b></h6>
              </div> <span class="text-muted" contenteditable="true"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <div>
                <h6 class="my-0"><b>Product name</b></h6>
              </div> <span class="text-muted" contenteditable="true"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <div>
                <h6 class="my-0"><b>Product name</b></h6>
              </div> <span class="text-muted" contenteditable="true"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <div>
                <h6 class="my-0"><b>Second product</b></h6>
              </div> <span class="text-muted"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <div>
                <h6 class="my-0"><b>Second product</b></h6>
              </div> <span class="text-muted"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <div>
                <h6 class="my-0"><b>Second product</b></h6>
              </div> <span class="text-muted"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <div>
                <h6 class="my-0"><b>Second product</b></h6>
              </div> <span class="text-muted"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <div>
                <h6 class="my-0"><b>Third item</b></h6>
              </div> <span class="text-muted"><br></span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <div>
                <h6 class="my-0"><b>Third item</b></h6>
              </div> <span class="text-muted"><br></span>
            </li>
          </ul>
        </div>
        <div class="col-md-8 order-md-1">
          <form class="needs-validation" novalidate="" style="">
            <div class="row">
              <div class="col-md-6 mb-3"> <label for="firstName">รหัสประจำตัว</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                <div class="invalid-feedback"> Valid first name is required. </div>
              </div>
              <div class="col-md-6 mb-3"> <label for="lastName" contenteditable="true">ชื่อ-นามสกุล</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                <div class="invalid-feedback"> Valid last name is required. </div>
              </div>
            </div>
            <div class="mb-3"> <label for="username">เลขบัตรประจำตัวประชาชน</label>
              <div class="input-group">
                <input type="text" class="form-control" id="username" required="" placeholder="เลขบัตร 5 ตัวหลัง">
                <div class="invalid-feedback" style="width: 100%;"> Your username is required. </div>
              </div>
            </div>
            <div class="mb-3"> <label for="email">ระดับ<span class="text-muted"></span></label>
              <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
            </div>
            <div class="form-group row">
              <div class="col-10"><select class="custom-select d-block w-100" id="state" required="">
                  <option value="">มัธยมตอนต้น</option>
                  <option value="">มัธยมตอนปลาย</option>
                </select></div>
            </div>
            <div class="mb-3"> <label for="address">ระดับชั้น</label>
              <div class="invalid-feedback"> Please enter your shipping address. </div>
            </div>
            <div class="form-group row">
              <div class="col-10"><select class="custom-select d-block w-100" id="state" required="">
                  <option value="">มัธยมศึกษาปีที่1</option>
                  <option value="">มัธยมศึกษาปีที่2</option>
                  <option value="">มัธยมศึกษาปีที่3</option>
                  <option value="">มัธยมศึกษาปีที่4</option>
                  <option value="">มัธยมศึกษาปีที่5</option>
                  <option value="">มัธยมศึกษาปีที่6</option>
                </select></div>
            </div>
            <div class="mb-3"> <label for="address2">รหัสวิชา<br></label>
              <input type="text" class="form-control" id="address2"> </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row"><label class="col-2">วิชา</label>
                  <div class="col-10"><input type="text" class="form-control" id="lastName" placeholder="" value="" required=""></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row"><label class="col-2">สถานะ<br></label>
                  <div class="col-10"><select class="custom-select d-block w-100" id="state" required="">
                      <option value="California">วิชาการ</option>
                      <option value="California">ครูประจำวิชา</option>
                    </select></div>
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">ลงทะเบียน</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="assets/js/validation.js"></script>
</body>

</html>