<nav class="navbar navbar-default">
   <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-briefcase"></span> Work</a>
   </div>
   <div class="collapse navbar-collapse" id="collapse">
      <ul class="nav navbar-nav">
         <?php if (isset($_SESSION['sid']) ) {?>
            <li><a href="#">จัดการข้อมูล</a></li>
         <?php } else { ?>  
            <li><a href="#">จัดการข้อมูล</a></li>   <?php // หน้าเดิม ?>
         <?php } ?>
         <li><a href="#">ช่วยเหลือ</a></li>
      </ul>
   </div>
</nav>