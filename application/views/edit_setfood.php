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
<div class="card text-dark bg-light mb-3" style="max-width: 40rem;">
<div class="card-body">

<?php if ($error = $this->session->flashdata('error_msg')): ?>
    <div class="alert alert-danger  alert-dismissible fade show" role="alert">
    <i class="bi bi-exclamation-circle-fill"> <strong>ข้อมูลผิดพลาด!</strong> <?php echo $this->session->flashdata('error_msg'); ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></i>
    </div>
  <?php endif ;?>

  <?php if ($success = $this->session->flashdata('success_msg')): ?>
    <div class="alert alert-success  alert-dismissible fade show" role="alert">
    <i class="bi bi-check-circle-fill"> <strong>ข้อมูลถูกต้อง!</strong> <?php echo $this->session->flashdata('success_msg'); ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></i>
    </div>
  <?php endif ;?>
  
<h4>เพิ่มอาหาร</h4>
<form action="<?= site_url('Product/edit_setfood');?>" method="post" class="form-horizontal" enctype="multipart/form-data">
<?php foreach ($viewShop as $x){ ?>
    <input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
    <?php } ?>
<?php foreach ($viewSet as $x){ ?>
    <input type="text" name="id_set" value="<?php echo $x->id_set; ?>" hidden>
    <h6 align="left">เพิ่มรูปอาหาร<h6>
    <div class="col">
    <div class="col-sm-12">
    <input type="file" name="img_set" class="form-control"  accept="image/*" required>
    </div>
    </div>
    <br>
    <h6 align="left">กรอกชื่อชุดอาหาร<h6>
    <div class="col">
    <div class="col-sm-12">
      <input type="text" name="name_set" value="<?php echo $x->name_set; ?>" class="form-control" placeholder="กรอกชื่อชุดอาหาร" required>
    </div>
    </div>
    <br>
    <div class="col">
    <div class="col-sm-12">
    <div class="form-floating">
  <select class="form-select" id="floatingSelect" name="size" aria-label="Floating label select example" required>
  <option value="<?php echo $x->size; ?>"><?php echo $x->size; ?></option>
    <option value="เล็ก">เล็ก</option>
    <option value="กลาง">กลาง</option>
    <option value="ใหญ่">ใหญ่</option>
  </select>
  <label for="floatingSelect">ขนาดของชุดอาหาร</label>
</div>
    </div>
    </div>
    <h6 align="left">จำนวนที่จะรองรับผู้รับประทาน<h6>
    <div class="col">
    <div class="col-sm-12">
      <input type="text" name="unit_eat"  value="<?php echo $x->unit_eat; ?>" class="form-control" placeholder="กรอกจำนวนที่จะรองรับได้ เช่น 1-5" required>
    </div>
    </div>
    <h6 align="left">ราคาของชุดอาหาร<h6>
    <div class="col">
    <div class="col-sm-12">
      <input type="int" name="price"  value="<?php echo $x->price; ?>" class="form-control" placeholder="ราคาของชุดอาหาร" required>
    </div>
    </div>
    <?php } ?>
<br>
<div class="row">
    <div class="col-sm"> 
    <button type="submit" class="btn btn-success" >ยืนยัน</button>
    </form>
    </div>
    <div class="col-sm"> 
    <form action="<?= site_url('Product/pege_foodset');?>" method="post" >
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