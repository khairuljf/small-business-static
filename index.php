<!DOCTYPE html>
<html lang="en-US" style="margin-top:0 !important;">
	<head>
		<title>Small project - BeLocal Today</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Company Name &#8211; Just another WordPress site</title>
		
<!-- <style type="text/css">
            img.wp-smiley,
            img.emoji {display: inline !important;border: none !important;box-shadow: none !important;height: 1em !important;width: 1em !important;margin: 0 .07em !important;vertical-align: -0.1em !important;background: none !important;padding: 0 !important;
            }
</style> -->
<link rel='stylesheet' id='style-css'  href='assets/css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='responsive-css'  href='assets/css/responsive.css' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css'  href='assets/css/bootstrap.css' type='text/css' media='all' />
<link rel='stylesheet' id='animate-css'  href='assets/css/animate.css' type='text/css' media='all' />
<link rel='stylesheet' id='custom-css'  href='assets/css/custom.css' type='text/css' media='all' />
<link rel='stylesheet' id='owl.carousel-css'  href='assets/css/owl.carousel.css' type='text/css' media='all' />
<link rel='stylesheet' id='fontawesome-css'  href='assets/css/fontawesome-all.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='unite-gallery-css'  href='assets/css/unite-gallery.css' type='text/css' media='all' />
<link rel='stylesheet' id='ug-theme-default-css'  href='assets/css/ug-theme-default.css' type='text/css' media='all' />
<link rel='stylesheet' id='cssmenu-styles-css'  href='assets/css/cssmenu.css' type='text/css' media='all' />
<link rel='stylesheet' id='wprmenu.css-css'  href='assets/css/wprmenu.css' type='text/css' media='all' />
<link rel='stylesheet' id='drmmenu-css'  href='assets/css/drmmenu.css' type='text/css' media='all' />
<script type='text/javascript' src='assets/js/jquery.js'></script>
<script type='text/javascript' src='assets/js/jquery-migrate.min.js'></script>

<script type="text/javascript">document.documentElement.className += " js";</script>
    
<!-- <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style> -->
<link rel="icon" href="assets/images/belocal.png" sizes="32x32" />
<link rel="icon" href="assets/images/belocal.png" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="assets/images/belocal.png" />
<meta name="msapplication-TileImage" content="assets/images/belocal.png" />

