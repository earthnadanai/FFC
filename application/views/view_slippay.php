
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


<div class="container" align="center">
  <div class="row">
    <div class="col">
    <br>
    <div class="row">
    <?php foreach ($slippay as $x){ ?>
<div class="col-sm-2 " >
<form action="<?= site_url('Order/order_shop');?>" method="post">
<input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
<button type="submit" class="btn btn-primary">ดูอาหารที่ลูกค้าสั่ง</button>
</form>
</div>
<?php } ?>
<?php foreach ($slippay as $x){ ?>
<div class="col-sm-2 "align="left">
<form action="<?= site_url('Order/view_slippay');?>" method="post">
<input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
<button type="submit" class="btn btn-info">ดูสลิปเงินที่ลูกค้าชำระ</button>
</form>
</div>
<?php } ?>
</div>
    <div class="card border-danger">
  <div class="card-body">
    <h1>สลิปเงิน</h1>

    <div class="row">
    <?php foreach ($slippay as $x){ ?> 
    <div class="col-4">
    <div class="card border-danger" style="width: 20rem;">
    <h6>วันเวลาที่ชำระ : <?php echo $x->date_shop;?> </h6>
    <img src="<?php echo base_url('img_bank'); ?>/<?php echo $x->P_img_shop;?>" alt="..."style="width: 318px; max-hight: 150px">
  <div class="card-body">
    <p class="card-text">คุณ : <?php echo $x->firstname;?>  นามสกุล : <?php echo $x->lastname;?>
        <br>จำนวน : <?php echo $x->total;?> บาท 
        <br>ชุดอาหารที่ซื้อ : <?php echo $x->name_set;?>
        <br>ขนาด : <?php echo $x->size;?>  ราคา : <?php echo $x->price;?></p>
  </div>
</div>

    </div>
    <?php } ?>
    </div>
  </div>
  <form action="<?= site_url('Product/pege_status');?>" method="post" >
    <?php foreach ($shop as $x){ ?>
    <input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
    <?php } ?>
    <button type="submit" class="btn btn-secondary" >ย้อนกลับ</button>
  </form>
</div>
<br>

    </div>
  </div>
</div>  
</body>
<?php $this->load->view('footer');  ?>
</html>