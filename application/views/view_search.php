<?php defined('BASEPATH') or exit('No direct script access allowed');
      $this->load->view('bootstap');    
      $this->load->view('navbar.php');  
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Welcome to FFC</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?php echo base_url('public'); ?>/index.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">

    </head>
<body>
  
    <div class="card bg-dark text-white" >
        <img src="../../img/tum-yum-goong-005.jpg" width="1000" height="700" class="card-img" alt="...">
        <div class="card-img-overlay" >
            <br><br><br><br><br><br><br><br><br> 
          <h1 class="card-title">ยินดีต้อนรับเข้าสู่</h1>
          <h3 class="card-title2">FOOD FOR CATERING</h3>

          <form method="post" action="<?php echo site_url('Welcome/search'); ?>" >
        <div class="row" >
        <div class="col-3">
        </div>
            <div class="col-5" >
                <input  class="form-control" type="text" placeholder="ค้นหาร้านอาหาร ประเภทอาหาร อาหาร" name="search" />
        </div>
            <div class="col-4" >
                <input type="submit" class="btn btn-block btn-primary" style="width:100px" name="submit" value="ค้นหา">
        </div>
        
        </div>
    </form>

        </div>
      
    </div>
    <br><br>
    <div class="container">
    <div class="ex1">ค้นหาร้าน</div><br>
  <div class="row">
  
    <div class="col-sm-4" align="center">

    <form action="<?= site_url('...');?>" method="POST">
    <div class="card" style="width: 23rem;" >
    <img src="..รูป."  alt="..รูป." >
  <div class="card-body">
    <h5 class="card-title">
    
    <input type="submit" class="btn btn-lg btn-link-dark" value="..ชื่อร้าน."></h5>
    
      <input type="text" name="id" value="..." hidden>
      <input type="submit" class="btn btn-primary" name="primary" value="ดูรายละเอียด">  
  </div>
</div>
    </div> 
    </form> 
 
    </div>

      
    
      
    
    
    </div>
    <br>
    </div>



</div> 
<br>
      
</body>
<?php $this->load->view('footer');  ?>
</html>