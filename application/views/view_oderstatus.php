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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?php echo base_url('public'); ?>/index2.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<div class="bg">
    <br>
<div class="container" align="center">
  <div class="row">
    <div class="col">

<div class="card">
  <div class="card-body">

  <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">ที่ต้องชำระเงิน</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">รอร้านค้ายืนยัน</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">ที่ต้องได้รับ</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="P1-tab" data-bs-toggle="tab" data-bs-target="#P1" type="button" role="tab" aria-controls="profile" aria-selected="false">สำเร็จแล้ว</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="P2-tab" data-bs-toggle="tab" data-bs-target="#P2" type="button" role="tab" aria-controls="profile" aria-selected="false">ประวัติการสั่ง</button>
  </li>
</ul>
<?php foreach ($Order as $xx){ ?>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  <div class="card-body" align="left">
  <div class="row">  
  <div class="col">
      <img src="<?php echo base_url('img'); ?>/<?php echo $xx->img_set;?>" alt="..."style="width: 150px; max-hight: 150px">
      </div>
      <div class="col">
      <?php echo $xx->name_set;?> 
      </div>
      <div class="col">
      <h5 ><?php echo $xx->price;?> </h5>
      </div> 
      <div class="col">
      <h5 ><?php echo $xx->date_customer;?></h5>
      </div> 
      
      <div class="col">
      
    
      <button type="button" class="btn btn-info">ชำระเงิน</button>
      <input type="submit" class="btn btn-danger" name="danger" value="ยกเลิก">
      </div> 
  <?php };?>
  </div>   
  </div>

  </div>
  <?php foreach ($Order as $xx){ ?>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  <div class="card-body" align="left">
  <div class="row">  
  <div class="col">
      <img src="<?php echo base_url('img'); ?>/<?php echo $xx->img_set;?>" alt="..."style="width: 150px; max-hight: 150px">
      </div>
      <div class="col">
      <?php echo $xx->name_set;?> 
      </div>
      <div class="col">
      <h5 ><?php echo $xx->price;?></h5>
      </div> 
      <div class="col">
      <h5 ><?php echo $xx->date_shop;?></h5>
      </div> 
      <div class="col">
      <h5 class="text-warning"><?php echo $xx->status_shop;?></h5>
      </div> 
      <div class="col">
      
    
      
      <input type="submit" class="btn btn-danger" name="danger" value="ยกเลิก">
      </div> 
      <?php };?>
  </div>   
  </div>
  </div>
  <?php foreach ($Order as $xx){ ?>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
  <div class="card-body" align="left">
  <div class="row">  
  <div class="col">
      <img src="<?php echo base_url('img'); ?>/<?php echo $xx->img_set;?>" alt="..."style="width: 150px; max-hight: 150px">
      </div>
      <div class="col">
      <?php echo $xx->name_set;?> 
      </div>
      <div class="col">
      <h5 ><?php echo $xx->price;?></h5>
      </div> 
      <div class="col">
      <h5 ><?php echo $xx->date_shop;?></h5>
      </div> 
      <div class="col">
      <h5 class="text-warning"><?php echo $xx->status_shop;?></h5>
      </div> 
      <div class="col">
      
    
      
      
      </div> 
      <?php };?>
  </div>   
  </div>
  </div>
  
  <?php foreach ($Order as $xx){ ?>
  <div class="tab-pane fade" id="P1" role="tabpanel" aria-labelledby="P1-tab">
  <div class="card-body" align="left">
  <div class="row">  
  <div class="col">
      <img src="<?php echo base_url('img'); ?>/<?php echo $xx->img_set;?>" alt="..."style="width: 150px; max-hight: 150px">
      </div>
      <div class="col">
      <?php echo $xx->name_set;?> 
      </div>
      <div class="col">
      <h5 ><?php echo $xx->price;?></h5>
      </div> 
      <div class="col">
      <h5 ><?php echo $xx->date_shop;?></h5>
      </div> 
      <div class="col">
      
      </div> 
      <div class="col">
      
    
      <button type="button" class="btn btn-success">ฉันได้ตรวจสอบและยอมรับอาหาร</button>
      
      </div> 
      <?php };?>
  </div>   
  </div> 
  </div>
  <div class="tab-pane fade" id="P2" role="tabpanel" aria-labelledby="P2-tab">..5.</div>
</div>

  </div>
</div>

</div>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</div>

</body>

<?php $this->load->view('footer'); ?>
</html>