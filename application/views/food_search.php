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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?php echo base_url('public'); ?>/index1.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <title>เลือกอาหาร</title>
</head>
<body>
  <div class="bg">
<br>

<div class="container" align="left">
<div class="row">
    <div class="col">
    <div class="card bg-dark">
    <div class="card-body">
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo site_url('Customer/index'); ?>">Home</a></li>
    <?php foreach ($foodshop as $x){ ?> 
    <li class="breadcrumb-item active" aria-current="page"><?php echo $x->nameShop; ?></li>
    <?php } ?>
    <?php foreach ($foodset as $x){ ?>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $x->name_set;?></li>
    <?php } ?>
  </ol>
</nav>
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
    <?php foreach ($foodset as $x){ ?>
    <h4>อาหารใน<?php echo $x->name_set;?> ("ขนาด<?php echo $x->size;?> <?php echo $x->unit_eat;?> คน")</h4>
      <?php } ?>
      <br>
  <div class="row">
  <?php foreach ($foodshop as $x){ ?>
    <div class="col-4">
    <div class="card" style="width: 18rem;">
    <img  src="<?php echo base_url('img'); ?>/<?php echo $x->img_shop;?>"  alt="..." style="width: 287px; height: 200px;">
  <div class="card-body">
    <h5 class="card-title">ชื่อร้าน : <?php echo $x->nameShop; ?></h5>
  </div>
</div>
    </div>
    <?php } ?>
    <?php foreach ($foodset as $x){ ?>
        <div class="col-4">
    <div class="card" style="width: 18rem;">
    <img  src="<?php echo base_url('img'); ?>/<?php echo $x->img_set;?>"  alt="..." style="width: 287px; height: 200px;">
  <div class="card-body">
    <h5 class="card-title">ชื่อชุดอาหาร : <?php echo $x->name_set; ?></h5>
  </div>
</div>
    </div>
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
<br>
    </div>
    <?php } ?>
    </div>
</div>



<div class="container" align="right">


 <h4>  <font color="red"> ราคา  <?php echo $x->price;?> บาท </font></h4>  
 
 <div class="row">
 <div class="col-10" align="right">
 <?php foreach ($foodshop as $x){ ?>
 <form action="<?= site_url('Customer/showproduct');?>" method="POST">
      <input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
<?php };?>
<?php foreach ($foodset as $x){ ?>
      <input type="text" name="id_set" value="<?php echo $x->id_set; ?>" hidden>
      <input type="submit" class="btn btn-primary btn-lg" name="light" value="ดูรายละเอียด>>">
</form>
<?php };?>
  </div>
  <div class="col-2" align="left">
<form action="<?= site_url('Customer/showproduct_customer');?>" method="POST">
<?php foreach ($foodshop as $x){ ?> <input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden> 
    <button type="submit" class="btn btn-secondary btn-lg" name="submit">ย้อนกลับ</button> 
</form>
</div>
      <?php };?>
      
    </div>
    </div>
</div>
</div>
</div>
<br>
</div>
</div>
</body>
<?php $this->load->view('footer');  ?>
</html>