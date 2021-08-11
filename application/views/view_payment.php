<?php defined('BASEPATH') or exit('No direct script access allowed');
      $this->load->view('bootstap');    
      $this->load->view('navbar.php');  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?php echo base_url('public'); ?>/index2.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="bg"> 
<div class="container" align="center">
    <br><br>
  <div class="row">

  
  <div class="col">
  <div class="card">
  <div class="card">
  
  <div class="card-body" align="left">
  <blockquote class="blockquote mb-0">
  <p><img src="../../img/baseline_location_on_black_36dp.png" alt="...">
  <form action="<?= site_url('...');?>" method="POST"> 
      จอร์นชาวไร่</p>
      
    </blockquote>
  </div>
</div>
</div>
  </div>
  </div>
  <br>
  
  <div class="row">
  <div class="col">
  <div class="card">
  <div class="card-header"align="left">
    ดึงชื่อร้าน
  </div>
  <div class="card-body" align="left">
    <blockquote class="blockquote mb-0">
      <p>
      <img src="ดึงรูปชุดเซ็ต" alt="...">
      ดึงชื่อชุดอาหาร
      <h5 >ดึงราคา</h5>
      <h5 >ดึงราคา2</h5>
      <form action="<?= site_url('...');?>" method="POST">
    
      
      
      <input type="submit" class="btn btn-danger" name="danger" value="ลบ"></form>
    </p>

    </blockquote>
  </div>
</div>
      
  </div>
  </div>  
  <br>
  <div class="row">
  <div class="col">
  <div class="card">
  
  <div class="card-body" align="left">
    <blockquote class="blockquote mb-0">
      <p>From</p>
      <h5>กำหนดวันส่งอาหาร</h5>
      
      <input type="date" id="startorder" name="startorder"><br>
      <p class="text-danger">*หมายเหตุ สั่งก่อนวันที่สั่งล่วงหน้าอย่าน้อย 3 วัน และตรวจสอบเมื่อใส่ข้อมูลเสร็จสิ้น</p>
    </blockquote>
  </div>
</div>
  </div>
  </div>  

  <br>
   

  
  <div class="row">
  <div class="col"><div class="card">
  
  <div class="card-body" align="right">
    <blockquote class="blockquote mb-0">
      <p>ราคา
      <input type="submit" class="btn btn-success" name="success" value="สั่งเลย!!">
      <input type="submit" class="btn btn-light" name="light" value="ย้อนกลับ">
      </p>
    </blockquote>
  </div>
</div>
  </div>
  </div>  
  </form>
   
      
  


  <br>
 </div>
 

 </div>
</body>
</html>

<?php $this->load->view('footer');  ?>
</html>