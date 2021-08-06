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

<h1 class="h1xd">ช่องทางที่สามารถชำระเงินได้</h1>


    <br>
    
    <div class="container">
  <div class="row">
    <h4>ธนาคารที่สามารถชำระเงินได้</h4>
    <br><br>
    <div class="cardBK1" style="width: 8rem;">
    <img src="../../img/กรุงไทย.png" class="card-img-top" alt="...">
    </div>
    <div class="cardBK2" style="width: 8rem;">
    <img src="../../img/SCB.png" class="card-img-top" alt="...">
    </div>
    <div class="cardBK3" style="width: 8rem;">
    <img src="../../img/กรุงศรี.png" class="card-img-top" alt="...">
    </div>
    <div class="cardBK4" style="width: 8rem;">
    <img src="../../img/kbank-icon.png" class="card-img-top" alt="...">
    </div>
    <div class="cardBK5" style="width: 8rem;">
    <img src="../../img/ธนาคารกรุงเทพ.png" class="card-img-top" alt="...">
    </div>
    <div class="cardBK6" style="width: 7rem;">
    <img src="../../img/ออมสิน.png" class="card-img-top" alt="...">
    </div>
    <div class="cardBK7" style="width: 8rem;">
    <img src="../../img/TMRW.png" class="card-img-top" alt="...">
    </div>

  </div>
</div>
    <br><br><br>
   <center><h1 class="h1xd">*ขณะนี้ยังไม่สามารถจ่ายปลายทางได้</h1></center>
    <br><br>


</div>






</body>
<?php $this->load->view('footer'); ?>
</html>