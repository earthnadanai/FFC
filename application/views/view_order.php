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
  
    <table class="table">
  <thead>
    <tr>
      <th scope="col"><div align="center">ชื่อลูกค้า</div></th>
      <th scope="col"><div align="center">ชื่อชุดอาหาร</div></th>
      <th scope="col"><div align="center">ขนาด</div></th>
      <th scope="col"><div align="center">ราคา</div></th>
      <th scope="col"><div align="center">วันที่ต้องส่งอาหาร</div></th>
      <th scope="col"><div align="center">เวลาที่กดยอมรับ</div></th>
      <th scope="col">ยอมรับ/ไม่ยอมรับ</th>
    </tr>
  </thead>
  <?php foreach ($orderMakes as $x){ ?>
  <tbody>
    <tr>
      <td align="center"><?php echo $x->firstname; ?></td>
      <td align="center"><?php echo $x->name_set; ?></td>
      <td align="center"><?php echo $x->size; ?></td>
      <td align="center"><?php echo $x->price; ?></td>
      <td align="center" class="text-danger"><?php echo $x->date_customer; ?></td> 
      <td align="center">
      <form action="<?= site_url('Order/ok_confirmation');?>" method="POST">
      <input type="datetime-local" id="date_shop"name="date_shop" min="T00:00" max="T00:00" align="canter" required>
    </td>
      <td align="center">
      
      <div class="row">
    <div class="col-2">
    <input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
    <input type="text" name="id_conn" value="<?php echo $x->id_conn; ?>" hidden>

    <div class="row">
    <div class="col-6"><input type="submit" class="btn btn-success" name="status_shop" value="ยอมรับ"> </div>
    </div>
  </div>
    <div class="col-7"><input type="submit" class="btn btn-danger" name="status_shop" value="ไม่ยอมรับ"></div>
  </div>
  </form>
      </td>
    </tr>
  </tbody>
  <?php } ?>
</table>

  </div>

  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  
  <table class="table">
  <thead>
    <tr>
      <th scope="col"><div align="center">ชื่อลูกค้า</div></th>
      <th scope="col"><div align="center">ชื่อชุดอาหาร<br>อาหารที่ต้องทำ</div></th>
      <th scope="col"><div align="center">วันที่ต้องส่งอาหาร</div></th>
      <th scope="col"><div align="center">เวลาที่กดยอมรับ</div></th>
      <th scope="col"><div align="center">ขนาด</div></th>
      <th scope="col"><div align="center">ราคา</div></th>
      <th scope="col"><div align="center">ข้อความจากลูกค้า</div></th>
      <th scope="col">ส่ง/ยกเลิก</th>
    </tr>
  </thead>
  <?php foreach ($orderCus as $x){ ?>
  <tbody>
    <tr>
    <td align="center">
    <form action="<?= site_url('Order/infocus_shop');?>" method="post">
    <input type="text" name="id" value="<?php echo $x->id; ?>" hidden>
    <input type="text" name="id_shops" value="<?php echo $x->id_shops; ?>" hidden>
    <button type="submit" class="btn btn-info" ><?php echo $x->firstname; ?></button>
    
    </form>
    </td>
    <td align="center">
    <form action="<?= site_url('Order/pege_foodset');?>" method="post">
    <input type="text" name="id_set" value="<?php echo $x->id_set; ?>" hidden>
    <input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
    <button type="submit" class="btn btn-info" ><?php echo $x->name_set; ?></button>
    </form>
    </td>

      <td align="center" class="text-danger"><?php echo $x->date_customer; ?></td> 
      <td align="center"><?php echo $x->date_shop; ?></td> 
      <td align="center"><?php echo $x->size; ?></td>
      <td align="center"><?php echo $x->price; ?></td>
      <td><div class="card">
      <div class="card-body">
      <?php echo $x->comment; ?>
      </div>
      </div></td>

<form action="<?= site_url('Order/cancel_shop');?>" method="post">
<input type="text" name="id_conn" value="<?php echo $x->id_conn; ?>" hidden>
<input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
  <td align="center">
  <div class="row">
  <div class="col-3">
  <input type="submit" class="btn btn-success" name="status_shop" value="ส่ง"> 
  </div>
  <div class="col-3">
    <input type="submit" class="btn btn-danger" name="status_shop" value="ยกเลิก">
  </div>
  </div>
  </form>
  </td>

    </tr>
  </tbody>
  <?php } ?>
</table>
  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
  
  <table class="table">
  <thead>
    <tr>
      <th scope="col"><div align="center">ชื่อลูกค้า</div></th>
      <th scope="col"><div align="center">ชื่อชุดอาหาร</div></th>
      <th scope="col"><div align="center">วันที่ต้องส่งอาหาร</div></th>
      <th scope="col"><div align="center">เวลาที่กดยอมรับ</div></th>
      <th scope="col"><div align="center">ขนาด</div></th>
      <th scope="col"><div align="center">ราคา</div></th>
      <th scope="col"><div align="center">สถานะจากลูกค้า</div></th>
    </tr>
  </thead>
  <?php foreach ($orderfinished as $x){?>
  <tbody>
    <tr>
      <td align="center"><?php echo $x->firstname; ?></td>
      <td align="center"><?php echo $x->name_set; ?></td>
      <td align="center" class="text-danger"><?php echo $x->date_customer; ?></td> 
      <td align="center"><?php echo $x->date_shop; ?></td> 
      <td align="center"><?php echo $x->size; ?></td>
      <td align="center"><?php echo $x->price; ?></td>
      <td align="center"><?php echo $x->status_customer; ?></td>
    </tr>
  </tbody>
  <?php } ?>
</table>
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


