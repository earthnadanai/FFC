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
  </div>
  </div>
</div>
</div>

  
<?php foreach ($re as $row) { ?>
  <div class="col-sm-9">
<div class="card border-danger" align="center" style="width: 60rem;">

<img src="<?php echo base_url('img'); ?>/<?php echo $row->img;?>" class="rounded mx-auto d-block"  alt="">
  <div class="card-body">
    <p class="card-text"><h4>  ชื่อจริง  : <?php echo $row->firstname;?> นามสกุล : <?php echo $row->lastname;?> </h4></p>
    <p class="card-text"><h4>  ที่อยู่  : <?php echo $row->numhome;?> ตำบล : <?php echo $row->parish ;?>  อำเภอ : <?php echo $row->district;?> จังหวัด  : <?php echo $row->province;?></h4></p>
    
   
    <p class="card-text"><h4>   <h4></p>
    

  </div>
  </div>
  </div>
  </div>
<?php } ?>

</div>
<br>
</body>
<?php $this->load->view('footer'); ?>
</html>

