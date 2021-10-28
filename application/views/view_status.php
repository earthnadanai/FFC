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
<?php 
    $a = $this->session->userdata('Waiting_status');
    $b = "อนุมัติ";
    if((!strcmp($a,$b)))  { ?>
<div class="container" align="center">
<div class="card text-dark bg-light mb-3" style="max-width: 80rem;">
<div class="card-body">

<div class="row">
<?php foreach ($viewS as $x){ ?>
<div class="col-sm-2 " align="right">
<form action="<?= site_url('Order/order_shop');?>" method="post">
<input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
<button type="submit" class="btn btn-primary">ดูอาหารที่ลูกค้าสั่ง</button>
</form>
</div>
<?php } ?>
<?php foreach ($viewS as $x){ ?>
<div class="col-sm-2 "align="left">
<form action="<?= site_url('Order/view_slippay');?>" method="post">
<input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
<button type="submit" class="btn btn-info">ดูสลิปเงินที่ลูกค้าชำระ</button>
</form>
</div>
<?php } ?>
<div class="col-sm-4" align="">
<h4>จัดการอาหารภายในร้าน</h4>
</div>
<div class="col-sm-2" align="right">
<form action="<?= site_url('Shop/open');?>" method="post">
<input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
<button type="submit" class="btn btn-success">กดปุ่มเพื่อเปิดร้าน</button>
</form>
</div>
<div class="col-sm-2" align="left">
<form action="<?= site_url('Shop/close');?>" method="post">
<input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
<button type="submit" class="btn btn-danger">กดปุ่มเพื่อปิดร้าน</button>
</form>
</div>
</div>

<div class="row">
    <?php foreach ($viewS as $x){ ?>
    <div class="col-sm ">
    <form action="<?= site_url('Product/pege_foodset');?>" method="post">
    <input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
    <button type="submit" class="btn btn-outline-primary" style="width: 230px; height: 150px;">ดูอาหารทั้งหมด<br>ดูชุดอาหารทั้งหมด</button>
    </form>
    </div>
    <?php } ?>
    <?php foreach ($viewS as $x){ ?>
    <div class="col-sm"> 
    <form action="<?= site_url('Product/pege_addfood');?>" method="post">
    <input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
    <button name="insertfood"type="submit" class="btn btn-outline-success " style="width: 230px; height: 150px;">เพิ่มอาหาร</button>
    </form>
    </div>
    <?php } ?>
    <?php foreach ($viewS as $x){ ?>
    <div class="col-sm ">
    <form action="<?= site_url('Product/pege_setfood');?>" method="post">
    <input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
    <button type="submit" class="btn btn-outline-success" style="width: 230px; height: 150px;">เพิ่มชุดของอาหาร</button>
    </form>
    </div>
    <?php } ?>
    <?php foreach ($viewS as $x){ ?>
    <div class="col-sm ">
    <form action="<?= site_url('Product/pege_setmeal');?>" method="post">
    <input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
    <button type="submit" class="btn btn-outline-warning" style="width: 230px; height: 150px;">จัดอาหารใส่ชุดอาหาร</button>
    </form>
    </div>
    <?php } ?>
    <?php foreach ($viewS as $x){ ?>
    <div class="col-sm ">
    <form action="<?= site_url('Product/pege_deletefoodset');?>" method="post">
    <input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
    <button type="submit" class="btn btn-outline-danger" style="width: 230px; height: 150px;">ลบอาหาร/ลบชุดอาหาร</button>
    </form>
    </div>
    <?php } ?>
  </div>
</div>
<?php foreach ($viewS as $x){ ?>
<h5 align="end">สถานะร้าน : <?php echo $x->status_work; ?>
 <img src="<?php echo base_url('img'); ?>/<?php echo $x->img_status;?>" alt="..."style="width: 15px; max-hight: 15px"> .
</h5>
<?php } ?>
</div>
<img  src="../../img/unnamed.gif"  style="width: 170px; height: 250px;" alt="..." >
</div>
<?php } else {?>

<div class="container" align="center">
<div class="card text-dark bg-light mb-3" style="max-width: 40rem;">
  
  <div class="card-body">
    
 <h4>เช็คสถานะการเปิดร้านอาหาร</h4>
<table class="table">
  <thead>
    <tr class="table table-dark">
      <th scope="col"><div align="center">#</th>
      <th scope="col"><div align="center">อัปโหลดรูป</th>
      <th scope="col"><div align="center">สถานะ</th>
    </tr>
  </thead>
  <?php foreach ($viewST as $x){ ?>
  <tbody>
    <tr>
      <th scope="row"><div align="center"><?php echo $x->id; ?></th>
      <td align="center">
      
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
อัปโหลดรูป
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">ยืนยันการเปิดร้าน</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form action="<?= site_url('Product/add_status');?>" method="post" class="form-horizontal" enctype="multipart/form-data">
    <img  src="<?php echo base_url('img'); ?>/<?php echo $x->img_id_card_number;?>"  style="width: 170px; height: 250px;" alt="..." >
    <h6 align="left">เพิ่มรูปบัตรประชาชนเพื่อยืนยันตัว<h6>
    <div class="col">
    <div class="col-sm-12">
    <input type="file" name="img_id_card_number" class="form-control"  accept="image/*" required>
    </div>
    </div>
    <br>
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิดหน้าต่างนี้</button>
    <button type="submit" class="btn btn-success" >ยืนยัน</button>
      </form>
      
      </div>
    </div>
  </div>
</div>

      </td>
      <td align="center"><?php echo $x->Waiting_status; ?></td>
    </tr>
   </tbody>
   <?php } ?>
</table>
</div>
</div>
<br>
<img  src="../../img/unnamed.gif"  style="width: 170px; height: 250px;" alt="..." >
</div>
<?php } ?>
<br>
</body>
<?php $this->load->view('footer');  ?>
</html>



