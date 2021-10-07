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
</head>
<body>
<center>
<img  src="../../img/200w.gif"  alt="..." >
</center>
<div class="container" align="center">
<div class="card text-dark bg-light mb-3" style="max-width: 70rem;">
<div class="card-body">
<h4>เพิ่มอาหาร</h4>

<div class="row">

<?php foreach ($viewSets as $x){ ?>
  
  <div class="col-4">
    <div class="card" style="width: 18rem;">
    <img  src="<?php echo base_url('img'); ?>/<?php echo $x->img_set;?>"  alt="..." style="width: 287px; height: 150px;">
      <div class="card-body">
        <h5 class="card-title">ชื่อชุดอาหาร : <?php echo $x->name_set; ?></h5>
        <p class="card-text">
        <input type="text" name="Pro_id_set" value="<?php echo $x->id_set; ?>" hidden>
         ขนาด : <?php echo $x->size; ?> ราคา : <?php echo $x->price; ?>   
        </p>
      <form action="<?= site_url('Product/pege_N1setmeal');?>" method="post">
      <input type="text" name="Pro_id_set" value="<?php echo $x->id_set; ?>" hidden>
      <input type="text" name="size" value="<?php echo $x->size; ?>" hidden>
      <?php foreach ($viewSet as $x){ ?>
      <input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
      <?php } ?>
        <button type="submit" class="btn btn-success" >ยืนยัน</button>
      </form>
      </div>
      </div>
      <br>
      </div>
  
        <?php } ?>

    <form action="<?= site_url('Product/pege_status');?>" method="post" >
    <?php foreach ($viewSet as $x){ ?>
    <input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
    <?php } ?>
    <button type="submit" class="btn btn-secondary" >ย้อนกลับ</button>
    </form>

</div>

</div>
</div>
</div>
</div>

</body>
<?php $this->load->view('footer');  ?>
</html>


