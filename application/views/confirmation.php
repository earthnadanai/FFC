<?php defined('BASEPATH') or exit('No direct script access allowed');
      $this->load->view('bootstap');    
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?php echo base_url('public'); ?>/index2.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<div class="bg"> 
<div class="container" align="canter">
  <div class="row">
    <div class="col">
    <br><br><br><br><br><br><br>
    <br><br>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">แจ้งเตือน</h5>
      </div>
      <div class="modal-body">
        <p>ไปที่หน้าเช็ครายการสั่ง</p>
      </div>
      <div class="modal-footer">
      
      <form action="<?= site_url('Order/order_shop');?>" method="post">
      <?php foreach ($Shop as $x){ ?>
<input type="text" name="id" value="<?php echo $x->id_shops; ?>" hidden>
<button type="submit" class="btn btn-primary">ไปที่หน้าเช็ครายการสั่ง</button>
</form> 
      <?php } ?>
      </div>
    </div>
  </div>


</div>
</div>
</div>
<br><br><br><br><br><br><br><br><br>
<br><br><br>
</div>
</body>
</html>