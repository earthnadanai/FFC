<?php defined('BASEPATH') or exit('No direct script access allowed');
      $this->load->view('bootstap');    
      $this->load->view('navbar.php');  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?php echo base_url('public'); ?>/index2.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<div class="bg">
    <br><br>
<div class="container" align="center">
  <div class="row">
  <div class="col">
  <div class="card">
   
  <div class="card-body" align="left">
  <div class="row">
  <div class="col-1">
    <img src="../../img/baseline_location_on_black_36dp.png" alt="...">
    </div>
    <?php foreach ($payfood as $x){ ?>
    <div class="col">
    <h5 align="left">
        <?php echo $x->firstname?> <?php echo $x->lastname?> 
       <?php echo $x->tell?> 
    <br> 
       <?php echo $x->numhome?> 
      ต. <?php echo $x->parish?>
      อ. <?php echo $x->district?>
      จ. <?php echo $x->province?>
    </h5>
    </div>
  </div>
</div>



  </div>
  </div>
  </div>
  <br>
  <div class="row">
  <div class="col">
  <div class="card">

  <div class="card-header"align="left">
  <?php echo $x->nameShop?> 
  </div>
  
   
  <div class="card-body" align="left">
    
  <div class="row">
  <div class="col">
  <img src="<?php echo base_url('img'); ?>/<?php echo $x->img_set;?>" class="card-img-top" alt="..."style="width: 125px; max-hight: 125px">
      </div>
      <div class="col">
      <?php echo $x->name_set?> 
      </div>
      <div class="col">
      <h5 >฿<?php echo $x->price;?></h5>
      </div> 
      <div class="col">
      <h5 class="text-warning">฿<?php echo $x->price;?></h5>
      </div> 
      
    </div>

  </div>
  </div>
</div>




  </div>
  <br>
  <div class="row">
  <div class="col">
  <div class="card">

  
  
   
  <div class="card-body" align="left">
  <form method="post" action="<?php echo site_url('...'); ?>" >  
  <div class="row">
  
      <div class="col-2">
      <h5> ช่องทางการชำระเงิน</h5>
      </div>
      <div class="col-1">
  <img src="../../img/SCB.png" class="card-img-top" alt="..."style="width: 50px; max-hight: 50px">
  
      </div>
      <div class="col-3">
      <h5 >เลขที่บัญชี: 614-259015-0 <br>บัญชี: FOODFORCATERING</h5>
      </div> 
      <div class="col-3">
      <h5 >แนบหลักฐานการโอนเงิน</h5>
      <input type="file" id="myfile" name="myfile">
      </div> 
      <div class="col-2">
      <input type="datetime-local" id="birthdaytime" name="birthdaytime">
      </div> 

    </div>

  </div>
  </div>
</div>
 
 



  </div>
  <br>

  <div class="row">
  <div class="col">
  <div class="card">
  
  <div class="card-body" align="right">
  <div class="row"align="right">
  <div class="col-9"align="right">
    
    <h4>ยอดชำระเงินทั้งหมด &nbsp฿ <?php echo $x->price;?><h4>
  </div>
  <div class="col-2"> 
  
  
  <input type="submit" class="btn btn-success" name="success" value="ชำระเงิน">
  </form>
  </div>
  
  <div class="col-1">
  <form method="post" action="<?php echo site_url('...'); ?>" > 
  <input type="submit" class="btn btn-secondary" name="secondary" value="ย้อนกลับ">
  </form>
</div>
  
  
  </div>

  
  </div>
  </div>
  <?php } ?>
  </div>
  </div>
  <br>







  </div>
  </div>
  
 
  

  
</div>

</div>


</div>

</body>

<?php $this->load->view('footer'); ?>
</html>