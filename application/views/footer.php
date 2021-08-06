<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Footer with Social icons</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url('public'); ?>/Ft.css">
</head>
<body>



    <footer class="new_footer_area bg_color">
        <div class="new_footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">Food For Catering</h3>
                            <center><a href="#"><img src="../../img/LOGOFFS.png"width="80"height="80"></a></center>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">ศูนย์ช่วยเหลือ</h3>
                            <ul class="list-unstyled f_list">
                                <li><a href="<?php echo site_url('Welcome/how_to_order'); ?>">สั่งสินค้าอย่างไร</a></li>
                                <li><a href="<?php echo site_url('Welcome/how_to_sell'); ?>">เริ่มขายสินค้าอย่างไร</a></li>
                                <li><a href="<?php echo site_url('Welcome/how_to_pay'); ?>">ช่องทางการชำระเงินใน FFC</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">ติดต่อเรา</h3>
                            <ul class="list-unstyled f_list">
                                <a href="#"><img src="../../img/gmail.png"width="25"height="25"></a>
                                <a href="#"><img src="../../img/facebook.png"width="25"height="25"></a>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">ช่องทางการจ่ายเงิน</h3>
                            <div class="f_social_icon">
                                <a href="#" ><img src="../../img/กรุงไทย.png"width="30"height="30"></a>
                                <a href="#" ><img src="../../img/SCB.png"width="30"height="30"></a>
                                <a href="#" ><img src="../../img/กรุงศรี.png"width="30"height="30"></a>
                                <a href="#" ><img src="../../img/kbank-icon.png"width="30"height="30"></a>
                                <a href="#" ><img src="../../img/ธนาคารกรุงเทพ.png"width="30"height="30"></a>
                                <a href="#" ><img src="../../img/ออมสิน.png"width="30"height="30"></a>
                                <a href="#" ><img src="../../img/TMRW.png"width="30"height="30"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bg">
                <div class="footer_bg_one"></div>
                <div class="footer_bg_two"></div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-7">
                        <p class="mb-0 f_400">Nakhon Pathom Rajabhat University</p>
                    </div>
                    <div class="col-lg-6 col-sm-5 text-right">
                        <p>Made with <i class="icon_heart"></i> in <a href="<?php echo site_url('Welcome/team_bdep'); ?>">BDEP Team</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  
  
  </body>
</html>