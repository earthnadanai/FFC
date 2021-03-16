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
  <button type="button" class="btn btn-success">โอนเงินให้ทางร้าน</button>
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

