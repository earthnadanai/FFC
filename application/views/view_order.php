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
<div class="container" align="canter">
  <div class="row">
  <div class="card text-dark bg-light mb-3" style="max-width: 100rem;">
  <div class="card-body" >
  
  <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">คำสั่งซื้อจากลูกค้า</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">สิ่งที่ต้องทำ</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">สถานะ</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  <?php 
    foreach ($orderShop as $x){
    $a = $x->status_shop;;
    $b = "รอการนำเนิดการ	";
    if((!strcmp($a,$b)))  { 
   ?>
    <table class="table">
  <thead>
    <tr>
      <th scope="col"><div align="center">ชื่อลูกค้า</div></th>
      <th scope="col"><div align="center">ชื่อชุดอาหาร</div></th>
      <th scope="col"><div align="center">ขนาด</div></th>
      <th scope="col"><div align="center">ราคา</div></th>
      <th scope="col">ยอมรับ/ไม่ยอมรับ</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td align="center"><?php echo $x->firstname; ?></td>
      <td align="center"><?php echo $x->name_set; ?></td>
      <td align="center"><?php echo $x->size; ?></td>
      <td align="center"><?php echo $x->price; ?></td>
      <td align="center">
      
      <div class="row">
    <div class="col-2">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">ยอมรับ</button>
   
 
    <form action="./ok_confirmation" method="POST">
    <!-- Modal -->
<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

    <input type="date" name="date">
    <input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
    <input type="text" name="id_conn" value="<?php echo $x->id_conn; ?>" hidden>
    

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="button" class="btn btn-success" name="status_shop" value="ยอมรับ">
      </div>
    </div>
  </div>
</div>
</div>
<div class="col-2">
<input type="submit" class="btn btn-danger" name="status_shop" value="ไม่ยอมรับ"></form>
    </div>
  </div>
  
    
      </td>
    </tr>
  </tbody>
</table>
<?php } else { }?>
<?php } ?>
  </div>

  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  
  <?php 
    foreach ($orderShop as $x){
    $a = $x->status_shop;;
    $b = "ยอมรับ";
    $c = "รอการนำเนิดการ";
    $d = $x->status_customer;;
    if((!strcmp($a,$b) && !strcmp($c,$d)))  { 
   ?>
  <table class="table">
  <thead>
    <tr>
      <th scope="col"><div align="center">ชื่อลูกค้า</div></th>
      <th scope="col"><div align="center">ชื่อชุดอาหาร</div></th>
      <th scope="col"><div align="center">เวลาที่กดยอมรับ</div></th>
      <th scope="col"><div align="center">ขนาด</div></th>
      <th scope="col"><div align="center">ราคา</div></th>
      <th scope="col"><div align="center">อาหารที่ต้องทำ</div></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td align="center"><?php echo $x->firstname; ?></td>
      <td align="center"><?php echo $x->name_set; ?></td>
      <td align="center"><?php echo $x->date_shop; ?></td> 
      <td align="center"><?php echo $x->size; ?></td>
      <td align="center"><?php echo $x->price; ?></td>
      <td align="center">

      <form action="<?= site_url('Order/pege_foodset');?>" method="post">
      <input type="text" name="id_set" value="<?php echo $x->id_set; ?>" hidden>
    <input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
        <button type="submit" class="btn btn-success" >ดูอาหารที่ต้องทำ</button>
    </form>

      </td>
    </tr>
  </tbody>
</table>
<?php } else { }?>
<?php } ?>

  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
  
  <?php 
    foreach ($orderShop as $x){
    $a = $x->status_shop;;
    $b = "ยอมรับ";
    if((!strcmp($a,$b)))  { 
   ?>
  <table class="table">
  <thead>
    <tr>
      <th scope="col"><div align="center">ชื่อลูกค้า</div></th>
      <th scope="col"><div align="center">ชื่อชุดอาหาร</div></th>
      <th scope="col"><div align="center">เวลาที่กดยอมรับ</div></th>
      <th scope="col"><div align="center">ขนาด</div></th>
      <th scope="col"><div align="center">ราคา</div></th>
      <th scope="col"><div align="center">สถานะจากลูกค้า</div></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td align="center"><?php echo $x->firstname; ?></td>
      <td align="center"><?php echo $x->name_set; ?></td>
      <td align="center"><?php echo $x->date_shop; ?></td> 
      <td align="center"><?php echo $x->size; ?></td>
      <td align="center"><?php echo $x->price; ?></td>
      <td align="center"><?php echo $x->status_customer; ?></td>
    </tr>
  </tbody>
</table>
<?php } else { }?>
<?php } ?>

  </div>
</div>
<br>
<form action="<?= site_url('Product/pege_status');?>" method="post" >
    <?php foreach ($orderShop as $x){ ?>
    <input type="text" name="id" value="<?php echo $x->id_shop; ?>" hidden>
    <?php } ?>
    <button type="submit" class="btn btn-secondary" >ย้อนกลับ</button>
  </form>
  </div>
</div>
  </div>
  </div>
</body>
<?php $this->load->view('footer');  ?>
</html>


