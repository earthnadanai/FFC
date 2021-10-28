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
    <title>รอการอนุมัติเปิดร้านค้า</title>
</head>
<body>
<h1>Admin</h1>
    <div class="container">
    <div class="row">
    <div class="col-sm-3">
    <div class="card text-white bg-danger">
  <div class="card-body">
    
  <div class="d-grid gap-2">
    
  <a href="<?php echo site_url('Admin/showcustomer_admin'); ?>" class="btn btn-light">ข้อมูลลูกค้า</a>
  <a href="<?php echo site_url('Admin/showshop_admin'); ?>" class="btn btn-light">ข้อมูลร้านค้า</a>
  <a href="<?php echo site_url('Admin/showapproval_shop'); ?>" class="btn btn-light">รอการอนุมัติเปิดร้านค้า</a>
  <a href="<?php echo site_url('Admin/trading_admin'); ?>" class="btn btn-light">อนุมัติการซื้อขาย</a>
  <a href="<?php echo site_url('Admin/refund_admin'); ?>" class="btn btn-light">ขอคืนเงินจากของที่ถูกยกเลิก</a>

  </div>
  </div>
</div>
    </div>
    <div class="col-sm-9">
    <div class="card text-white bg-danger mb-3">
  <div class="card-body" align="center">
    <h1>รอการอนุมัติเปิดร้านค้า</h1>
    
    <br>
    
  

    <table class="table table-hover table-light" >
    <thead>
    <tr>
      <th scope="col"><div align="center">สถานะ</div></th>
      <th scope="col"><div align="center">ชื่อร้าน</div></th>
      <th scope="col"><div align="center">ดูรูปยืนยันบัตร</div> </th>
      <th scope="col"><div align="center">อนุมัติ/ไม่อนุมัติ</div> </th>
    </tr>
  </thead>
 
    
  <tbody>
  <?php foreach ($qu as $x){ ?>
    <tr>

      <td align="center">
      <img src="<?php echo base_url('img'); ?>/<?php echo $x->img_status;?>" style="width: 35px; height: 35px;" alt="..." >
      </td>
      <td align="center"><?php echo $x->nameShop;?></td>
      
      <td align="center"> 
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
ดูรูปยืนยันบัตร
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ดูรูปยืนยันบัตร</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p class="card-text"><h4>  
      <img src="<?php echo base_url('img'); ?>/<?php echo $x->img_id_card_number;?>" style="width: 160px; height: 190px;" alt="..." >
       <br> เลขบัตรประชาชน  : <?php echo $x->id_card_number;?> 
      <br> สถานะ  : <?php echo $x->Waiting_status;?></h4></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</td> 

      <td align="center"> 
      <form action="<?php echo site_url('Admin/ok_shop'); ?>" method="POST">
    <input type="text" name="id" value="<?php echo $x->id; ?>" hidden>
    <input type="submit" class="btn btn-success" name="Waiting_status" value="อนุมัติ">
    <input type="submit" class="btn btn-danger" name="Waiting_status" value="ไม่อนุมัติ"></form>
      </td>

    </tr>
    <?php }; ?>
  </tbody>
  </table>


 
  </div>
</div>
    </div>
  </div>
    </div>
    <br> <br> <br> 
</body>
<br> <br> 
<?php $this->load->view('footer'); ?>
</html>



