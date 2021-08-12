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

<body>
<div class="bg">
<br>

<div class="container" align="left">
<h4> ชำระเงิน 1 ครั้ง ต่อ 1 เซ็ต </h4>
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
    <button type="button" class="btn btn-danger">ลบ</button></form>
    </div>
<br>
<br>
<br>
    <div class="container" align="right">
<form action="<?= site_url('...');?>" method="POST">



    <button type="submit" class="btn btn-success btn" name="submit"><img src="../../img/shoppingicon.png" style="width: 25px; height:25;"> สั่งซื้อ</button>
    <button type="submit" class="btn btn-secondary" name="submit">ย้อนกลับ</button>
   
    </div>
    </div>
</div>
</div>
</div>
</div> 

</form>

  </div>
</div>
</div>
</div>
<?php 
};?>
</div>
</div>



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





</body>


        


<?php $this->load->view('footer');  ?>
</html>
