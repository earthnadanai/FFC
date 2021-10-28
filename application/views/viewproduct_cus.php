<?php defined('BASEPATH') or exit('No direct script access allowed');
      $this->load->view('bootstap');   
      $this->load->view('navbar.php');   
?>
<html>
<head>
<title>view Product</title>
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
    <?php foreach ($viewShop as $x){ ?>
      <div class="ex1"><font color= "white"><?php echo $x->nameShop; ?></font></div><br>
    <?php };?>
  <div class="row">

  <?php foreach ($re as $x){ ?>
    <div class="col-12">
      
    
    <div class="card mb-3" id="myid1" style="max-width: 800px; max-hight: 800" >
  <div class="row g-0">

    <div class="col-md-6">
      <img src="<?php echo base_url('img'); ?>/<?php echo $x->img_set;?>" class="img-fluid rounded-start" alt="..."style="width: 510px; height: 270px;">
    </div>
    <div class="col-md-6">
      <div class="card-body">
        <h5 class="card-title">
        <h5> <b><font color= "white"><?php echo $x->name_set;?><br> </font></b></h5>
        </h5>
        <p class="card-text">
        <h5><font color= "white"> ราคา: <?php echo $x->price;?> </font></h5>
        </p>
        <p class="card-text">
        <h5><font color= "white"> ขนาด: <?php echo $x->size;?></p> </font></h5>

        <form action="<?= site_url('Customer/buy_product');?>" method="POST">
        
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
    <input type="text" name="id_customer" value="<?php echo $this->session->userdata('id');?>" hidden>
        <input type="text" name="id_sets" value="<?php echo $x->id_set; ?>" hidden>
        <?php foreach ($viewShop as $xx){ ?> 
    <?php if (isset($this->session->userdata['firstname'])) { ?>
    <input type="submit" class="btn btn-success " name="success" id="<?php echo $x->id_set; ?>"value="สั่งเลย!!">
    <?php } else{ ?>
        <a href="<?php echo site_url('User/page_login'); ?>" class="btn btn-success"> สั่งเลย!!</a>
    <?php } ?>
    </form>
      <form action="<?= site_url('Customer/showproduct');?>" method="POST">
      <input type="text" name="id" value="<?php echo $xx->id_shops; ?>" hidden>
    <?php };?>
      <input type="text" name="id_set" value="<?php echo $x->id_set; ?>" hidden>
      <input type="submit" class="btn btn-light <?php echo $x->id_set; ?>" name="light" value="ดูรายละเอียด>>">
      </form>
        </p>
      </div>
    </div>
  </div>
</div>
</div>
<?php };?>
</div>
</div>
      
   
</div>
<?php
$conn = null;
?>
</body>
<?php $this->load->view('footer'); ?>
</html>






