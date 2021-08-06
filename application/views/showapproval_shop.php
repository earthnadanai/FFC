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
      <th scope="col"><div align="center">ชื่อ</div></th>
      <th scope="col"><div align="center">ดูข้อมูลเพื่อตัดสินใจ</div> </th>
    </tr>
  </thead>
 
    
  <tbody>
  <?php foreach ($query as $x){ ?>
    <tr> 
      <td align="center"><?php echo $x->username;?></td>
      
      <td align="center"> 
      <form action="<?php echo site_url('Admin/showapprovalinfo_shop'); ?>" method="POST">
      <input type="text" name="id" value="<?php echo $x->id; ?>" hidden>
      <input type="submit" class="btn btn-primary" name="primary" value="ดูรายละเอียด"></form>
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
    <br> <br> 
</body>
<br> <br> <br> <br> 
<?php $this->load->view('footer'); ?>
</html>