<style type="text/css" title="dynamic-css" class="options-output">
#website-loading{background-color:transparent;}.loading-title{color:#353558;}
.head-section{background-color:#0a0a0a;}
.head-section{padding-top:10px;padding-bottom:10px;}
.banner-sec{background-repeat:no-repeat;background-size:cover;background-position:center center;background-image:url('assets/images/cover2.jpg');}.page-content-section{padding-top:50px;padding-bottom:50px;}
.license-fees-section{background-repeat:no-repeat;background-size:cover;background-position:center center;background-image:url('assets/images/Lessons-BG.jpg');}.footer-bottom{background-color:#000000;}
#copyright{color:#ffffff;}.inner-banner-section{background-repeat:no-repeat;background-size:cover;background-position:center center;background-image:url('assets/images/inner-header-bg.jpg');}
.inner-banner-section h1{color:#ffffff;}
</style>	

</head>
<!-- Mail submit & Report section start-->

<section id="mail-report" >

<?php
        if(isset($_POST['submit'])){
        require 'PHPMailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'talk2twome@gmail.com';
        $mail->Password = '';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->setFrom('info@example.com', 'Neu Website');
        $mail->addReplyTo('info@example.com', 'Neu Website');
        // Add a recipient
        $mail->addAddress('khairuljf@gmail.com');
        // Email subject
        $mail->Subject = 'New Mail from Your Website ';
        // Set email format to HTML
        $mail->isHTML(true);

        $name = $email = $phone = "";

        // Field validator function
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
            }


        $name = test_input($_POST["uname"]);
        $email = test_input($_POST["umail"]);
        $phone = test_input($_POST["uphone"]);
      

        // Email body content
        $mailContent = "<br> Name: " . $name. "<br><br> Phone: " . $phone. "<br><br> Email: " . $email . "<br> ";
        $mail->Body = $mailContent;
        // Send email
        if(!$mail->send()) {
        echo '<div class="alert  alert-danger alert-dismissable text-center" style="background:indianred !important; color:#fff !important; border-radius:0px !important"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Danger!</strong> Message could not be sent. </div>';
        } else {
        
        echo '<div class="alert  alert-success alert-dismissable text-center" style="background:green !important; color:#fff !important; border-radius:0px !important"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong> Your Message has been send. </div>';
        }
        }
        ?>
</section>
    <!-- Mail submit & Report section End-->


    <!-- social menu start -->
    <div class="visible-md visible-lg">
        <div class="top-social">
            <div class="social-top-left">
                <ul>
                    <li><a class="facebook" href="#"><img src="assets/images/facebook-w.png" alt=""></a> </li>
                    <li><a class="twitter" href="#"><img src="assets/images/twitter-w.png" alt=""></a> </li>
                    <li><a href="#"><img src="assets/images/google-review.png" alt=""></a> </li>		
                </ul>
            </div>
        </div>
    </div>

     <!-- social menu End -->


     <!-- Header section start -->
<section id="head-section" class="head-section d-none d-lg-block">
    <div class="container-fluid flex-container"> 
       <div class="row">
            <div class="col-12 col-md-3 col-lg-3">
                    <div class="main-header-logo">
                        <a href='#' >
                            <img   src='assets/images/logo-2.png' alt='imageimageLogo' class="img-fluid mx-auto d-block logo" />    
                        </a>
                    </div> 
            </div>
            <div class="col-12 col-md-7 col-lg-7">
                <div id="main-menu" class="main-menu d-flex justify-content-center align-items-center">
                    <div id="cssmenu" class="menu-primary-container">
                        <ul id="menu-primary" class="menu">
                            <li id="menu-item-9" class="ps2id menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7 current_page_item active">
                                <a href="#" class="js-scroll-trigger"><span>Home</span></a>
                            </li>
                            <li id="menu-item-156" class="menu-item menu-item-type-custom menu-item-object-custom">
                                <a href="#about-us" class="js-scroll-trigger"><span>About Us</span></a>
                            </li>
                            <li id="menu-item-16" class="ps2id menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item active">
                                <a href="#Services" class="js-scroll-trigger"><span>Services</span></a>
                            </li>
                            <li id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom">
                                <a href="#gallery" class="js-scroll-trigger"><span>Gallery</span></a>
                            </li>
                            <li id="menu-item-45" class="menu-item menu-item-type-custom menu-item-object-custom">
                                <a href="#contact" class="js-scroll-trigger"><span>Contact</span></a>
                            </li>
                        </ul>
                    </div>  
                </div> 
            </div>
            <div class="col-xs-12 col-md-2 col-lg-2">
                <div class="media align-items-center top-phone">
                    <img   src='assets/images/menu-bar-call.png' alt='imageHeader Phone Icon' class="mr-3" />                
                    <div class="media-body ">
                        <h5 class="media-heading"> <a href="tel:000 000 000">000 000 000</a> </h5>
                    </div>
                </div>
            </div>      
        </div>
    </div>
</section>

<!-- Header section End -->
  

<!-- Banner section start -->
<section class="banner-sec">
        <div class="mobile-header-logo d-lg-none">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <a href='#' >
                            <img   src='assets/images/logo-2.png' alt='imageimageLogo' class="img-fluid d-block logo" />            
                        </a>             
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- Banner section start -->


<!-- Contact form  start -->
<section id="contact-form-home" class="page-content-section">
    <div class="container">
            <form action="#" method="post">
            <div class="form-row">
                    <div class="col-md-3 col-12  my-2">
                        <input type="text" class="form-control" name="uname" required id="name" placeholder="Name*">   
                    </div>
                    <div class="col-md-3 col-12 my-2">
                        <input type="tel" class="form-control" name="uphone" id="phone" required placeholder="Phone*">
                    </div>
                    <div class="col-md-3 col-12 my-2">
                        <input type="email" class="form-control" name="umail" id="email"  placeholder="Email">
                    </div>
                    <div class="col-4 col-md-3 my-2">
                        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                    </div>
                </div>
            </form>
    </div>
</section>
<!-- Contact form  End -->

<div style="clear: both;"></div>

<!-- About us section start -->
<section class="page-content-section" id="about-us">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-6">
                <img width="1280" height="853" src="assets/images/workplace-1245776_1280.jpg" class="img-fluid mx-auto d-block" alt="imageWorkplace "  />            </div>
            <div class="col-xs-12 col-md-6 col-lg-6 d-flex align-items-center"> 
                <div class="content-body " >
                    <div id="about-content">
                            <h1>Insert text?</h1>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#8217;s standard dummy text ever since the 1500s, when an unknown printe</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#8217;s standard dummy text ever since the 1500s, when an unknown printeLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#8217;s standard dummy text ever since the 1500s, when an unknown printe</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#8217;s standard dummy text ever since the 1500s, when an unknown printe</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#8217;s standard dummy text ever since the 1500s, when an unknown printeLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#8217;s standard dummy text ever since the 1500s, when an unknown printe</p>
                    </div>
                    <a href="#" class="about-button">About Us</a>
                </div>
            </div> 
        </div>
    </div>
</section>


<!-- About us section End -->


<!--service list section start -->
<section id="Services" class="page-content-section license-fees-section">
    <div class="container">
        <div class="row" id="service-lists">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="license-title">
                    <h2>Services</h2>
                </div>
            </div>
                    
                <div class="col-xs-6 col-md-4">
                    <div class="single-service-block" >  
                    <img src="assets/images/3-wide.png" alt="Product 1" class="img-fluid">
                    <div class="text-part">
                        <h4> Product 1</h4>                          
                    </div>
                        <a href="#service-result" class="btn js-scroll-trigger service-read-btn" source="125" id="service-read" style="z-index: 999999;">View Details</a>
                    </div>
                </div>

                <div class="col-xs-6 col-md-4">
                    <div class="single-service-block" >  
                    <img src="assets/images/3-wide.png" alt="Product 2" class="img-fluid">
                    <div class="text-part">
                        <h4> Product 2</h4>                          
                    </div>
                         <a href="#service-result" class="btn js-scroll-trigger service-read-btn" source="71" id="service-read" style="z-index: 999999;">View Details</a>
                    </div>
                </div>

                <div class="col-xs-6 col-md-4">
                    <div class="single-service-block" >  
                    <img src="assets/images/3-wide.png" alt="Product 3" class="img-fluid">
                    <div class="text-part">
                        <h4>Product 3</h4>                          
                    </div>
                         <a href="#service-result" class="btn js-scroll-trigger service-read-btn" source="70" id="service-read" style="z-index: 999999;">View Details</a>
                    </div>
                </div>
  
                <div class="col-xs-6 col-md-4">
                    <div class="single-service-block" >  
                    <img src="assets/images/3-wide.png" alt="Service 1" class="img-fluid">
                    <div class="text-part">
                        <h4>Service 1</h4>                          
                    </div>
                        <a href="#service-result" class="btn js-scroll-trigger service-read-btn" source="126" id="service-read" style="z-index: 999999;">View Details</a>
                    </div>
                </div>

                <div class="col-xs-6 col-md-4">
                    <div class="single-service-block" >  
                    <img src="assets/images/3-wide.png" alt="Service 2" class="img-fluid">
                    <div class="text-part">
                        <h4> Service 2</h4>                          
                    </div>
                        <a href="#service-result" class="btn js-scroll-trigger service-read-btn" source="124" id="service-read" style="z-index: 999999;">View Details</a>
                    </div>
                </div>

                    <div class="col-xs-6 col-md-4">
                        <div class="single-service-block" >  
                        <img src="assets/images/3-wide.png" alt="Service 3" class="img-fluid">
                        <div class="text-part">
                            <h4> Service 3</h4>                          
                        </div>
                            <a href="#service-result" class="btn js-scroll-trigger service-read-btn" source="69" id="service-read" style="z-index: 999999;">View Details</a>
                        </div>
                    </div>

        </div>
    </div>
</section>

<!--service list section End -->


<!-- List item description section -->
<section class="page-content-section free-keys2drive-section">
    <div class="container">
        <div  id="service-result">

            <div class="single-service-item"  target="125" >
                <div class="row " >
                        <div class="col-xs-12 col-md-6 col-lg-6">
                        <div class="free-keys2drive-title">
                            <h2>Product 1</h2>
                        </div>
                        <div class="free-keys2drive-body">
                        <input type="hidden" id="" class="heightSet" value="0">
                            <div class="service-content">
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#8216;Content here, content here&#8217;, making it look like readable English.</p>
                                    <h3>test</h3>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#8216;Content here, content here&#8217;, making it look like readable English.</p>
                                    <p>&nbsp;</p>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#8216;Content here, content here&#8217;, making it look like readable English.</p>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#8216;Content here, content here&#8217;, making it look like readable English.</p>
                            </div>
                            <button class="btn expand-text" targetbtn="125" >Read more</button>
                            
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-6">
                    <img src="assets/images/3-wide.png"  class="img-fluid">
                    </div>
                </div>
            </div>

                        
            <div class="single-service-item"  target="71" >
                <div class="row " >
                        <div class="col-xs-12 col-md-6 col-lg-6">
                        <div class="free-keys2drive-title">
                            <h2>Product 2</h2>
                        </div>
                        <div class="free-keys2drive-body">
                        <input type="hidden" id="" class="heightSet" value="0">
                            <div class="service-content">
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#8216;Content here, content here&#8217;, making it look like readable English. bution of letters, as opposed to using &#8216;Content here, content here&#8217;, making it look like readable ong established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#8216;Content here, content here&#8217;, making it look like readable English. bution of letters, as opposed to using &#8216;Content here, content here&#8217;, making it look like readable ong established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                    <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#8216;Content here, content here&#8217;, making it look like readable English. bution of letters, as opposed to using &#8216;Content here, content here&#8217;, making it look like readableong established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#8216;Content here, content here&#8217;, making it look like readable English. bution of letters, as opposed to using &#8216;Content here, content here&#8217;, making it look like readable</p>
                                                                
                            </div>
                            <button class="btn expand-text" targetbtn="71" >Read more</button>
                            
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-6">
                    <img src="assets/images/3-wide.png"  class="img-fluid">
                    </div>
                </div>
            </div>

                        
            <div class="single-service-item"  target="70" >
                <div class="row " >
                        <div class="col-xs-12 col-md-6 col-lg-6">
                        <div class="free-keys2drive-title">
                            <h2>Product 3</h2>
                        </div>
                        <div class="free-keys2drive-body">
                        <input type="hidden" id="" class="heightSet" value="0">
                            <div class="service-content">
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#8216;Content here, content here&#8217;, making it look like readable English. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#8216;Content here, content here&#8217;, making it look like readable English.</p>
                            </div>
                            <button class="btn expand-text" targetbtn="70" >Read more</button>
                            
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-6">
                    <img src="assets/images/3-wide.png"  class="img-fluid">
                    </div>
                </div>
            </div>

                        
            <div class="single-service-item"  target="126" >
                <div class="row " >
                        <div class="col-xs-12 col-md-6 col-lg-6">
                        <div class="free-keys2drive-title">
                            <h2>Service 1</h2>
                        </div>
                        <div class="free-keys2drive-body">
                        <input type="hidden" id="" class="heightSet" value="0">
                            <div class="service-content">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#8216;Content here, content here&#8217;, making it look like readable English.</p>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#8216;Content here, content here&#8217;, making it look like readable English.</p>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#8216;Content here, content here&#8217;, making it look like readable English.</p>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#8216;Content here, content here&#8217;, making it look like readable English.</p>
                                <p>distribution of letters, as opposed to using &#8216;Content here, content here&#8217;, making it look like readable English.</p>
                                <p>distribution of letters, as opposed to using &#8216;Content here, content here&#8217;, making it look like readable English.</p>
                                <p>distribution of letters, as opposed to using &#8216;Content here, content here&#8217;, making it look like readable English.</p>
                            </div>
                            <button class="btn expand-text" targetbtn="126" >Read more</button> 
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-6">
                    <img src="assets/images/3-wide.png"  class="img-fluid">
                    </div>
                </div>
            </div>

                        
            <div class="single-service-item"  target="124" >
                <div class="row " >
                        <div class="col-xs-12 col-md-6 col-lg-6">
                        <div class="free-keys2drive-title">
                            <h2>Service 2</h2>
                        </div>
                        <div class="free-keys2drive-body">
                        <input type="hidden" id="" class="heightSet" value="0">
                            <div class="service-content">
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#8216;Content here, content here&#8217;, making it look like readable English.</p>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#8216;Content here, content here&#8217;, making it look like readable English.</p>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#8216;Content here, content here&#8217;, making it look like readable English.</p>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#8216;Content here, content here&#8217;, making it look like readable English.</p>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#8216;Content here, content here&#8217;, making it look like readable English.</p>
                                    <p>distribution of letters, as opposed to using &#8216;Content here, content here&#8217;, making it look like readable English.</p>
                            </div>
                            <button class="btn expand-text" targetbtn="124" >Read more</button>
                            
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-6">
                    <img src="assets/images/3-wide.png"  class="img-fluid">
                    </div>
                </div>
            </div>

                        
            <div class="single-service-item"  target="69" >
                <div class="row " >
                        <div class="col-xs-12 col-md-6 col-lg-6">
                        <div class="free-keys2drive-title">
                            <h2>Service 3</h2>
                        </div>
                        <div class="free-keys2drive-body">
                        <input type="hidden" id="" class="heightSet" value="0">
                            <div class="service-content">
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#8216;Content here, content here&#8217;, making it look like readable English.</p>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#8216;Content here, content here&#8217;, making it look like readable English.</p>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#8216;Content here, content here&#8217;, making it look like readable English.</p>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#8216;Content here, content here&#8217;, making it look like readable English.</p>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#8216;Content here, content here&#8217;, making it look like readable English.</p>
                            </div>
                            <button class="btn expand-text" targetbtn="69" >Read more</button>
                            
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-6">
                    <img src="assets/images/3-wide.png"  class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>
<!-- List item description section end -->
<!-- Extra empty section optional -->
<section class="page-content-section vechicle-info-section">
    <div class="container-fluid flex-container-150">
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-6">
                <div class="int-over-drivers">
                    <h2></h2>      
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-6">
                <div class="instructors">
                    <h2></h2>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Extra empty section optional end -->


<!-- Gallery section -->
<section id="gallery" class="page-content-section">
    <div class="container">
        <div class="row">                                       
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="gallery-body">
                   <h1>Gallery</h1>
                </div>
					<!-- START UNITE GALLERY LITE 1.7.51 -->
			<div id='unitegallery_1_1' class='unite-gallery' style='margin:0px auto;'>
				
                <img alt="image3"
                        src="" data-image="assets/images/3-3.png"
                        data-thumb="assets/images/3-3.png"
                        title=""
                        style="display:none">

                <img alt="image3"
                        src="" data-image="assets/images/3-3.png"
                        data-thumb="assets/images/3-3.png"
                        title=""
                        style="display:none">

                <img alt="image3"
                        src="" data-image="assets/images/3-3.png"
                        data-thumb="assets/images/3-3.png"
                        title=""
                        style="display:none">

                <img alt="image3"
                        src="" data-image="assets/images/3-3.png"
                        data-thumb="assets/images/3-3.png"
                        title=""
                        style="display:none">

                <img alt="image3"
                        src="" data-image="assets/images/3-3.png"
                        data-thumb="assets/images/3-3.png"
                        title=""
                        style="display:none">

                <img alt="image3"
                        src="" data-image="assets/images/3-3.png"
                        data-thumb="assets/images/3-3.png"
                        title=""
                        style="display:none">
			</div>

			<script type='text/javascript'>
				window.onload = function(e) {
					if(typeof ugCheckForErrors == "undefined"){
						document.getElementById("unitegallery_1_1").innerHTML = "<span style='color:red'>Unite Gallery Error - gallery js and css files not included in the footer. Please make sure that wp_footer() function is added to your theme.</span>";}
					else{ ugCheckForErrors("unitegallery_1_1", "jquery");}
				};
			</script>

			<!-- END UNITEGALLERY LITE--> 
            </div>
        </div>
    </div>
</section>
<!-- Gallery section End-->


<!-- Success stories section-->
<section id="success-storiess" class="page-content-section">
    <div class="container">
        <div class="row">                                       
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="gallery-body">
                    <h1>success stories</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Success stories section End-->

<!-- Contact information section start-->
<section id="contact" class="footer-contact page-content-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="footer-info d-flex justify-content-center align-items-center flex-column pl-3 pr-3">
                    <img   src='assets/images/Location.png' alt='imageLocation' class="img-fluid mx-auto d-block logo" />                 
                    <p>Unit 00, Block 99
                        00 Bundall Road, Bundall. QLD 4999</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="footer-info d-flex justify-content-center align-items-center flex-column pl-3 pr-3">
                    <img   src='assets/images/info-call.png' alt='imageInfo Call' class="img-fluid mx-auto d-block logo" />                
                    <a class="footer-phone" href="tel:000 000 000">000 000 000</a>
                    <a class="footer-mail" href="mailto:dummy@dummy.com">dummy@dummy.com</a>
                </div>
            </div>   
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="footer-info d-flex justify-content-center align-items-center flex-column pl-3 pr-3">
                    <img   src='assets/images/alarm.png' alt='imageAlarm' class="img-fluid mx-auto d-block alarm" />                 
                    <p>Mon - Fri........9:00am - 5:00pm
                         Sat - Sun........Closed</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="footer-info">
                    <img   src='assets/images/maps-bg.png' alt='imageMaps' class="img-fluid mx-auto d-block map" />            
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact information section End-->


<!-- footer section start -->
<footer>
    <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-8 col-lg-8 align-items-center">
                        <p id="copyright" class=""> &copy
                        2019 Company Name. All Rights Reserved. <img   src='assets/images/belocal.png' alt='imageDriving School  | Gold Coast | E-Z L2P Driver Training | Belocal'  /> Digital Transformation by <a style="color: #eeee22;" href="http://belocal.today/" target="_blank">BeLocal Today</a>
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="social d-flex align-items-center justify-content-end">
                            <div class="pl-2 pr-2">
                                <a target="_blank" href="#" class="facebook">
                                    <img   src='assets/images/facebook.png' alt='imageFacebook' class="img-fluid mx-auto d-block" />      
                                 </a>
                            </div>
                            <div class="pl-2 pr-2">
                                <a target="_blank" href="#" class="twitter">
                                    <img   src='assets/images/twitter.png' alt='imageTwitter' class="img-fluid mx-auto d-block" />       
                                </a>
                            </div>
                            <div class="pl-2 pr-2">
                                <a target="_blank" href="#">
                                    <img   src='assets/images/google-review.png' alt='imageGoogle Review' class="img-responsive google-review" />  
                                </a>
                            </div>
                        </div>                    
                    </div>
                </div>
            </div>
    </div>
</footer>
<!-- footer section End -->



    <style type="text/css">
        .totop { position: fixed; bottom: 18px; right: 15px; cursor: pointer; background: #a05b7e; color: #fff; border-radius: 25px; height: 45px; line-height: 45px; padding: 0 18px; font-size: 18px; opacity: 0.5; -webkit-transition: .3s opacity ease-in-out; transition: .3s opacity ease-in-out;  }
        .totop:hover { opacity: 1;-webkit-transition: .5s opacity ease-in-out;transition: .5s opacity ease-in-out;text-decoration: none; }
        .totop:focus { outline: 0; }
        .totop span.glyphicon.glyphicon-menu-up { vertical-align: middle; }
    </style>
    <script type="text/javascript">
        jQuery(document).ready(function(a){ var e=function(){a("html, body").animate({scrollTop:0},1E3);return!1};a.fn.tottTop=function(f){var b=a.extend({scrollTop:800,duration:1E3,scrtollTopBtnDuration:400},f);return this.each(function(){var c=a(this),d=a(window);d.scroll(function(){d.scrollTop()>b.scrollTop?c.fadeIn(b.scrtollTopBtnDuration):c.fadeOut(b.scrtollTopBtnDuration)});c.click(e) })}});
        jQuery(document).ready(function($) { $('.totop').tottTop({ scrollTop: 200 }); });
    </script>
    <div class="totop"><i class="fas fa-angle-double-up"></i></div>
        <script type='text/javascript' src='assets/js/jquery.sticky.js'></script>
        <script type="text/javascript">
            jQuery(document).ready(function($){ $("#head-section").sticky({ topSpacing:0, zIndex:9 }); });
        </script>
    <style>
        .dumketo-bottom { position: fixed; bottom: 0; left: 0; right: 0; z-index: 7777; height: auto;line-height: 1.4;text-align: center; }
        a.drm-phone, a.drm-email{ font-size: 20px; padding: 8px 0; color: #fff; font-weight: 400; display: block; transition: 0.2s; -webkit-transition: 0.2s;background: #f2151e; }
        a.drm-phone{ border-right: 2px solid; }
        a.drm-phone:hover, a.drm-email:hover, a.drm-phone:focus, a.drm-email:focus { text-decoration:none; }
        @media all and (min-width:0) and (max-width:768px) {
            .footer-bottom { padding-bottom: 60px !important; }
        }
    </style>
    <div class="dumketo-bottom row justify-content-center align-items-center d-lg-none">
        <div class="col-6 pr-0" id="phone"><a class="drm-phone" href="tel:000 000 000">Call</a></div>
        <div class="col-6 pl-0" id="email"> <a class="drm-email" href="mailto:dummy@dummy.com"> Email </a> </div>
    </div>
    <div class="dumketo-bottom row justify-content-center align-items-center d-lg-none">
        <div class="col-6 pr-0" id="phone"><a class="drm-phone" href="tel:000 000 000">Call</a></div>
        <div class="col-6 pl-0" id="email"> <a class="drm-email" href="mailto:dummy@dummy.com"> Email </a> </div>
    </div>
	<link rel='stylesheet' id='unite-gallery-css-css'  href='assets/css/unite-gallery.css' type='text/css' media='all' />
<!-- <script type='text/javascript'>
/* <![CDATA[ */
var mPS2id_params = {"instances":{"mPS2id_instance_0":{"selector":"a[rel='m_PageScroll2id']","autoSelectorMenuLinks":"true","scrollSpeed":1000,"autoScrollSpeed":"true","scrollEasing":"easeInOutQuint","scrollingEasing":"easeOutQuint","pageEndSmoothScroll":"true","stopScrollOnUserAction":"false","autoCorrectScroll":"false","layout":"vertical","offset":0,"highlightSelector":"","clickedClass":"mPS2id-clicked","targetClass":"mPS2id-target","highlightClass":"mPS2id-highlight","forceSingleHighlight":"false","keepHighlightUntilNext":"false","highlightByNextTarget":"false","appendHash":"false","scrollToHash":"true","scrollToHashForAll":"true","scrollToHashDelay":0,"scrollToHashUseElementData":"true","scrollToHashRemoveUrlHash":"false","disablePluginBelow":0,"adminDisplayWidgetsId":"true","adminTinyMCEbuttons":"true","unbindUnrelatedClickEvents":"false","normalizeAnchorPointTargets":"false"}},"total_instances":"1","shortcode_class":"_ps2id"};
/* ]]> */
</script> -->

<script type='text/javascript' src='assets/js/bootstrap.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js'></script>
<script type='text/javascript' src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script type='text/javascript' src='assets/js/jquery.scrollReveal.min.js'></script>
<script type='text/javascript' src='assets/js/owl.carousel.js'></script>
<script type='text/javascript' src='assets/js/unitegallery.js'></script>
<script type='text/javascript' src='assets/js/ug-theme-default.js'></script>
<script type='text/javascript' src='assets/js/ug-theme-tiles.js'></script>
<script type='text/javascript' src='assets/js/ug-theme-tilesgrid.js'></script>
<script type='text/javascript' src='assets/js/custom.js'></script>
<script type='text/javascript' src='assets/js/jquery.transit.min.js'></script>
<script type='text/javascript' src='assets/js/jquery.sidr.js'></script>

<script type='text/javascript'>
/* <![CDATA[ */
var wprmenu = {"zooming":null,"from_width":null,"swipe":null};
/* ]]> */
</script>
<script type='text/javascript' src='assets/js/wprmenu.js'></script>

<script type='text/javascript'>
    var ugapi1;
    jQuery(document).ready(function(){
        var objUGParams = {
            gallery_theme:"tilesgrid",
                    gallery_width:"100%",
                    load_api_externally:true,
                    tile_width:350,
                    tile_height:300,
                    tile_enable_background:false,
                    tile_enable_border:false,
                    tile_enable_shadow:false,
                    tile_overlay_opacity:0.7,
                    tile_overlay_color:"#fff203",
                    tile_textpanel_bg_opacity:0,
                    tile_textpanel_title_font_size:0,
                    tile_textpanel_title_bold:false

        };
        if(ugCheckForErrors('#unitegallery_1_1', 'cms'))
            ugapi1 = jQuery('#unitegallery_1_1').unitegallery(objUGParams);
    });
</script>

<script type="text/javascript">
    jQuery(document).ready(function(){
                                    jQuery('.navigation').find('ul.nav-dropdown').each(function() {
                var sub_ul = jQuery(this),
                parent_a = sub_ul.prev('a'),
                parent_li = parent_a.parent('li').first();
                parent_li.addClass('nav-drop');
                var expand = parent_a.before('<span class="drm-drop-icon"></span> ');
                sub_ul.hide();
            });
            jQuery('.navigation ul li span:not(:only-child)').click(function(e) {
                jQuery(this).siblings('.nav-dropdown').toggle();
                // Close one dropdown when selecting another
                jQuery('.nav-dropdown').not(jQuery(this).siblings()).hide();
                e.stopPropagation();
            });
            jQuery(".hamburger").click(function(){
                jQuery(this).toggleClass("is-active");
                jQuery(this).parent().next().toggleClass("nav-is-active");
            });
        
    }); 
</script>

<div id="mobile-3" class="mobile-wrap">
    <div class="header-wrap" >
        <div class="brand">
            <a href='#' >
                <img   src='assets/images/logo-2.png' alt='imageimageLogo' class="img-fluid d-block mobile-logo" />   
            </a>
        </div>
                            
        <div class="hamburger" id="hamburger-1" style="width: 30%">
            <div class="navtext">
                                        </div>
            <div class="line-head">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>
    </div>
    <div class="navigation">
        <ul id="menu-mobile" class="menu">
            <li id="menu-item-51" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7 current_page_item menu-item-51">
                <a href="#">Home</a>
            </li>
            <li id="menu-item-161" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-161">
                <a href="#about-us">About Us</a>
            </li>
            <li id="menu-item-162" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-162">
                <a href="#Services">Services</a>
            </li>
            <li id="menu-item-163" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-163">
                <a href="#gallery">Gallery</a>
            </li>
            <li id="menu-item-164" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-164">
                <a href="#contact">Contact</a>
            </li>
        </ul> 
    </div>
</div>
		