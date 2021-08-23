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


 <h4>  <font color="red"> ราคา  <?php echo $x->price;?> บาท </font></h4>  
 
 <div class="row">
 <div class="col-10" align="right">
 
<form action="<?= site_url('Customer/buy_product');?>" method="POST" >
<?php foreach ($result as $x){ ?>
<div class="col-sm-12">
      <input type="text" name="id_order"  class="form-control" value="<?php echo $x->id_set; ?>" hidden>
</div>
<div class="col-sm-12">
      <input type="text" name="id_customer"  class="form-control" value="<?php echo $this->session->userdata('id');?>" hidden>
    </div>
    <div class="col-sm-12">
      <input type="text" name="id_shop"  class="form-control" value="<?php echo $x->id_set_shop; ?>" hidden>
    </div>
    <div class="col-sm-12">
      <input type="text" name="nameProduct"  class="form-control" value="<?php echo $x->name_set; ?>" hidden>
    </div>
    <div class="col-sm-12">
      <input type="text" name="image"  class="form-control" value="<?php echo $x->img_set; ?>" hidden>
    </div>
    <div class="col-sm-12">
      <input type="text" name="price"  class="form-control" value="<?php echo $x->price; ?>" hidden>
    </div>
    <div class="col-sm-12">
      <input type="text" name="name_size"  class="form-control" value="<?php echo $x->size; ?>" hidden>
    </div> 
  <?php };?>
  <input type="text" name="id_customer" value="<?php echo $this->session->userdata('id');?>" hidden>
<input type="submit" class="btn btn-success btn-lg" name="submit" value="สั่งเลย!!"> 
  </form>
  
  </div>
  <div class="col-2" align="left">
<form action="<?= site_url('Customer/showproduct_customer');?>" method="POST">
<?php foreach ($viewShop as $x){ ?> <input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden> 
    <button type="submit" class="btn btn-secondary btn-lg" name="submit">ย้อนกลับ</button> 
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