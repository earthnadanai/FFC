<?php defined('BASEPATH') or exit('No direct script access allowed');
      $this->load->view('bootstap');
      $this->load->view('navbar');
       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    

</head>
<body>
<?php foreach ($qu as $x){ ?>
<div class="ex1"><?php echo $x->name_set;?></div>
<?php }; ?>
<br>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="ดูอาหาร" aria-selected="true">ดูอาหาร</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="สั่งซื้ออาหาร" aria-selected="false">สั่งซื้ออาหาร</button>
  </li>
</ul>



    
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  <br>

  <div class="container">
  <div class="row">
    <div class="col-sm-3">
      
    <div class="card text-white bg-danger">
  <div class="card-body">
  <div class="d-grid gap-2">
  <a href="<?php echo site_url('Welcome/showcustomer_admin'); ?>" class="btn btn-light">ดูราคาสินค้า</a>
  <a href="<?php echo site_url('Welcome/showcustomer_admin'); ?>" class="btn btn-light">ดูที่อยู่ทางร้าน</a>
  </div>
</div>
</div>

    </div>
  <div class="col-sm-9">
      
  <div class="row">
    <?php foreach ($query as $x){ ?>
    <div class="col">
    <div class="card" style="width: 18rem;">
    <img  src="<?php echo base_url('img'); ?>/<?php echo $x->p_img;?>"  alt="..." >
  <div class="card-body">
    <h4><?php echo $x->nameProduct;?></h4>
    <p class="card-text"><?php echo $x->info;?></p>
  </div>
</div>
<br>
    </div>
    <?php }; ?>
    </div>
    </div>
  </div>
    </div>
  </div>

  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  <br>
  <div class="container">
  <div class="row">
    <div class="col-sm-3">
      
    <div class="card text-white bg-danger">
  <div class="card-body">
  <div class="d-grid gap-2">
  <h4>เลือกขนาดอาหาร</h4>
  <li class="list-group-item text-dark">
  <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1" value="" aria-label="...">
    ขนาดเล็ก
  </li>
  <li class="list-group-item text-dark">
  <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1" value="" aria-label="...">
    ขนาดกลาง
  </li>
  <li class="list-group-item text-dark" >
  <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1" value="" aria-label="...">
    ขนาดใหญ่
  </li>
  <form action="./ok_shop" method="POST" class="d-grid gap-2">
    <input type="text" name="id" value="<?php echo $x->id; ?>" hidden>
    <input type="submit" class="btn btn-success" name="Waiting_status" value="กดเพื่อซื้ออาหาร"></form>
  </div>
</div>
</div>

    </div>
  <div class="col-sm-9">
  <div class="row">


    <div class="alert alert-danger" role="alert">
    อาหารคาว
    </div>
    <?php foreach ($ve as $x){ ?>
    <div class="col" align="center">
    <div class="card" style="width: 18rem;">
    <img  src="<?php echo base_url('img'); ?>/<?php echo $x->p_img;?>"  alt="..." >
  <div class="card-body">
    <h4><?php echo $x->nameProduct;?></h4>
    <p class="card-text"><?php echo $x->info;?></p>
  </div>
  <br>
</div>
<br>
    </div>
    <br>
    <?php }; ?>
    <br>
    <?php foreach ($xe as $x){ ?>
    <div class="col" align="center">
    <div class="card" style="width: 18rem;">
    <img  src="<?php echo base_url('img'); ?>/<?php echo $x->p_img;?>"  alt="..." >
  <div class="card-body">
    <h4><?php echo $x->nameProduct;?></h4>
    <p class="card-text"><?php echo $x->info;?></p>
  </div>
  <br>
</div>
<br>
    </div>
    <br>
    <?php }; ?>
    <?php foreach ($qe as $x){ ?>
    <div class="col" align="center">
    <div class="card" style="width: 18rem;">
    <img  src="<?php echo base_url('img'); ?>/<?php echo $x->p_img;?>"  alt="..." >
  <div class="card-body">
    <h4><?php echo $x->nameProduct;?></h4>
    <p class="card-text"><?php echo $x->info;?></p>
  </div>
  <br>
</div>
<br>
    </div>
    <br>
    <?php }; ?>
    <?php foreach ($te as $x){ ?>
    <div class="col" align="center">
    <div class="card" style="width: 18rem;">
    <img  src="<?php echo base_url('img'); ?>/<?php echo $x->p_img;?>"  alt="..." >
  <div class="card-body">
    <h4><?php echo $x->nameProduct;?></h4>
    <p class="card-text"><?php echo $x->info;?></p>
  </div>
  <br>
</div>
<br>
    </div>
    <br>
    <?php }; ?>

    <div class="alert alert-danger" role="alert">
    ของหวาน
    </div>
    <?php foreach ($re as $x){ ?>
    <div class="col" align="center">
    <div class="card" style="width: 18rem;">
    <img  src="<?php echo base_url('img'); ?>/<?php echo $x->p_img;?>"  alt="..." >
  <div class="card-body">
    <h4><?php echo $x->nameProduct;?></h4>
    <p class="card-text"><?php echo $x->info;?></p>
    <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel2" value="" aria-label="...">
  </div>
</div>
    </div>
    <?php }; ?>
    <br>

    
    </div>
    </div>
  </div>
    </div>
  
  </div>

  </div>

 
  </div>

<br>
</body>
<?php $this->load->view('footer'); ?>
</html>



