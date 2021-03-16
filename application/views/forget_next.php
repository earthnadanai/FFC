<?php defined('BASEPATH') or exit('No direct script access allowed');
      $this->load->view('bootstap'); 
      $this->load->view('navbarforget');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forget</title>
    <link rel="stylesheet" href="<?php echo base_url('public'); ?>/a.css">
</head>
<body>

<div class="col-12 backgroundCo">
<br>
    <div class="container"   align="center">
      <br>
      <?php foreach ($query as $x){ ?>
    <div class=" card" style="width: 30rem;">
      
<div  style="max-width: 45rem;">
  <div><h2 class="text-white">Forget</h2></div>
  <div class="card-body ">
    <p class="card-text">   
    <form action="change_pass" method="post">
    <div class="form-group">
    <input type="hidden" name="txtid" value="<?php echo $x->id;?>">
  </div>
  <div class="form-group">
    <input type="password" name="new_pass" placeholder="รหัสผ่านใหม่" required>
  </div>
  <div class="form-group">
    <input type="password" name="confirm_pass" placeholder="รหัสผ่านใหม่อีกครั้ง" required>
  </div>
  <br>
  <input type="submit" name="change_pass"  class="button" value="ตกลง" />
  <br><br>
</form>
</div>
  </div>
        <?php } ?>
</div>
<br>
</div>

    <br>
    


</body>
<?php $this->load->view('footer'); ?>
</html>
