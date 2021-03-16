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
    <title>สมัคบัญชี้ผู้ใช้</title>
    <link rel="stylesheet" href="<?php echo base_url('public'); ?>/a.css">
    <link rel="stylesheet" href="<?php echo base_url('public'); ?>/index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">

</head>
<body>
    <br>
<div class="ex1">สมัครบัญชีผู้ใช้</div>
<div class="container" align="center">
<div class="row">
<div class="col">

</div>
<div class="col-3">

</div>

</div>
</div>

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">สมัคบัญชีผู้ใช้แบบลูกค้า</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">สมัคบัญชีผู้ใช้แบบร้านค้า</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  <br>
  <div class="container"align="center">

<div  style="width: 40rem;" align="center">
<h4 align="left">กรอกข้อมูลส่วนตัว<h4>

<form action="Register" method="post">

  <div class="row">
    <div class="col">
    <div class="col-sm-12">
      <input type="text" name="username"  class="form-control" placeholder="Username" required>
    </div>
    </div>
    <div class="col">
    <div class="col-sm-12">
      <input type="password" name="password"  class="form-control" placeholder="Password" required>
    </div>
    </div>
    </div>

    <div class="col">
    <div class="col-sm-12">
      <input type="email" name="email"  class="form-control" placeholder="ที่อยู่อีเมล์(npru@gmail.com)" required>
    </div>
    </div>

    <div class="col">
    <div class="col-sm-12">
      <input type="hidden" name="status"  class="form-control" value="1">
    </div>
    </div>

    <div class="row">
    <div class="col">
    <div class="col-sm-12">
      <input type="text" name="firstname"  class="form-control" placeholder="ชื่อจริง" required>
    </div>
    </div>
    <div class="col">
    <div class="col-sm-12">
      <input type="text" name="lastname"  class="form-control" placeholder="นามสกุล" required>
    </div>
    </div>
    </div>

  

    <div class="col">
    <div class="col-sm-12">
      <input type="text" name="tell"  class="form-control" placeholder="เบอร์โทรศัพท์" required>
    </div>
    </div>
    
   
<br>
    <h4 align="left">ที่อยู่ผู้ใช้<h4>
    <div class="row">
    <div class="col-4"><input type="text" name="numhome"  class="form-control" placeholder="เลขที่บ้าน" required></div>
    <div class="col"><input type="text" name="province"  class="form-control" placeholder="จังหวัด" required></div>
    <div class="col"><input type="text" name="district"  class="form-control" placeholder="อำเภอ" required></div>
    <div class="col"><input type="text" name="parish"  class="form-control" placeholder="ตำบล" required></div>
  
  
  </div>

    <br>
    <button type="submit" name="submit"  class="btn btn-Success">สมัคสมาชิก</button>
    <a href="<?php echo site_url('Welcome/page_login'); ?>" class="btn btn-danger">ยกเลิก</a>
  <br><br>
</div>


</form>
</div>

  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  <br>
  <div class="container"align="center">

<div  style="width: 40rem;" align="center">
<h4 align="left">กรอกข้อมูลส่วนตัว<h4>

<form action="Register" method="post">

  <div class="row">
    <div class="col">
    <div class="col-sm-12">
      <input type="text" name="username"  class="form-control" placeholder="Username" required>
    </div>
    </div>
    <div class="col">
    <div class="col-sm-12">
      <input type="password" name="password"  class="form-control" placeholder="Password" required>
    </div>
    </div>
    </div>

    <div class="col">
    <div class="col-sm-12">
      <input type="email" name="email"  class="form-control" placeholder="ที่อยู่อีเมล์(npru@gmail.com)" required>
    </div>
    </div>


    <div class="row">
    <div class="col">
    <div class="col-sm-12">
      <input type="text" name="firstname"  class="form-control" placeholder="ชื่อจริง" required>
    </div>
    </div>
    <div class="col">
    <div class="col-sm-12">
      <input type="text" name="lastname"  class="form-control" placeholder="นามสกุล" required>
    </div>
    </div>
    </div>

    <div class="col">
    <div class="col-sm-12">
      <input type="text" name="id_card_number"  class="form-control" placeholder="เลขบัตรประชาชน" required>
    </div>
    </div>

    <div class="col">
    <div class="col-sm-12">
      <input type="text" name="tell"  class="form-control" placeholder="เบอร์โทรศัพท์" required>
    </div>
    </div>

    <div class="col">
    <div class="col-sm-12">
      <input type="hidden" name="status"  class="form-control" value="2">
    </div>
    </div>
    

<br>
    <h4 align="left">ที่อยู่ผู้ใช้<h4>
    <div class="row">
    <div class="col-4"><input type="text" name="numhome"  class="form-control" placeholder="เลขที่บ้าน" required></div>
    <div class="col"><input type="text" name="province"  class="form-control" placeholder="จังหวัด" required></div>
    <div class="col"><input type="text" name="district"  class="form-control" placeholder="อำเภอ" required></div>
    <div class="col"><input type="text" name="parish"  class="form-control" placeholder="ตำบล" required></div>
  </div>

    <div class="row">
    <div class="col">
    <div class="col-sm-12">
      <input type="text" name="latitude"  class="form-control" placeholder="ละติจูด(latitude)" required>
    </div>
    </div>
    <div class="col">
    <div class="col-sm-12">
      <input type="text" name="longitude"  class="form-control" placeholder="ลองติจูด(Longitude)" required>
    </div>
    </div>
    </div>
    <button type="submit" name="submit"  class="btn btn-Success">สมัคสมาชิก</button>
    <a href="<?php echo site_url('Welcome/page_login'); ?>" class="btn btn-danger">ยกเลิก</a>
  <br><br>
</div>


</form>
</div>

  </div>

</div>




<br>


</body>

</html>


