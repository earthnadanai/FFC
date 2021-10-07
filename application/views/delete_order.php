<?php defined('BASEPATH') or exit('No direct script access allowed');
      $this->load->view('bootstap');    
      $this->load->view('navbar.php');  
?>
<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?php echo base_url('public'); ?>/index2.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <title>Welcome to FFC</title>
        
</head>

<div class="bg">
<body>
  <br>
<div class="container">
<div class="row">
<?php foreach ($buypro as $xx){ ?>
  <div class="col-12">
  <div class="card">
  <div class="card-header">
  <div class="row">
  <div class="col-10">
  <h5> <?php echo $xx->nameShop;?><br></h5>
  </div>
  <div class="col">
<form action="<?= site_url('Product/delete_order');?>" method="post">
<input type="text" name="id_o" value="<?php echo $xx->id_o; ?>" hidden>
<button type="submit" class="btn btn-danger" >ลบรายการนี้</button>
</form>
  </div>
  </div>
  </div>

  <div class="card-body">
    <h5 class="card-title"></h5>
    <div class="row">

    <div class="col">
    <img src="<?php echo base_url('img'); ?>/<?php echo $xx->image;?>"  style="width: 185px; height: 125px;" alt="..." >

    </div>
  <div class="col">
  <h5><?php echo $xx->nameProduct;?></h5>
  </div>
  <div class="col">
  <h5> ราคา: <?php echo $xx->price;?></h5>
  </div>
  </div>
  </div>
</div>
<br>
</div><?php };?>
</div>
</div>

    <div class="container" >
    <div class="row">
    <div class="col-12" align="right">
<form action="<?= site_url('Customer/view_basketsimple');?>" method="post">
<input type="submit" class="btn btn-secondary" name="secondary" value="ย้อนกลับ">
</form>
</div>
    </div>
    </div>
    
<br>
</body>
</div>

<?php $this->load->view('footer');  ?>
</html>


