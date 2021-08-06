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
<div class="row">
    <div class="col">
    <div class="card bg-light">
    <div class="card-body">
    <h4>ชุดอาหาร</h4>
  <div class="row">
  <?php foreach ($viewProid as $x){ ?>
    <div class="col-4">
    <div class="card" style="width: 18rem;">
    <img  src="<?php echo base_url('img'); ?>/<?php echo $x->img_pro;?>"  alt="..." style="width: 287px; height: 200px;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $x->nameProduct; ?></h5>
    <p class="card-text">
    ประเภทอาหาร : <?php echo $x->type; ?><br>
    <?php echo $x->info; ?>
    </p>
    <form action="<?= site_url('Product/delete_set');?>" method="post">
      <input type="text" name="Pro_id" value="<?php echo $x->Pro_id; ?>" hidden>
      <input type="text" name="id_set" value="<?php echo $x->id_set; ?>" hidden>
      <?php foreach ($viewShop as $x){ ?>
    <input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
    <?php } ?>
        <button type="submit" class="btn btn-danger" >ลบ</button>
    </form>
  </div>
</div>
    </div>
    <?php } ?>
    </div>
</div>

<form action="<?= site_url('Product/pege_deletefoodset');?>" method="post" >
    <?php foreach ($viewShop as $x){ ?>
    <input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
    <?php } ?>
    <button type="submit" class="btn btn-secondary" >ย้อนกลับ</button>
    </form>

    </div>
    </div>
</div>
</div>
<br>
</body>
<?php $this->load->view('footer');  ?>
</html>