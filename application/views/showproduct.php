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
    <title>เลือกอาหาร</title>
</head>
<body>
    
<br>
        <div class="container" align="center">      
  <div class="row">
  <?php foreach ($re as $x){ ?>
  <div class="col">
  <div class="card" style="width: 30rem;">
  <img  src="<?php echo base_url('img'); ?>/<?php echo $x->img_product;?>"  alt="..." >
  <div class="card-body">
    <p class="card-text">ชื่อชุดอาหาร : <?php echo $x->name_set;?> </p>

    <td align="center"> 
      <form action="./showfood_cus" method="POST">
      <input type="text" name="id" value="<?php echo $x->id_sett; ?>" hidden>
      <input type="submit" class="btn btn-primary" name="primary" value="ดูอาหารในชุด"></form>
      </td>
  </div>
</div>
    </div>
    <?php } ?>  
  </div>
  
</div>
<br>
</body>
<?php $this->load->view('footer'); ?>
</html>