<?php include 'session.php'; ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Avodoc</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/logo3.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesoeet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo"><a href="index.html"><img style = "width: 20% !important;" src="images/avodoc-high-resolution-logo-color-on-transparent-background (2).png"></a></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
               <div class="navbar-nav">
                  <a class="nav-item nav-link" href="index.php">Home</a>
                  
               </div>
            </div>
            <div class="login_menu">
               <ul>
                  <li><a class="text-capitalize" href="#"><?php echo $farmer['username']; ?></a></li>
                  <li><a href="#"><img src="images/search-icon.png"></a></li>
                  <li><a href="logout.php">LOG OUT</a></li>
               </ul>
            </div>
         </nav>
         <!-- banner section end -->
         <div class="banner_section layout_padding">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-6">
                            <h1 class="banner_taital">AVOCADO DISEASE DETECTION<br> <span style="color: #fff;">using CNN</span></h1>
                              <div class="read_bt"><a href="#"></a></div>
                           </div>
                           <div class="col-md-6">
                              <div><img src="images/img-1.png" class="image_1"></div>
                           </div>
                        </div>
                        <div class="custum_menu">
                           <ul>
                              <li class="active"><a href="index.html">Home</a></li>
                              
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-6">
                            <h1 class="banner_taital">AVOCADO DISEASE DETECTION<br> <span style="color: #fff;">using CNN</span></h1>
                              
                           </div>
                           <div class="col-md-6">
                              <div><img src="images/img-1.png" class="image_1"></div>
                           </div>
                        </div>
                        <div class="custum_menu">
                           <ul>
                              <li class="active"><a href="index.html">Home</a></li>
                              
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-6">
                              <h1 class="banner_taital">AVOCADO DISEASE DETECTION<br> <span style="color: #fff;">using CNN</span></h1>
                              <p class="banner_text"></p>
                              <div class="read_bt"><a href="#"></a></div>
                           </div>
                           <div class="col-md-6">
                              <div><img src="images/img-1.png" class="image_1"></div>
                           </div>
                        </div>
                        <div class="custum_menu">
                           <ul>
                              <li class="active"><a href="index.html">Home</a></li>
                              
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- header section end -->
     
         <!-- contact section start -->  
         <div class="contact_section layout_padding">
            <div class="container">
               <h1 class="contact_text">Contact us</h1>
            </div>
         </div>
         <div class="contact_section_2 layout_padding">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-6">
                     <div class="mail_main">
                        <form action="/action_page.php">
                           <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Name" name="Name">
                           </div>
                           <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Email" name="Email">
                           </div>
                           <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Subject" name="Email">
                           </div>
                           <div class="form-group">
                              <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="text"></textarea>
                           </div>
                        </form>
                        <div class="send_btn">
                           <div class="main_bt"><a href="#">Send</a></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div><img src="images/img-13.png" class="image_13"></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- contact section end --> 
      </div>
      <!-- client section end --> 
      <!-- footer section start --> 
      <div class="footer_section layout_padding">
        <div class="container">
           <div class="row">
              <div class="col-lg-3 col-sm-6">
                 <h2 class="useful_text">About</h2>
                 <p class="ipsum_text">Avodoc</p>
              </div>
              <div class="col-lg-3 col-sm-6">
                 <h2 class="useful_text"></h2>
                 <div class="footer_links">
                    <ul>
                       
                    </ul>
                 </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                 <h2 class="useful_text"></h2>
                 <div class="footer_links">
                    <ul>
                       
                    </ul>
                 </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                 <h2 class="useful_text">contact us</h2>
                 <div class="addres_link">
                    <ul>
                       <li><a href="#"><img src="images/map-icon.png"><span class="padding_left_10">Strathmore University</span></a></li>
                       <li><a href="#"><img src="images/call-icon.png"><span class="padding_left_10">+254769471119</span></a></li>
                       <li><a href="#"><img src="images/mail-icon.png"><span class="padding_left_10">ivanmugunga123@gmail.com</span></a></li>
                    </ul>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <!-- footer section end -->  
     <!-- copyright section start -->
     <div class="copyright_section">
        <div class="container">
           <p class="copyright_text">136030 | Ivan Mugunga</p>
        </div>
     </div>
     <!-- copyright section end -->    
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
            });
            
      </script>
   </body>
</html>