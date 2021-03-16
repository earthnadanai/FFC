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
    <a href="<?php echo site_url('Welcome/showcustomer_admin'); ?>" class="logo">
    <img src="<?php echo base_url('img'); ?>/LOGOFFS.png" width="70" height="50" alt="">
    FootForCatering
    </a>
    <?php } 
    elseif ((!strcmp($a,$c))) {?>
      <a href="<?php echo site_url('Welcome/index'); ?>" class="logo">
    <img src="<?php echo base_url('img'); ?>/LOGOFFS.png" width="70" height="50" alt="">
    FootForCatering 
    </a>
    <?php } elseif ((!strcmp($a,$d))) {?>
      <a href="<?php echo site_url('Welcome/show_customer'); ?>" class="logo">
    <img src="<?php echo base_url('img'); ?>/LOGOFFS.png" width="70" height="50" alt="">
    FootForCatering 
    </a>
    <?php } else { ?>
      <a href="<?php echo site_url('Welcome/index'); ?>" class="logo">
    <img src="<?php echo base_url('img'); ?>/LOGOFFS.png" width="70" height="50" alt="">
    FootForCatering 
    </a>
    <?php } ?>

  <div class="header-right">
    

  <?php if ((!strcmp($a,$b))) { ?>
    <a href="<?php echo site_url('Welcome/showcustomer_admin'); ?>"><i class="fa fa-fw fa-home"></i>Home</a> 
  <?php } else if ((!strcmp($a,$c))) {?>
    <a href="<?php echo site_url('Welcome/index'); ?>"><i class="fa fa-fw fa-home"></i>Home</a> 
  <?php } else if ((!strcmp($a,$d))) {?>
    <a href="<?php echo site_url('Welcome/index'); ?>"><i class="fa fa-fw fa-home"></i>Home</a> 
  <?php } else { ?>
    <a href="<?php echo site_url('Welcome/index'); ?>"><i class="fa fa-fw fa-home"></i>Home</a> 
    <?php } ?>

<!-- Button trigger modal -->


<?php if ((!strcmp($a,$c))) { ?>
  <a href="#" type="button"  data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa fa-fw fa-search"></i>Search</a>
<?php } else if ((!strcmp($a,$d))) {?>
  <a href="#" type="button"  data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa fa-fw fa-search"></i>Search</a>
<?php }  else { }?> 

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>


    <?php 
    if (isset($this->session->userdata['firstname'])) { ?>
    <a class="active" href="#"><i class="fa fa-fw fa-user"></i> <?php echo $this->session->userdata['firstname'];?></a>
    <a href="<?php echo site_url('Welcome/logout'); ?>"><i class="fa fa-sign-in"></i> Logout</a>
    <?php } else{ ?>
        <a href="<?php echo site_url('Welcome/page_login'); ?>"><i class="fa fa-fw fa-user"></i> Login</a>
    <?php } ?>

    
  </div>
</div>


</body>
</html>
