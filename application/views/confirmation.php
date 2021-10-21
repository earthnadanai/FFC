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
        <h5>กรุณากดปุ่มเพื่อยืนยันการชำระเงิน</h5>
        <p class="text-warning">*กรุณากดปุ่มเพื่อยืนยันการชำระขั้นที่2 ถ้าหากข้ามขั้นตอนนี้อาจชำระเงินไม่สำเร็จ*</p>
      </div>
      <div class="modal-footer">
      
  <form action="<?= site_url('Payment/add_payconn');?>" method="post">
  <?php foreach ($query as $x){ ?>
  <input type="text" name="status_pay" value="ชำระเงินแล้ว " hidden>
  <input type="text" name="id_con" value="<?php echo $x->id_conn?>" hidden>
<button type="submit" class="btn btn-success">ยืนยันการชำระเงิน</button>
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