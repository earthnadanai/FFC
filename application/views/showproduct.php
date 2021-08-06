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
    </p>
  </div>
</div>
    </div>
    <?php } ?>
    </div>
</div>

<form action="<?= site_url('Customer/showproduct_customer');?>" method="POST">
<?php foreach ($viewShop as $x){ ?> <input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden><?php echo $x->id_shops; ?>
    <?php };?>
      <input type="submit" class="btn btn-secondary" name="secondary" value="ย้อนกลับ"></form>

    </div>
    </div>
</div>
</div>
<br>
</body>
<?php $this->load->view('footer');  ?>
</html>