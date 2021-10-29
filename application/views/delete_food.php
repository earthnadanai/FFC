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
<div class="container">
<div class="row">
    <?php foreach ($viewShop as $x){ ?>
    <div class="col-sm ">
    <form action="<?= site_url('Product/pege_foodset');?>" method="post">
    <input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
    <button type="submit" class="btn btn-primary" style="width: 230px; height: 70px;">ดูอาหารทั้งหมด<br>ดูชุดอาหารทั้งหมด</button>
    </form>
    </div>
    <?php } ?>
    <?php foreach ($viewShop as $x){ ?>
    <div class="col-sm"> 
    <form action="<?= site_url('Product/pege_addfood');?>" method="post">
    <input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
    <button type="submit" class="btn btn-success " style="width: 230px; height: 70px;">เพิ่มอาหาร</button>
    </form>
    </div>
    <?php } ?>
    <?php foreach ($viewShop as $x){ ?>
    <div class="col-sm ">
    <form action="<?= site_url('Product/pege_setfood');?>" method="post">
    <input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
    <button type="submit" class="btn btn-success" style="width: 230px; height: 70px;">เพิ่มชุดของอาหาร</button>
    </form>
    </div>
    <?php } ?>
    <?php foreach ($viewShop as $x){ ?>
    <div class="col-sm ">
    <form action="<?= site_url('Product/pege_setmeal');?>" method="post">
    <input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
    <button type="submit" class="btn btn-warning" style="width: 230px; height: 70px;">จัดอาหารใส่ชุดอาหาร</button>
    </form>
    </div>
    <?php } ?>
    <?php foreach ($viewShop as $x){ ?>
    <div class="col-sm ">
    <form action="<?= site_url('Product/pege_deletefoodset');?>" method="post">
    <input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
    <button type="submit" class="btn btn-danger" style="width: 230px; height: 70px;">ลบอาหาร/ลบชุดอาหาร</button>
    </form>
    </div>
    <?php } ?>
  </div>
</div>
</div>
</div>
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
    สถานะ : <?php echo $x->status_set; ?> <br>
    ขนาด : <?php echo $x->size; ?> <br>
    ราคา : <?php echo $x->price; ?>
    </p>

    <form action="<?= site_url('Product/pege_deletefood');?>" method="post">
    <input type="text" name="id_set" value="<?php echo $x->id_set; ?>" hidden>
    <input type="text" name="id" value="<?php echo $x->id_set_shop; ?>" hidden>
    <button type="submit" class="btn btn-info" >ดูอาหาร</button>
    </form>

    <?php 
    $a = $x->status_set;
    $b = "ปิดใช้งาน";
    if((!strcmp($a,$b)))  { ?>

    <form action="<?= site_url('Product/open');?>" method="post">
    <input type="text" name="id_set" value="<?php echo $x->id_set; ?>" hidden>
    <input type="text" name="id" value="<?php echo $x->id_set_shop; ?>" hidden>
    <button type="submit" class="btn btn-success" onclick="myFunction()">เปิดใช้งานชุดอาหาร</button>
    </form>

    <?php }else{ ?>
      
    <form action="<?= site_url('Product/close');?>" method="post">
    <input type="text" name="id_set" value="<?php echo $x->id_set; ?>" hidden>
    <input type="text" name="id" value="<?php echo $x->id_set_shop; ?>" hidden>
    <button type="submit" class="btn btn-secondary" onclick="myFunction()">ปิดใช้งานชุดอาหาร</button>
    </form>

    <?php } ?>
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
    ประเภทอาหาร : <?php echo $x->type; ?> <br>
    <?php echo $x->info; ?>
    </p>
  
    <form action="<?= site_url('Product/delete_menu');?>" method="post">
    <input type="text" name="id_pro" value="<?php echo $x->id_pro; ?>" hidden> 
    <?php foreach ($viewShop as $x){ ?>
    <input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
    <?php } ?>
    
<button type="submit"  id="" name="delete"class="btn btn-danger" onclick="myFunction()">ลบอาหาร</button>
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



