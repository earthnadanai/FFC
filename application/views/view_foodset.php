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
<center>
<img  src="../../img/original.gif"  alt="..." style="width: 238px; height: 150px;">
</center>
<div class="container" align="center">
  <div class="row">
    <div class="col-4">
    <div class="card bg-light">
  <div class="card-body">
    <h4>ชุดอาหาร</h4>
    <div class="row">
    <?php foreach ($viewProset as $x){ ?>
    <div class="col-6">
    <div class="card" style="width: 11rem;">
    <img  src="<?php echo base_url('img'); ?>/<?php echo $x->img_set;?>"  alt="..." style="width: 174px; height: 100px;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $x->name_set; ?></h5>
    <p class="card-text">
    ขนาด : <?php echo $x->size; ?> <br>
    ราคา : <?php echo $x->price; ?>
    </p>
    <form action="<?= site_url('Product/pege_editfoodset');?>" method="post">
      <input type="text" name="id_set" value="<?php echo $x->id_set; ?>" hidden>
      <?php foreach ($viewShop as $x){ ?>
    <input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
    <?php } ?>
        <button type="submit" class="btn btn-success" >ดูอาหารข้างใน</button>
    </form>
    <form action="<?= site_url('Product/pege_editsetfood');?>" method="post">
    <?php foreach ($viewShop as $x){ ?>
    <input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
    <?php } ?>
    <?php foreach ($viewProset as $x){ ?>
    <input type="text" name="id_set" value="<?php echo $x->id_set; ?>" hidden>
    <?php } ?>
        <button type="submit" class="btn btn-warning" >แก้ไขข้อมูล</button>
    </form>
  </div>
</div>
<br>
    </div>    
    <?php } ?>
    </div>
  </div>
</div>
    </div>
    <div class="col-8">
    <div class="card bg-light">
  <div class="card-body">
  <h4>อาหาร</h4>
  <div class="row">
  <?php foreach ($viewPro as $x){ ?>
    <div class="col-4">
    <div class="card" style="width: 15rem;">
    <img  src="<?php echo base_url('img'); ?>/<?php echo $x->img_pro;?>"  alt="..." style="width: 238px; height: 150px;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $x->nameProduct; ?></h5>
    <p class="card-text">
    ขนาดอาหาร : <?php echo $x->sizefood; ?> <br>
    ประเภทอาหาร : <?php echo $x->type; ?> <br>
    <?php echo $x->info; ?>
    </p>
    <form action="<?= site_url('Product/pege_editfood');?>" method="post">
      <input type="text" name="id_pro" value="<?php echo $x->id_pro; ?>" hidden>
      <?php foreach ($viewShop as $x){ ?>
    <input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
    <?php } ?>
        <button type="submit" class="btn btn-warning" >แก้ไขข้อมูลอาหาร</button>
    </form>
  </div>
</div>
<br>
    </div>
  <?php } ?>
  </div>
 </div>
</div>
    </div>
  </div>
  <br>
  <form action="<?= site_url('Product/pege_status');?>" method="post" >
    <?php foreach ($viewShop as $x){ ?>
    <input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
    <?php } ?>
    <button type="submit" class="btn btn-secondary" >ย้อนกลับ</button>
    </form>
</div>

<br>
</body>
<?php $this->load->view('footer');  ?>
</html>