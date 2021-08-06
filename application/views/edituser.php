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
    <title>ข้อมูลส่วนตัว</title>
    <link rel="stylesheet" href="<?php echo base_url('public'); ?>/a.css">
    <link rel="stylesheet" href="<?php echo base_url('public'); ?>/index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">

</head>
<body>
    <br>
<div class="ex1">ข้อมูลส่วนตัว</div>
<div class="container" align="center">
<div class="row">
<div class="col">

</div>
<div class="col-3">

</div>

</div>
</div>

<ul class="nav nav-tabs" id="myTab" role="tablist">
 
  <div class="container"align="center">

<div  style="width: 40rem;" align="center">
<h4 align="left">ข้อมูลส่วนตัว<h4>

<form action="<?= site_url('Customer/profile_edit');?>" method="post">
<?php foreach ($query as $x){ ?>
  <div class="row">
    <div class="col">
    <div class="row">
    <div class="col">
    <div class="col-sm-12">
      <input type="text" name="firstname"  class="form-control" placeholder="ชื่อจริง" value="<?php echo $x->firstname; ?>" required>
    </div>
    </div>
    <div class="col">
    <div class="col-sm-12">
      <input type="text" name="lastname"  class="form-control" placeholder="นามสกุล" value="<?php echo $x->lastname; ?>"required>
    </div>
    </div>
    </div>
    <div class="col">
    <div class="col-sm-12">
      <input type="email" name="email"  class="form-control" placeholder="ที่อยู่อีเมล์(npru@gmail.com)"value="<?php echo $x->email; ?>" required>
    </div>
    </div>

  

    <div class="col">
    <div class="col-sm-12">
      <input type="text" name="tell"  class="form-control" placeholder="เบอร์โทรศัพท์"value="<?php echo $x->tell; ?>" required>
    </div>
    </div>
    
   
<br>
    <h4 align="left">ที่อยู่ผู้ใช้<h4>
    <div class="row">
    <div class="col-4"><input type="text" name="numhome"  class="form-control" placeholder="เลขที่บ้าน"value="<?php echo $x->numhome; ?>" required></div>
    <div class="col"><input type="text" name="province"  class="form-control" placeholder="จังหวัด" value="<?php echo $x->province; ?>"required></div>
    <div class="col"><input type="text" name="district"  class="form-control" placeholder="อำเภอ" value="<?php echo $x->district; ?>"required></div>
    <div class="col"><input type="text" name="parish"  class="form-control" placeholder="ตำบล" value="<?php echo $x->parish; ?>"required></div>
  
  
  </div>

    <br>
    <button type="submit" class="btn btn-danger" >แก้ไขข้อมูล</button>
    
  <br><br>
</div>

<?php } ?>
</form>
</div>  
</div>

</body>

</html>


