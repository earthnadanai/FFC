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
    <br><br>
<div class="container" align="center">
  <div class="row">
    <div class="col">

<div class="card">
  <div class="card-body">
  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">ที่ต้องชำระเงิน</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">รอร้านค้ายืนยัน</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">ที่ต้องได้รับ</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-finish-tab" data-bs-toggle="pill" data-bs-target="#pills-finish" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">สำเร็จแล้ว</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-history-tab" data-bs-toggle="pill" data-bs-target="#pills-history" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">ประวัติการสั่ง</button>
  </li>

</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
  <?php foreach ($Order as $xx){ ?>
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

  </div>   
  </div>
  <?php };?>

  ...</div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
  <?php foreach ($Order as $xx){ ?>
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
  
  
  
  
    </div>   
  </div>
  <?php };?>    
  ...</div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
  <?php foreach ($Order as $xx){ ?>
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



  </div>   
  </div> 
  <?php };?> 
  ...</div>


  <div class="tab-pane fade" id="pills-finish" role="tabpanel" aria-labelledby="pills-finish-tab">
  <?php foreach ($Order as $xx){ ?>
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

  </div>   
  </div>
  <?php };?>    
  ...</div>


  <div class="tab-pane fade" id="pills-history" role="tabpanel" aria-labelledby="pills-history-tab">
  <?php foreach ($Order as $xx){ ?>
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
      <h5 ><?php echo $xx->date_customer;?></h5>
      </div>  








  </div>   
  </div> 
  <?php };?>   
  ...</div>
  





</div>
  
</div>

</div>
</div>
</div>
<br><br><br><br><br><br><br><br>

</div>

</body>

<?php $this->load->view('footer'); ?>
</html>