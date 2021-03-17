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
    
  <a href="<?php echo site_url('Welcome/showcustomer_admin'); ?>" class="btn btn-light">ข้อมูลลูกค้า</a>
  <a href="<?php echo site_url('Welcome/showshop_admin'); ?>" class="btn btn-light">ข้อมูลร้านค้า</a>
  <a href="<?php echo site_url('Welcome/showapproval_shop'); ?>" class="btn btn-light">รอการอนุมัติเปิดร้านค้า</a>
  <a href="<?php echo site_url('Welcome/trading_admin'); ?>" class="btn btn-light">อนุมัติการซื้อขาย</a>
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
        
      <form action="<?= site_url('Welcome/adding');?>" method="post" class="form-horizontal" enctype="multipart/form-data">
        <div class="form-group col  col-md-5">
        
          <label class="text-dark">ภาพสลิปโอนเงิน</label>
          <?php foreach ($ve as $x){ ?>
          <h5 class="text-dark">เลขบัญชีทางร้าน : <?php echo $x->number_bank; ?><h5>
          <?php } ?>
          <input type="file" name="P_img_shop" class="form-control"  accept="image/*" required>
        </div>
        <div class="form-group col col-md-5">
        <?php foreach ($qu as $x){ ?>
        <input type="int" name="id" value="<?php echo $x->id_p; ?>" hidden>
        <button type="submit" class="btn btn-success" >SAVE</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
<div class="card border-danger" align="center" style="width: 20rem;">


  <div class="card-body">
    <p class="card-text"><h5>  ชื่อชุดอาหาร  : <?php echo $row->name_food;?> <br>  วันที่รับอาหาร  : <?php echo $row->date;?>
    <br> ราคา : <?php echo $row->price;?>   ขนาด : <?php echo $row->size ;?> </h5></p>
    

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

