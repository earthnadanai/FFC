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
  
<?php foreach ($viewcut as $row) { ?>
  <div class="col-sm">
<div class="card border-danger" align="center" style="width: 60rem;">

<img src="<?php echo base_url('img'); ?>/<?php echo $row->img;?>" class="rounded mx-auto d-block"  alt="">
  <div class="card-body">
    <p class="card-text"><h4>  ชื่อจริง  : <?php echo $row->firstname;?> นามสกุล : <?php echo $row->lastname;?> </h4></p>
    <p class="card-text"><h4>  ที่อยู่  : <?php echo $row->numhome;?> ตำบล : <?php echo $row->parish ;?>  อำเภอ : <?php echo $row->district;?> จังหวัด  : <?php echo $row->province;?></h4></p>
    
   
    <p class="card-text"><h4>   <h4></p>
    
    <form action="<?= site_url('Order/order_shop');?>" method="post" >
    <?php foreach ($viewShop as $x){ ?>
    <input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
    <?php } ?>
    <button type="submit" class="btn btn-secondary" >ย้อนกลับ</button>
    </form>
    
  </div>
  </div>
  <?php } ?>
  </div>
  </div>


</div>
<br>
</body>
<?php $this->load->view('footer'); ?>
</html>

