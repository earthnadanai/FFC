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
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url('public'); ?>/a.css">
</head>
<body>

<div class="col-12 backgroundCo">
    <div class="container"   align="center">
    <br>
      <br>
    <div class=" card" style="width: 30rem;">

  <?php if ($error = $this->session->flashdata('error_msg')): ?>
    <div class="alert alert-danger  alert-dismissible fade show" role="alert">
    <i class="bi bi-exclamation-circle-fill"> <strong>ข้อมูลผิดพลาด!</strong> <?php echo $this->session->flashdata('error_msg'); ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></i>
    </div>
  <?php endif ;?>

<div  style="max-width: 45rem;">
  <div><h2 class="text-white">เข้าสู่ระบบ</h2></div>
  <div class="card-body ">
    <p class="card-text">   
    <form action="login_x" method="post">
  <div class="form-group">
    <input type="text" name="username" placeholder="username" required>
  </div>
  <div class="form-group">
    <input type="password"  name="password" placeholder="Password" required>
  </div>
  <br>
  <a class="text-white text-decoration-none"  align="end" href="<?php echo site_url('User/page_forget'); ?>">ลืมรหัสผ่าน</a><br>
  <br>
  <input type="submit" name="login"  class="button" value="เข้าสู่ระบบ" />
  <a href="<?php echo site_url('User/page_register'); ?>" class="button">สมัครสมาชิก</a>
  
</form>
</div>
  </div>
 
</div>
<br>
</div>

    <br>

</body>
<?php $this->load->view('footer'); ?>
</html>

