<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url('public'); ?>/b.css">
</head>
<body>

<div class="header">

    
    <?php 
    $a = $this->session->userdata('status');
    $b = "1";
    $c = "2";
    $d = "3";
    if((!strcmp($a,$b)))  { ?>
    <a href="<?php echo site_url('Admin/showcustomer_admin'); ?>" class="logo">
    <img src="<?php echo base_url('img'); ?>/LOGOFFS.png" width="70" height="50" alt="">
    FoodForCatering
    </a>
    <?php } 
    elseif ((!strcmp($a,$c))) {?>
      <a href="<?php echo site_url('Customer/index'); ?>" class="logo">
    <img src="<?php echo base_url('img'); ?>/LOGOFFS.png" width="70" height="50" alt="">
    FoodForCatering 
    </a>
    <?php } elseif ((!strcmp($a,$d))) {?>
      <a href="<?php echo site_url('Product/page_shop'); ?>" class="logo">
    <img src="<?php echo base_url('img'); ?>/LOGOFFS.png" width="70" height="50" alt="">
    FoodForCatering 
    </a>
    <?php } else { ?>
      <a href="<?php echo site_url('Customer/index'); ?>" class="logo">
    <img src="<?php echo base_url('img'); ?>/LOGOFFS.png" width="70" height="50" alt="">
    FoodForCatering 
    </a>
    <?php } ?>

  <div class="header-right">
    

  <?php if ((!strcmp($a,$b))) { ?>
    <a href="<?php echo site_url('Admin/showcustomer_admin'); ?>"><i class="fa fa-fw fa-home"></i>Home</a> 
  <?php } else if ((!strcmp($a,$c))) {?>
    <a href="<?php echo site_url('Customer/index'); ?>"><i class="fa fa-fw fa-home"></i>Home</a>
    <a href="<?php echo site_url('Order/check_status'); ?>"><i class="bi bi-inbox-fill"></i>MyOrder</a>
    <a href="<?php echo site_url('Customer/view_basketsimple'); ?>"><i class="bi bi-basket"></i>Basket</a>  
  <?php } else if ((!strcmp($a,$d))) {?>
    <a href="<?php echo site_url('Product/page_shop'); ?>"><i class="fa fa-fw fa-home"></i>Home</a> 
  <?php } else { ?>
    <a href="<?php echo site_url('Customer/index'); ?>"><i class="fa fa-fw fa-home"></i>Home</a> 
    <?php } ?>

<!-- Button trigger modal -->





    <?php 
    if (isset($this->session->userdata['firstname'])) { ?>
    <a class="active" href="<?php echo site_url('Customer/page_edit'); ?>"><i class="fa fa-fw fa-user"></i> <?php echo $this->session->userdata['firstname'];?></a>
    <a href="<?php echo site_url('User/logout'); ?>"><i class="fa fa-sign-in"></i> Logout</a>
    <?php } else{ ?>
        <a href="<?php echo site_url('User/page_login'); ?>"><i class="fa fa-fw fa-user"></i> Login</a>
    <?php } ?>

    
  </div>
</div>


</body>
</html>
