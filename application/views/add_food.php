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
<div class="container" align="center">
<div class="card text-dark bg-light mb-3" style="max-width: 40rem;">
<div class="card-body">
<h4>เพิ่มอาหาร</h4>
<form action="<?= site_url('Product/add_food');?>" method="post" class="form-horizontal" enctype="multipart/form-data">
<?php foreach ($viewShop as $x){ ?>
    <input type="text" name="id_pro_shop" value="<?php echo $x->id_shops; ?>" hidden>
    <?php } ?>
    <h6 align="left">เพิ่มรูปอาหาร<h6>
    <div class="col">
    <div class="col-sm-12">
    <input type="file" name="img_pro" class="form-control"  accept="image/*" required>
    </div>
    </div>
    <br>
    <h6 align="left">กรอกชื่ออาหาร<h6>
    <div class="col">
    <div class="col-sm-12">
      <input type="text" name="nameProduct"  class="form-control" placeholder="กรอกชื่ออาหาร" required>
    </div>
    </div>
    <br>
    <div class="col">
    <div class="col-sm-12">
    <div class="form-floating">
  <select class="form-select" id="floatingSelect" name="type" aria-label="Floating label select example">
    <option selected>เลือกประเภทอาหาร</option>
    <option value="ต้ม">ต้ม</option>
    <option value="ผัด">ผัด</option>
    <option value="แกง">แกง</option>
    <option value="ทอด">ทอด</option>
    <option value="ทอด">ยำ</option>
    <option value="ของคาว">ของคาว</option>
    <option value="ของหวาน">ของหวาน</option>
    <option value="เครื่องดื่ม">เครื่องดื่ม</option>
  </select>
  <label for="floatingSelect">ประเภทอาหาร</label>
</div>
    </div>
    </div>
    <br>
    <div class="col">
    <div class="col-sm-12">
    <div class="form-floating">
  <select class="form-select" id="floatingSelect" name="sizefood" aria-label="Floating label select example" required>
    <option selected>เลือกขนาดของอาหาร</option>
    <option value="เล็ก">เล็ก</option>
    <option value="กลาง">กลาง</option>
    <option value="ใหญ่">ใหญ่</option>
  </select>
  <label for="floatingSelect">ขนาดของอาหาร</label>
</div>
    </div>
    </div>
    <br>
    <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="info" style="height: 100px"></textarea>
  <label for="floatingTextarea2">ข้อมูลแนะนำอาหาร</label>
</div>
<br>
<div class="row">
    <div class="col-sm"> 
    <button type="submit" class="btn btn-success" >ยืนยัน</button>
    </form>
    </div>
    <div class="col-sm"> 
    <form action="<?= site_url('Product/pege_status');?>" method="post" >
    <?php foreach ($viewShop as $x){ ?>
    <input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
    <?php } ?>
    <button type="submit" class="btn btn-secondary" >ย้อนกลับ</button>
    </form>
    </div>
    </div>
    </div>
</div>
</div>
</body>
<?php $this->load->view('footer');  ?>
</html>
