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
    <title>อนุมัติการซื้อขาย</title>
</head>
<body>
<br>
    <div class="container">
    <div class="row">
    <div class="col-sm-3">
    <div class="card text-white bg-danger">
  <div class="card-body">
    
  <div class="d-grid gap-2">
    
  <a href="<?php echo site_url('Admin/showcustomer_admin'); ?>" class="btn btn-light">ข้อมูลลูกค้า</a>
  <a href="<?php echo site_url('Admin/showshop_admin'); ?>" class="btn btn-light">ข้อมูลร้านค้า</a>
  <a href="<?php echo site_url('Admin/showapproval_shop'); ?>" class="btn btn-light">รอการอนุมัติเปิดร้านค้า</a>
  <a href="<?php echo site_url('Admin/trading_admin'); ?>" class="btn btn-light">อนุมัติการซื้อขาย</a>
  </div>
  </div>
</div>
    </div>
    <div class="col-sm-9">
    <div class="card text-white bg-danger mb-3">
  <div class="card-body" align="center">
    <h1>อนุมัติการซื้อขาย</h1>
    <br>
    
  
    <table class="table table-hover table-light" >
    <thead>
    <tr>
      <th scope="col"><div align="center">ชื่อร้าน</div> </th>
      <th scope="col"><div align="center">สถานะ</div> </th>
      <th scope="col"><div align="center">ดูรายละเอียดการชำระเงิน</div> </th>
      <th scope="col"><div align="center">ดูรายละเอียดอาหาร</div> </th>
      <th scope="col"><div align="center">โอนเงินให้ทางร้าน</div> </th>
    </tr>
  </thead>
 
    
  <tbody>
  <?php foreach ($query as $x){ ?>
    <tr>

      <td align="center"><?php echo $x->nameShop; ?></td>
      <?php foreach ($conn as $x){ ?>
      <td align="center"><?php echo $x->status_pay; ?></td>
      <?php } ?>
      <td align="center">
                <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
ดูรายละเอียดการชำระเงิน
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ดูรายละเอียดการชำระเงิน</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p class="card-text"><h4>  
      <?php foreach ($query as $x){ ?>
      <img src="<?php echo base_url('img_bank'); ?>/<?php echo $x->P_img_cus;?>" style="width: 200px; height: 300;" alt="..." > <br>
       <br> วันที่ชำระเงิน  : <?php echo $x->date_cus;?> 
      <br> ราคา  : <?php echo $x->total;?> , ชื่อธนาคาร : <?php echo $x->nameBang;?>
      <br> ชื่อผู้ชำระเงิน : <?php echo $x->firstname;?> <?php echo $x->lastname;?>
      <?php } ?>
    </h4></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
      </td>
      <td align="center">
      <form action="<?php echo site_url('Admin/tradingfood_admin'); ?>" method="POST">
      <?php foreach ($conn as $x){ ?>
    <input type="text" name="id_conn" value="<?php echo $x->id_conn; ?>" hidden>
    <?php } ?>
    <?php foreach ($query as $x){ ?>
    <input type="text" name="id_p" value="<?php echo $x->id_p; ?>" hidden>
    <?php } ?>
    <?php foreach ($conn as $x){ ?>
    <input type="text" name="id_shop" value="<?php echo $x->id_shop; ?>" hidden>
    <?php } ?>
    <?php foreach ($query as $x){ ?>
    <input type="text" name="id" value="<?php echo $x->id; ?>" hidden>
    <?php } ?>
    <input type="submit" class="btn btn-primary" name="primary" value="ดูรายละเอียดอาหาร"></form>
      </td>

      <td align="center">
    <!-- Button trigger modal -->
<button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#exampleModal1">
โอนเงินให้ทางร้าน
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ภาพสลิปโอนเงิน</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form action="<?= site_url('Payment/adding');?>" method="post" class="form-horizontal" enctype="multipart/form-data">
        <div class="form-group col  col-md-5">
          <label>ภาพสลิปโอนเงิน</label><br>
          <h5>เลขบัญชีทางร้าน : <?php echo $x->number_bank; ?><h5>
          <h5 class="text-dark">ธนาคาร : <?php echo $x->nameBank; ?><h5>
          <input type="text" name="id_shop" value=" <?php echo $x->id_shops?>" hidden>
          <input type="text" name="id_customer" value=" <?php echo $x->id?>" hidden>
          <input type="text" name="id_Set" value=" <?php echo $x->id_set?>" hidden>
          <input type="text" name="id_payment" value=" <?php echo $x->id_p?>" hidden>
          <?php foreach ($conn as $x){?>
          <input type="text" name="id_conn" value=" <?php echo $x->id_conn?>" hidden>
          <?php } ?>
          <input type="datetime-local" name="date_shop" class="form-control" required>
          <br>
          <input type="file" name="P_img_shop" class="form-control"  accept="image/*" required>
        </div>
        <div class="form-group col col-md-5">
        <?php foreach ($query as $x){ ?>
        <input type="int" name="id" value="<?php echo $x->id_p; ?>" hidden>
        <button type="submit" class="btn btn-success" >โอนเงินให้ทางร้าน</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
        <?php } ?>
        </div>
      </form>

      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
      </td>

    </tr>
    <?php } ?>
  </tbody>
  </table>


 
  </div>
</div>
    </div>
  </div>
    </div>
    <br> <br> 
</body>
<br> <br> <br> <br> 
<?php $this->load->view('footer'); ?>
</html>



