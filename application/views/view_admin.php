<?php defined('BASEPATH') or exit('No direct script access allowed');
      $this->load->view('bootstap');  
      $this->load->view('navbar.php');  
?>
<html>
<head>
<title>view Admin</title>
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
    <h1>ลูกค้า</h1>
    <br>
    
    <div class="row">
    <?php foreach ($query as $x){ ?>
    <div class="col-6">
    <div class="card mb-3" style="max-width: 900px;">
  
  <div class="row g-0">
  
    <div class="col-md-3">
      <img src="<?php echo base_url('img'); ?>/<?php echo $x->img;?>" style="width: 160px; height: 170px; alt="..." >
    </div>
    <div class="col-md-8">
      <div class="card-body text-dark">
      <br><br>
        <h5 class="card-title"><?php echo $x->username;?></h5>
        <br>
    <form action="<?php echo site_url('Admin/info_customer'); ?>" method="POST">
    <input type="text" name="id" value="<?php echo $x->id; ?>" hidden>
    <input type="submit" class="btn btn-primary" name="primary" value="ดูรายละเอียด"></form>
    
    
      </div>
      
    </div>
    <br>
  </div>
  
</div>

    </div>
    
    <?php }; ?>
  </div>
  
  </div>
  
</div>

    </div>
    
  </div>
  
    </div>
</body>
<?php $this->load->view('footer'); ?>
</html>

