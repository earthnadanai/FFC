<?php defined('BASEPATH') or exit('No direct script access allowed');
      $this->load->view('bootstap');   
      $this->load->view('navbar.php');   
?>
<html>
<head>
<title>view Product</title>
</head>

<body>
    <h1>shop</h1>
    <br>
    
      
    <div class="container" align="center">
    <div class="row" >
  <?php foreach ($re as $x){ ?>
    <div class="col-sm-4" align="center">
    
    <div class="card text-dark bg-light mb-3" style="width: 16rem;" >
    
  <div class="card-body">
    <h5 class="card-title">
    <?php echo $x->name_set;?><br>
    <p class="card-text">ราคา: <?php echo $x->price;?>
     <br>ขนาด: <?php echo $x->size;?></p>
    
    </h5>
    <br>
    
    <form action="<?= site_url('Customer/showproduct');?>" method="POST">
    
      <input type="text" name="id_set" value="<?php echo $x->id_set; ?>" hidden>
      <?php foreach ($viewShop as $x){ ?> <input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
    <?php };?>
      <input type="submit" class="btn btn-primary" name="primary" value="ดูอาหารของทางร้าน"></form>

  </div>
</div>
    </div> 
  <?php };?>
    </div>
    
</div>
<br><br><br><br><br>
<?php
$conn = null;
?>
</body>
<?php $this->load->view('footer'); ?>
</html>





