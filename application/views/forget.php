<?php defined('BASEPATH') or exit('No direct script access allowed');
      $this->load->view('bootstap'); 
      $this->load->view('navbar');
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
    <div class=" card" style="width: 30rem;">
<div  style="max-width: 45rem;">
  <div><h2 class="text-white">ลืมรหัสผ่าน</h2></div>
  <div class="card-body ">
    <p class="card-text">   
    <form action="forget_x" method="post">
  <div class="form-group">
    <input type="text" name="email" placeholder="กรุณากรองอีเมล" required>
  </div>
  <br>
  <input type="submit" name="forget"  class="button" value="ตกลก" />
  <a href="<?php echo site_url('User/page_login'); ?>" class="button">ยกเลิก</a>
  
</form>
</div>
  </div>
 
</div>
<br>
<br>
</div>

    <br>

</body>
<?php $this->load->view('footer'); ?>
</html>
