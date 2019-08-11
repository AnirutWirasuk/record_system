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

<body class="bg-light" style="	background-position: top left, top left;	background-size: 100%, 100%;	background-repeat: repeat, repeat;	background-image: url(img/bg_login.jpg);">
  <div class="py-5" style="	background-image: url(img/bg_login.JPG);	background-position: left center;	background-size: cover;	background-repeat: repeat;">
    <div class="container">
      <div class="row">
        <div class="p-5 col-lg-6">
          <h1>ระบบบันทึกการสอน</h1>
          <p class="mb-3">ในการใช้งานระบบ จำเป็นต้องใช้รหัสประจำตัวครูหรือเจ้าหน้าที่และเลขบัตรประจำตัวประชาชน 5 ตัวหลัง เพื่อยืนยันตัวตนการใช้งาน</p>
          <form name="form1" method="post" action="check_login.php">
            <div class="form-group"> <input name="txtUsername" type="text" class="form-control" placeholder="รหัสประจำตัว" id="txtUsername"> </div>
            <div class="form-group"> <input name="txtPassword" type="password" class="form-control" placeholder="เลขบัตรประชาชน 5 ตัวหลัง" id="txtPassword"> <small class="form-text text-muted text-right">
                <a href="#">ใช้งานไม่ได้ติดต่อผู้ดูแลระบบ</a>
              </small> </div> <button type="submit" name="Submit" class="btn btn-primary">ตกลง</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  
</body>

</html>