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
<div class="container" align="center">
<div class="card text-dark bg-light mb-3" style="max-width: 80rem;">
<div class="card-body">

<h4>เพิ่มอาหาร</h4>
<?php foreach ($viewProSet as $x){ ?>
    <h5>ชื่อชุดอาหาร : <?php echo $x->name_set; ?></h5>
    <input type="text" name="Pro_id_set" value="<?php echo $x->id_set; ?>" hidden>
<?php } ?>
<br>

<div class="row">
  
<?php foreach ($viewPro as $x){ ?>
    <div class="col-3">
    <div class="card" style="width: 18rem;">
    <img  src="<?php echo base_url('img'); ?>/<?php echo $x->img_pro;?>"  alt="..." style="width: 287px; height: 200px;">
      <div class="card-body">
        <h5 class="card-title">ชื่อ : <?php echo $x->nameProduct; ?></h5>
        <form action="<?= site_url('Product/add_setfood');?>" method="post">
        <p class="card-text">
    <input type="text" name="Pro_id_pro" value="<?php echo $x->id_pro; ?>" hidden>
    ขนาดอาหาร : <?php echo $x->sizefood; ?><br>
    ประเภทอาหาร : <?php echo $x->type; ?><br>
    <?php echo $x->info; ?>
    <br>
<?php foreach ($viewProSet as $x){ ?>
    <input type="text" name="Pro_id_set" value="<?php echo $x->id_set; ?>" hidden>
    <input type="text" name="size" value="<?php echo $x->size; ?>" hidden>
<?php } ?>
<?php foreach ($viewSet as $x){ ?>
    <input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
<?php } ?>
<br>
<button type="submit" class="btn btn-success" >เพิ่มเข้าชุดอาหาร</button>

      </form>
      </div>
      </div>
      <br>
      </div>
      <?php } ?>

      </div>
      <form action="<?= site_url('Product/pege_setmeal');?>" method="post" >
    <?php foreach ($viewSet as $x){ ?>
    <input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
    <?php } ?>
    <button type="submit" class="btn btn-secondary" >ย้อนกลับ</button>
    </form>
</div>
</div>
</div>

</body>
<?php $this->load->view('footer');  ?>
</html>