<?php defined('BASEPATH') or exit('No direct script access allowed');
      $this->load->view('bootstap');   
      $this->load->view('navbar.php');   
?>
<html>
<head>
<title>view shop</title>
</head>
<center>
<img  src="../../img/b97dc288d71e7938c1ce8b7faacdc9ac.gif"  alt="..." style="width: 600px; height: 350px;">
</center>
<?php 
$a = $this->session->userdata('have_shop');
$b = "มี"; 
if ((!strcmp($a,$b))) { ?>

<body>
    <br>
    <?php foreach ($pe as $x){ ?>
    <div class="container" align="center">
    <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
    <img  src="<?php echo base_url('img'); ?>/<?php echo $x->img_shop;?>"  alt="..." style="width: 160px; height: 170px;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $x->nameShop; ?></h5>
        <p class="card-text"></p>
        <form action="<?= site_url('Product/pege_status');?>" method="post">
        <input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
        <input type="submit" class="btn btn-primary" name="primary" value="จัดการรายการอาหาร">
        </form>

      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>
<?php  } else { ?>
  <br>
<div class="container" align="center">

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
  เพิ่มร้าน 
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">กรอกข้อมูลเพื่อเป็นร้าน</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form action="<?= site_url('Product/add_shop');?>" method="post" class="form-horizontal" enctype="multipart/form-data">
    
    <input type="text" name="id_cus" value="<?php echo $this->session->userdata('id'); ?>" hidden>
    <div class="row">
    <h6 align="left">เพิ่มรูปหน้าร้านค้า<h6>
    <div class="col">
    <div class="col-sm-12">
    <input type="file" name="img_shop" class="form-control"  accept="image/*" required>
    </div>
    </div>
    <h6 align="left">กรอกชื่อร้าน<h6>
    <div class="col">
    <div class="col-sm-12">
      <input type="text" name="nameShop"  class="form-control" placeholder="กรอกชื่อร้าน" required>
    </div>
    </div>
    <h6 align="left">เลขบัญชี<h6>
    <div class="col">
    <div class="col-sm-12">
      <input type="text" name="number_bank"  class="form-control" placeholder="เลขบัญชี" required>
    </div>
    </div>
    </div>
    <button type="submit" class="btn btn-success" >ยืนยันการเปิดร้าน</button>
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </form>


      </div>
    </div>
  </div>
</div>
</div>
<?php } ?> 
<br>
</body>
<?php $this->load->view('footer'); ?>
</html>


