<?php defined('BASEPATH') or exit('No direct script access allowed');
      $this->load->view('bootstap');
      $this->load->view('navbar');
     
        
?>
<html>
<head>
<title>ข้อมูลลูกค้า</title>
</head>
<body>
<br>
<div class="container"align="center">
<div class="row">
<div class="col-sm-3">
    <div class="card text-white bg-danger">
  <div class="card-body">
    
  <div class="d-grid gap-2">
    
  <a href="<?php echo site_url('Admin/showcustomer_admin'); ?>" class="btn btn-light">ข้อมูลลูกค้า</a>
  <a href="<?php echo site_url('Admin/showshop_admin'); ?>" class="btn btn-light">ข้อมูลร้านค้า</a>
  <a href="<?php echo site_url('Admin/showapproval_shop'); ?>" class="btn btn-light">รอการอนุมัติเปิดร้านค้า</a>
  <a href="<?php echo site_url('Admin/trading_admin'); ?>" class="btn btn-light">อนุมัติการซื้อขาย</a>
  <a href="<?php echo site_url('Admin/refund_admin'); ?>" class="btn btn-light">ขอคืนเงินจากของที่ถูกยกเลิก</a>

  -------------
  <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#exampleModal1">
  โอนเงินให้ทางร้าน
  </button>

  <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="exampleModalLabel" >ภาพสลิปโอนเงิน</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form action="<?= site_url('Payment/adding');?>" method="post" class="form-horizontal" enctype="multipart/form-data">
        <div class="form-group col  col-md-5">
        
          <label class="text-dark">ภาพสลิปโอนเงิน</label>
          <?php foreach ($ve as $x){ ?>
          <h5 class="text-dark">เลขบัญชีทางร้าน : <?php echo $x->number_bank; ?><h5>
          <h5 class="text-dark">ธนาคาร : <?php echo $x->nameBank; ?><h5>
          <input type="text" name="id_shop" value=" <?php echo $x->id_shops?>" hidden>
          <?php } ?>
          <?php foreach ($query as $x){?>
          <input type="text" name="id_customer" value=" <?php echo $x->id?>" hidden>
          <input type="text" name="id_Set" value=" <?php echo $x->id_set?>" hidden>
          <input type="text" name="id_payment" value=" <?php echo $x->id_p?>" hidden>
          <?php } ?>
          <?php foreach ($conn as $x){?>
          <input type="text" name="id_conn" value=" <?php echo $x->id_conn?>" hidden>
          <?php } ?>
          <input type="datetime-local" name="date_shop" class="form-control" required>
          <br>
          <input type="file" name="P_img_shop" class="form-control"  accept="image/*" required>
      
        </div>
        <div class="form-group col col-md-5">
        <?php foreach ($qu as $x){ ?>
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
</div>
</div>
</div>
</div>
<?php foreach ($query as $row) { ?>
  <div class="col-sm-3">
<div class="card border-danger" align="center" style="width: 65rem;">


  <div class="card-body">
  <img src="<?php echo base_url('img'); ?>/<?php echo $row->img_set;?>" style="width: 400; height: 200;" alt="..." > <br>
    <p class="card-text"><h5>ชื่อร้าน : <?php echo $row->nameShop; ?>
  <br>ชื่อชุดอาหาร : <?php echo $row->name_set; ?>  ขนาด : <?php echo $row->size;?>("รับประทานได้ <?php echo $row->unit_eat;?> คน")
  
  <br>ราคา : <?php echo $row->price;?> บาท  <?php foreach ($conn as $row) { ?> ("สถานะ : <?php echo $row->status_pay;?>") <?php } ?> <?php foreach ($query as $row) { ?> เวลาที่ชำระ <?php echo $row->date_cus;?> 
    <?php } ?>
  <br>เวลาที่ส่งอาหาร <?php echo $row->date_shop;?>  <?php foreach ($conn as $row) { ?>("สถานะของร้าน : กำลัง<?php echo $row->status_shop;?>") <?php } ?>
  <br>เวลาที่ต้องได้รับ <?php echo $row->date_customer;?>  <?php foreach ($conn as $row) { ?> ("สถานะของร้าน : กำลัง<?php echo $row->status_customer;?>")<?php } ?>
  </h5></p>
    

    <p class="card-text"><h4>   <h4></p>
    

  </div>
  </div>
  </div>
  
<?php } ?>
</div>

</div>
<br>
</body>
<?php $this->load->view('footer'); ?>
</html>

