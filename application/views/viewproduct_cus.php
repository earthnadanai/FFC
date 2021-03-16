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
    <?php foreach ($re as $x){ ?>
    <div class="container" align="center">
    <div class="card mb-3" style="max-width: 700px;">
  <div class="row g-0">
    <div class="col-md-4">
    <img  src="<?php echo base_url('img'); ?>/<?php echo $x->img_shop;?>"  alt="..." >
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <br>
        <h2 class="card-title"> 
        <img  src="<?php echo base_url('img'); ?>/<?php echo $x->img_status;?>" style="width: 20px; height: 20px;  alt="..." >  
        <?php echo $x->nameShop; ?>
      </h2>
        <p class="card-text"> <?php echo $x->status_work;?></p>
        <br>
        <p class="card-text"><small class="text-muted">
        <form action="./showproduct" method="POST">
      <input type="text" name="id" value="<?php echo $x->id_sett; ?>" hidden>
      <input type="submit" class="btn btn-primary" name="primary" value="ดูอาหารของทางร้าน"></form>
        </small></p>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>
<?php
$conn = null;
?>
</body>
<?php $this->load->view('footer'); ?>
</html>


