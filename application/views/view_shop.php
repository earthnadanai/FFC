<?php defined('BASEPATH') or exit('No direct script access allowed');
      $this->load->view('bootstap');   
      $this->load->view('navbar.php');   
?>
<html>
<head>
<title>view shop</title>
</head>

<body>
    <h1>shop</h1>
    <br>
    <?php foreach ($pe as $x){ ?>
    <div class="container" align="center">
    <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
    <img  src="<?php echo base_url('img'); ?>/<?php echo $x->img_shop;?>"  alt="..." >
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $x->nameShop; ?></h5>
        <p class="card-text"></p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
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


