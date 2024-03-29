<?php defined('BASEPATH') or exit('No direct script access allowed');
      $this->load->view('bootstap');    
      $this->load->view('navbar.php');  
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Welcome to FFC</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?php echo base_url('public'); ?>/index2.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">

    </head>
<body>
  <div class="bg">
    <div class="card bg-dark text-white" >
        <img src="../../img/tum-yum-goong-005.jpg" width="1000" height="700" class="card-img" alt="...">
        <div class="card-img-overlay" >
            <br><br><br><br><br><br><br><br><br> 
          <h1 class="card-title">ยินดีต้อนรับเข้าสู่</h1>
          <h3 class="card-title2">FOOD FOR CATERING</h3>

          <form method="post" action="<?php echo site_url('Customer/search'); ?>" >
        <div class="row" >
        <div class="col-3">
        </div>
            <div class="col-5" >
                <input  class="form-control" type="text" placeholder="ค้นหาร้านอาหาร ประเภทอาหาร อาหาร" name="search" required/>
        </div>
            <div class="col-4" >
                <input type="submit" class="btn btn-block btn-primary" style="width:100px" name="submit" value="ค้นหา">
        </div>
        
        </div>
    </form>

        </div>
      
    </div>
    <br><br>
    <div class="container">
      <div class="ex1">ร้านค้าที่เปิดให้บริการอยู่</div><br>
      
  <div class="row" >
  <?php foreach ($search_shop as $x){ ?>
    <div class="col-sm-4" align="center">

    <form action="<?= site_url('Customer/showproduct_customer');?>" method="POST">
   
    <div id="myid1" class="card" style="width: 23rem;" >
    <img src="<?php echo base_url('img'); ?>/<?php echo $x->img_shop;?>"  alt="..." style="width: 365px; height: 225px;">
  <div class="card-body">
    <h5 class="card-title">
    <img  src="<?php echo base_url('img'); ?>/<?php echo $x->img_status;?>" style="width: 20px; height: 20px;  alt="..." >
    <input type="submit" class="btn btn-lg text-light <?php echo $x->id_shops; ?>" value="<?php echo $x->nameShop;?>"></h5>
    
      <input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
      
  </div>
</div>
</div> 
    </form> 
  <?php };?>
    </div>

    <div class="row" >
  <?php foreach ($searchs_product as $x){ ?>
    <div class="col-sm-4" align="center">

    <form action="<?= site_url('Customer/showproduct_search');?>" method="POST">
   
    <div id="myid1" class="card" style="width: 23rem;" >
    <img src="<?php echo base_url('img'); ?>/<?php echo $x->img_pro;?>"  alt="..." style="width: 365px; height: 225px;">
   <div class="card-body">
    <h5 class="card-title text-light">
    <?php echo $x->nameProduct;?>
    <br> ประเภทอาหาร : <?php echo $x->type;?><br>
    <br><input type="submit" class="btn btn-info <?php echo $x->id_pro; ?>" value="ดูอาหารทั้งหมดที่อยู่ในชุด"></h5>
    <input type="text" name="id" value="<?php echo $x->id_pro; ?>" hidden>
    <input type="text" name="id_shop" value="<?php echo $x->id_pro_shop; ?>" hidden>


    </div>
    </div>
    </div> 
    </form> 
  <?php };?>
    </div>


  </div>
</div>



</div> 

</div> 
</body>
<?php $this->load->view('footer');  ?>
</html>
