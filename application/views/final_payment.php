<?php defined('BASEPATH') or exit('No direct script access allowed');
      $this->load->view('bootstap');    
      $this->load->view('navbar.php');  
?>
<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?php echo base_url('public'); ?>/index2.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/lib/w3.css">
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
        <title>pay finish</title>
        </head>

        <body>

<br>
        <div class="container" align="center">
        <div class="card text-dark bg-light mb-3" style="max-width: 90rem; height: 40rem; ">

  <div class="card-body">
    <h5 class="card-title"> <br><br><br><br><img src="../../img/tiktook.jpg" class="w3-hover-opacity" alt="Norway" style="width:25%"> </h5>
    <p class="card-text">
    <p class="w3-xxlarge">ดำเนินการเสร็จสิ้น</p>
    <form action="<?= site_url('Customer/index');?>" method="POST">
    <button type="submit" class="btn btn-secondary btn-lg" name="submit">กลับไปยังหน้าแรก</button>
    </p>
  </div>
</div>
</div>


        </body>


        


<?php $this->load->view('footer');  ?>
</html>
