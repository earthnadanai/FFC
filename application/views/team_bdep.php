<?php defined('BASEPATH') or exit('No direct script access allowed');
      $this->load->view('bootstap');  
      $this->load->view('navbar.php');  
     
?>
<html>
<head>
<title>how_to_pay</title>
<link rel="stylesheet" href="<?php echo base_url('public'); ?>/index.css">
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">

</head>
<body>
<br><br>

<h1 class="h1xd">ทีมผู้พัฒนา</h1>


    <br>
    
    <div class="container">
  <div class="row">

  <div class="card" style="width: 17rem;">
  <img src="../../img/boat.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">นาย ธนชาติ ชาวนาฝ้าย</h5>
    <p class="card-text">614259044 61/100</p>
    <a href="https://www.facebook.com/tanachad.boat" class="btn btn-primary">FaceBook</a>
  </div>
</div>

<div class="card" style="width: 17rem;">
  <img src="../../img/day.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">นาย เดชาชาญ บัวแสง</h5>
    <p class="card-text">614259036 61/100</p>
    <a href="https://www.facebook.com/profile.php?id=100023722341579" class="btn btn-primary">FaceBook</a>
  </div>
</div>

<div class="card" style="width: 17rem;">
  <img src="../../img/earth.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">นาย ณัฐดนัย กุไรรัตน์</h5>
    <p class="card-text">614259015 61/100</p>
    <a href="https://www.facebook.com/earthlove5555" class="btn btn-primary">FaceBook</a>
  </div>
</div>

<div class="card" style="width: 17rem;">
  <img src="../../img/phu.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">นาย ภูริภัทร รักคง</h5>
    <p class="card-text">614259023 61/100</p>
    <a href="https://www.facebook.com/iamphu.riphat/" class="btn btn-primary">FaceBook</a>
  </div>
</div>

  </div>
</div>
    <br><br><br>
   
    <br><br>


</div>






</body>
<?php $this->load->view('footer'); ?>
</html>