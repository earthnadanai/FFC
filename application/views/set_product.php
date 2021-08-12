<?php defined('BASEPATH') or exit('No direct script access allowed');
      $this->load->view('bootstap');    
      $this->load->view('navbar.php');  
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Welcome to FFC</title>
        

        
</head>
<body>

<br>
<div class="container" align="left">
<h1> ชำระเงิน 1 ครั้ง ต่อ 1 เซ็ต </h1>
</div>
<div class="container">
<div class="card">
<div class="card-header">
<?php foreach ($buypro as $x){ ?>

 <h5> <?php echo $x->nameShop;?><br></h5>
  </div>

  <div class="card-body">
  <div class="row">
    <div class="col">
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
  <img src="<?php echo base_url('img'); ?>/<?php echo $x->img_set;?>"   style="width: 100px; height: 100px; alt="..." >

    </label>
</div>
    </div>
    <div class="col">
    <?php echo $x->name_set;?>
    </div>
    <div class="col">
    ราคา: <?php echo $x->price;?>
    </div>
    
    <div class="col">
    <form action="<?= site_url('...');?>" method="POST">
    <button type="submit" class="btn btn-danger">ลบ</button>
    </div>
  </div>
</div>
</div>
</div>
<?php };?>
</form>


  </label>
</div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>

</form>

<br>
<div class="container" align="right">
<form action="<?= site_url('Customer/showproduct_customer');?>" method="POST">

    <button type="submit" class="btn btn-outline-success btn" name="submit"><img src="../../img/shoppingicon.png" style="width: 25px; height:25;"> สั่งซื้อ</button>
    <button type="submit" class="btn btn-secondary" name="submit">ย้อนกลับ</button>
   
    </div>
    </div>
</div>
</div>
</div>
</div> 
</form>

<br>
</body>


        

<br>
<?php $this->load->view('footer');  ?>
</html>
