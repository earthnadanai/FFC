<?php defined('BASEPATH') or exit('No direct script access allowed');
      $this->load->view('bootstap');    
      $this->load->view('navbar.php');  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?php echo base_url('public'); ?>/index2.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="bg"> 
<div class="container" align="center">
    <br><br>
  <div class="row">

  
  <div class="col">
  <div class="card">
  <div class="card">

  
  <form action="<?= site_url('Customer/final_payment');?>" method="POST"> 
  <div class="card-body" align="left">
  <div class="row">
    <div class="col-1">
    <img src="../../img/baseline_location_on_black_36dp.png" alt="...">
    </div>
    
    <div class="col">
    <?php foreach ($foodpay as $x){ ?>
      <h5 align="left"><?php echo $x->firstname;?> 
      &nbsp<?php echo $x->lastname;?>
      &nbsp&nbsp <?php echo $x->tell;?>
      <br> <?php echo $x->numhome;?>
      ต.<?php echo $x->parish;?>
      อ.<?php echo $x->district;?>
      จ.<?php echo $x->province;?>
      <input type="text" name="id_o" value="<?php echo $x->id_o;?>" hidden>
    </h5>
    </div>
    
      
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
  <?php echo $x->nameShop;?>
  </div>
  
  <div class="card-body" align="left">
    
  <div class="row">
  <div class="col">
      <img src="<?php echo base_url('img'); ?>/<?php echo $x->img_set;?>" alt="..."style="width: 50px; max-hight: 50px">
      </div>
      <div class="col">
      <?php echo $x->name_set;?>
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
    
  <div class="row">
  <div class="col-2">
      <h5>กำหนดวันส่งอาหาร</h5>
  </div>  
  <div class="col-3">
  <input type="datetime-local" id="date_customer"name="date_customer" min="T00:00" max="T00:00" align="canter" required><br>

  </div>   
  
  
  <div class="col-7">
  <h5 class="text-danger" align="left">*หมายเหตุ สั่งก่อนวันที่สั่งล่วงหน้าอย่าน้อย 3 วัน และตรวจสอบเมื่อใส่ข้อมูลเสร็จสิ้น</h5>  
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
  <div class="row">   
  <div class="col-2">
      <h5>คำขอเพิ่มเติม</h5>
  </div> 
  <label for="exampleFormControlTextarea1"></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="comment" rows="3"  placeholder="เช่น กระเพรา เผ็ดน้อย" required></textarea>

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
    
    <h4>ราคา &nbsp฿<?php echo $x->price;?><h4>
  </div>
  <div class="col-2"> 
  <input type="text" name="id_customer" value="<?php echo $this->session->userdata('id');?>" hidden>
  <input type="text" name="id_shop" value="<?php echo $x->id_shops;?>" hidden>
  <input type="text" name="id_sett" value="<?php echo $x->id_set;?>" hidden>
  
  <input type="submit" class="btn btn-success" name="success" value="สั่งเลย!!"></form>
  </div>
  <div class="col-1">
  <form action="<?= site_url('Customer/buy_productback');?>" method="POST">
  <input type="text" name="id_customer" value="<?php echo $this->session->userdata('id');?>" hidden>
  <input type="submit" class="btn btn-secondary" name="secondary" value="ย้อนกลับ"></form>

  </div>
  
  </div>

  
  </div>
  </div>
  </div>
  </div> 



  </div>
  <?php };?>  
  
  
  
  
  

  <br>
  <br>
 </div>
 </div>
 </div>
 </div>
 
 

 </div>
</body>

</html>

<?php $this->load->view('footer');  ?>
</html>