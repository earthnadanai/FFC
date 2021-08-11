<?php defined('BASEPATH') or exit('No direct script access allowed');
      $this->load->view('bootstap');
      $this->load->view('navbar');
       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เลือกอาหาร</title>
</head>
<body>
<br>

<div class="container" align="left">
<div class="row">
    <div class="col">
    <div class="card bg-dark">
    <div class="card-body">
    <input type="submit" class="btn btn-secondary" name="secondary" value="1">
    
    <input type="submit" class="btn btn-secondary" name="secondary" value="2">
    
    <input type="submit" class="btn btn-secondary" name="secondary" value="3">
</div>
</div>
</div>
</div>
</div>




<br>

<div class="container" align="center">
<div class="row">
    <div class="col">
    <div class="card bg-light">
    <div class="card-body">
    <?php foreach ($result as $x){ ?>
    <h4>อาหารใน<?php echo $x->name_set;?> ("ขนาด<?php echo $x->size;?>")</h4>
      <?php } ?>
  <div class="row">
  <?php foreach ($re as $x){ ?>
    <div class="col-4">
    <div class="card" style="width: 18rem;">
    <img  src="<?php echo base_url('img'); ?>/<?php echo $x->img_pro;?>"  alt="..." style="width: 287px; height: 200px;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $x->nameProduct; ?></h5>
    <p class="card-text">
    ประเภทอาหาร : <?php echo $x->type; ?><br>
    <?php echo $x->info; ?>
  <br>

   
  
    </p>
  </div>
</div>
    </div>
    <?php } ?>
    </div>
</div>
<div class="container" align="right">
<form action="<?= site_url('Customer/showproduct_customer');?>" method="POST">
<?php foreach ($viewShop as $x){ ?> <input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden><?php echo $x->id_shops; ?>
    
    <h4> <img src="../../img/paid.png" style="width: 20px; height:20;"> <font color="red"> ราคา 3000 บาท </font></h4>
  
    
    <button type="submit" class="btn btn-outline-success btn" name="submit"><img src="../../img/shoppingicon.png" style="width: 25px; height:25;"> สั่งซื้อ</button>
    <button type="submit" class="btn btn-secondary" name="submit">ย้อนกลับ</button>
      
      <?php };?>
    </div>
    </div>
</div>
</div>
</div>
<br>
</body>
<?php $this->load->view('footer');  ?>
</html>