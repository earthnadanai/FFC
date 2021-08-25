<?php defined('BASEPATH') or exit('No direct script access allowed');
      $this->load->view('bootstap');    
      $this->load->view('navbar.php');  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
<div class="container" align="center">
  <div class="row">
    <div class="col">

<div class="card">
  <div class="card-body">

  <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">ที่ต้องรอการยืนยัน</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">ที่ต้องจัดทำ</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">ที่ต้องได้รับ</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="P1-tab" data-bs-toggle="tab" data-bs-target="#P1" type="button" role="tab" aria-controls="profile" aria-selected="false">สำเร็จแล้ว</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="P2-tab" data-bs-toggle="tab" data-bs-target="#P2" type="button" role="tab" aria-controls="profile" aria-selected="false">ยกเลิกแล้ว</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  <div class="card-body" align="left">
  <div class="row">  
  <div class="col">
      <img src="รูป" alt="..."style="width: 50px; max-hight: 50px">
      </div>
      <div class="col">
      ชื่อชุดอาหาร
      </div>
      <div class="col">
      <h5 >฿ราคา</h5>
      </div> 
      <div class="col">
      <h5 >วันที่รับ</h5>
      </div> 
      <div class="col">
      <h5 class="text-warning">โสด</h5>
      </div> 
      <div class="col">
      
    
      
      <input type="submit" class="btn btn-danger" name="danger" value="ยกเลิก">
      </div> 

  </div>   
  </div>

  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  <div class="card-body" align="left">
  <div class="row">  
  <div class="col">
      <img src="รูป" alt="..."style="width: 50px; max-hight: 50px">
      </div>
      <div class="col">
      ชื่อชุดอาหาร
      </div>
      <div class="col">
      <h5 >฿ราคา</h5>
      </div> 
      <div class="col">
      <h5 >วันที่รับ</h5>
      </div> 
      <div class="col">
      <h5 class="text-warning">โสด2</h5>
      </div> 
      <div class="col">
      
    
      
      <input type="submit" class="btn btn-danger" name="danger" value="ยกเลิก">
      </div> 

  </div>   
  </div>
  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">..3.</div>
  <div class="tab-pane fade" id="P1" role="tabpanel" aria-labelledby="P1-tab">..4.</div>
  <div class="tab-pane fade" id="P2" role="tabpanel" aria-labelledby="P2-tab">..5.</div>
</div>

  </div>
</div>

</div>
</div>
</div>
</body>
<br>
<?php $this->load->view('footer'); ?>
</html>