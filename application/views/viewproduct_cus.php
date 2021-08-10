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
  <div class="row">
  <?php foreach ($re as $x){ ?>
    <div class="col-12">
      
    
    <div class="card mb-3" style="max-width: 800px; max-hight: 800" >
  <div class="row g-0">

    <div class="col-md-6">
      <img src="..." class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-6">
      <div class="card-body">
        <h5 class="card-title">
        <?php echo $x->name_set;?><br>
        </h5>
        <p class="card-text">
        ราคา: <?php echo $x->price;?>
        </p>
        <p class="card-text">
        ขนาด: <?php echo $x->size;?></p>

        <form action="<?= site_url('...');?>" method="POST">
    
      
      
      <input type="submit" class="btn btn-success" name="success" value="สั่งเลย!!"></form>
      

      
      <form action="<?= site_url('Customer/showproduct');?>" method="POST">
    
    <input type="text" name="id_set" value="<?php echo $x->id_set; ?>" hidden>
    <?php foreach ($viewShop as $x){ ?> <input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
  <?php };?>
    <input type="submit" class="btn btn-light" name="light" value="ดูรายละเอียด>>"></form>
      

        </p>
      </div>
    </div>
  </div>
</div>
</div>
<?php };?>
</div>
</div>
      
   

<?php
$conn = null;
?>
</body>
<?php $this->load->view('footer'); ?>
</html>






