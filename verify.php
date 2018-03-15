<!DOCTYPE html>

<html>

<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">

<!-- META -->
<meta name="viewport" content="width=device-width, user-scalable=no">

<title>Precision Eye Services - A Better Way to Outsource</title>

<!-- CSS LIBS -->
<link href='css/style.css' rel='stylesheet' type="text/css">
<link href='css/animate.css' rel='stylesheet' type="text/css">
<link href='css/custom.css' rel='stylesheet' type="text/css">
<link href='css/grid.css' rel='stylesheet' type="text/css">
<link href='css/icons.css' rel='stylesheet' type="text/css">
<!--<link href='css/jpreloader.css' rel='stylesheet' type="text/css">-->
<link href='css/jquery-ui.css' rel='stylesheet' type="text/css">
<link href='css/jquery.fancybox.css' rel='stylesheet' type="text/css">
<link href='css/lightbox.css' rel='stylesheet' type="text/css">
<link href='css/owl.carousel.css' rel='stylesheet' type="text/css">
<link href='css/owl.transitions.css' rel='stylesheet' type="text/css">
<link href='css/responsive.css' rel='stylesheet' type="text/css">
<link href='css/YTPlayer.css' rel='stylesheet' type="text/css">

<!-- GOOGLE FONTS -->
<link href='https://fonts.googleapis.com/css?family=Lato:400,700,300' rel='stylesheet' type='text/css'>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55835002-1', 'auto');
  ga('send', 'pageview');

</script>

</head>

<body><!-- // HEADER -->
 
    <div id="wrap">
    
    	<header class="transit header-clear">
    	
    	    
    	
    	
    	    <nav class="main-menu">
    	        	            
    	        	        <ul>
    	        	            <li class="menu-item-parent"><a href="index.html">home</a>
    	        	            	
    	        	            </li>
    	        	           
    	        	           	<li class="menu-item-parent"><a href="advanced.html">Advanced Services</a>
    	        	           		
    	        	           	</li>
    	        	           
    	        	            <li class="menu-item-parent"><a href="premium.html">Premium Services</a>
    	        	            	
    	        	            </li>

    	        	            <li class="menu-item-parent"><a href="about.html">About Us</a>
    	        	            	
    	        	            </li>
    	        	            <!--<li class="menu-item-parent"><a href="item-full.html">About Us</a>
    	        	            	
    	        	            </li>-->
    	        	            <li class="menu-item-parent"><a href="contact.html">Contact</a>
    	        	            	
    	        	            </li>
    	        	            
    	        	</ul>
    	        	        
    	        	    </nav>
    	        	    
    	        	    <div id="quick-icons">
    	        	    	
    	        	    	<ul class="switch-menu">
    	        	            <!--<li class="open-menu"><i class="icon-menu"></i></li>-->
    	        	            <li class="open-menu">MENU</li>
    	        	        </ul>
    	        	       
    	        	        
    	        	        <div class="clear"></div>
    	        	        
    	        	    </div>
    	        	    
    	        	    <div class="clear"></div>
    	        	    
    	        	</header>
    	    
    	    <nav id="mobile-menu">
    	                
    	        <ul>
    	                    <li class="menu-item-parent"><a href="index.html">home</a>
    	                    	
    	                    </li>
    	                    
    	                    <li class="menu-item-parent"><a href="advanced.html">Advanced Services</a>
    	                    	
    	                    </li>
    	                    
    	                    <li class="menu-item-parent"><a href="premium.html">Premium Services</a>
    	                    	
    	                    </li>

    	                    <li class="menu-item-parent"><a href="about.html">About Us</a>
    	                    	
    	                    </li>
    	                    <!--<li class="menu-item-parent"><a href="item-full.html">About Us</a>
    	                    	
    	                    </li>-->
    	                    <li class="menu-item-parent"><a href="contact.html">Contact</a>
    	                    	
    	                    </li>
    	                    
    	        </ul>
    	            
    	    </nav><!-- // MENU / LOGO -->
    	        
    	<div id="introC" class="section">

    <div class="parallaxH dotted" style="background-image: url('images/premium_bg.jpg')"></div>
   
    <div class="prem-message">
    	
    	<div class="prem-bod">
    	
    	 	<h2>Contact Us</h2>
    	 	<div id="addr">
    	 	5775 WEST OLD SHAKOPEE ROAD, SUITE 80<br/>
    	 	BLOOMINGTON, MN 55437<br/>
    	 	952-426-7000<br/>
    	 	844-426-3937 (EYES)<br/>
    	 	</div>
    	 	 <form method="post" class="contact-form">

								<?php
								
								  
								    require_once 'mail/PHPMailerAutoload.php';
								     
								    $results_messages = array();
								     
								    $mail = new PHPMailer(true);
								    $mail->CharSet = 'utf-8';
								     
								    class phpmailerAppException extends phpmailerException {}
								     
								    try {
								    //$to = 'les@get2square1.com';
								    $to = "info@precisioneye.net";
								    if(!PHPMailer::validateAddress($to)) {
								      throw new phpmailerAppException("Email address " . $to . " is invalid -- aborting!");
								    }
								    $mail->isSMTP();
//								    $mail->SMTPDebug  = 2;
								    $mail->Host       = "smtp.gmail.com";
								    $mail->Port       = "587";
								    $mail->SMTPSecure = "tls";
								    $mail->SMTPAuth   = true;
								    $mail->Username   = "info.precisioneye@gmail.com";
								    $mail->Password   = "gosquared";
								    $mail->From       = "info@precisioneye.net";
								    $mail->FromName   = "Precision Eye Services Website";
								    $mail->addAddress("info@precisioneye.net", "Precision Eye Services Admin");
								    $mail->Subject  = "Contact Form from Precision Eye Services";
								    
								    $frm_name = stripcslashes($_POST['name']);
								    $frm_pname = stripcslashes($_POST['pname']);
								    $frm_email = stripcslashes($_POST['email']);
								    $frm_phone = stripcslashes($_POST['phone']);
								    $frm_message = stripcslashes($_POST['message']);
								    $frm_contact = isset($_POST['contact']);
								    $frm_subscribe = isset($_POST['subscribe']);
								    
								    
								    
								    $body = "Name: $frm_name\r\n<br/>Practice Name: $frm_pname\r\n<br/>Email: $frm_email\r\n<br/>Phone: $frm_phone\r\n<br/><br/>Message: $frm_message\r\n<br/><br/>Contact: $frm_contact\r\n<br/>Subscribe: $frm_subscribe";
								    
								    $mail->WordWrap = 80;
								    $mail->msgHTML($body, dirname(__FILE__), true); //Create message bodies and embed images
								     
								    try {
								      $mail->send();
								      $results_messages[] = "Thank you, your message has been sent.";
								    }
								    catch (phpmailerException $e) {
								      throw new phpmailerAppException('Unable to send to: ' . $to. ': '.$e->getMessage());
								    }
								    }
								    catch (phpmailerAppException $e) {
								      
							
								    }
								     
								    if (count($results_messages) > 0) {
//								      echo "<h2>Run results</h2>\n";
								      echo "<ul>\n";
								    foreach ($results_messages as $result) {
								      echo "<h3>$result</h3>\n";
								    }
								    echo "</ul>\n";
								    }
								  
								  ?>
 </form>
     	 </div>
     </div> 
     
      
      <!--<div class="btn-down brd-fs-clr-hov brd-wh-clr transit-bouncein" data-delay="2000" data-appear="false" data-scrollto="#services">
 		<i class="icon-arrow-down"></i>
 	</div>-->
 
 </div><!-- // INTRO -->
         
         <!--<div id="services" class="section">
         
     <div class="header-section padd-y-75">
        
         <div class="title-section padd-x-25 nd-clr transit-words">SET A NEW STANDARD OF EXCELLENCE</div>
         <div class="subtitle-section padd-x-25 transit-top">Precision Eye Services affordably delivers the most advanced refractive cataract technology to your door, when you need it. With our Pathway to Excellence Program, there’s virtually nothing stopping you from setting a new standard of excellence for your practice and your patients.</strong><br /><br />
         <button class="lrn_mre" href-"premium.html">Learn about our premium services</button>
         <button class="lrn_mre" href-"standard.html">Learn about our standard services</button>
 			</div>
         
     </div>
     
     
 
 </div>--><!-- // SERVICES -->
                                     	
         
         
         <!-- end section--><!-- // BG VIDEO -->  
         
         
         
         <!-- // COUNTERS -->
                         
         <!-- // BLOG -->
         
         <!--<div class="callout section">
     
     <div class="parallax">
     
         <div class="callout-layer padd-y-100">
         
             <div class="callout-content padd-x-25">
                                 
                 <div class="callout-title marg-bott-25 nd-clr transit-words">Total Support Theme</div>
                 <div class="callout-exc marg-bott-25"><strong>Lorem ipsum</strong> dolor sit amet, <strong>consectetur</strong> adipiscing elit.<br>
                     Donec lacinia, turpis nec convallis volutpat, velit lacus consectetur nulla, viverra condimentum elit enim laoreet elit.</div>
                     
                 <div class="callout-icons">
                 	<ul>
                     	<li class="transit-top bg-fs-clr bg-nd-clr-hov" data-delay="0"><i class="icon-eye"></i></li>
                     	<li class="transit-top bg-fs-clr bg-nd-clr-hov" data-delay="250"><i class="icon-help"></i></li>
                     	<li class="transit-top bg-fs-clr bg-nd-clr-hov" data-delay="500"><i class="icon-cloud"></i></li>
                     </ul>
                 </div>
                 
             </div>
                 
         </div>
     
     </div>
     
 </div>--><!-- end callout--><!-- // CALLOUT -->
                                     	    	                        
         <div id="widgets" class="section">
         
             <div class="widget-content padd-y-50 bg-fs-clr">
             
                 <div class="boxed">
             		<div class="col-1-3">
             		
             		    <div class="widget-about widget-box marg-25">
             		    
             		        <div class="widget-title marg-bott-25 wh-clr">Precision Eye</div>
             		        <div class="widget-exc wh-clr">
             		        	5775 WEST OLD SHAKOPEE ROAD, SUITE 80<br/>
             		        	BLOOMINGTON, MN 55437<br/>
             		        	952-426-7000<br/>
             		        	844-426-3937 (EYES)<br/>
             		        	<a href="about.html"><button>About Precision Eye Services</button></a>   		        </div>
             		        
             		        
             		    
             		    </div>
             		
             		</div>
                     <div class="col-1-3">
                     
                         <div class="widget-about widget-box marg-25">
                         
                             <div class="widget-title marg-bott-25 wh-clr">Get In Touch</div>
                             <div class="widget-exc wh-clr">
                             	Let Precision Eye Services help you take your practice to the next level with AFFORDABLE OPHTHALMIC TECHNOLOGY OUTSOURCING.  <br/>
                             	<a href="contact.html"><button>Contact us today to learn more</button></a>
                             </div>
                             
                             
                         
                         </div>
                         
                     </div>
                 
                     <div class="col-1-3">
                     
                         <div class="widget-post widget-box marg-25">
                     
                             <div class="widget-title marg-bott-25 wh-clr">Download</div>
                             
                             <ul>
                             
                                 <li>
                                     <a onclick="window.open('/premium-services.pdf')" class="pdf" style="float: left;"><img src="images/pdf_icon.png" alt="" /></a>
                                     <div class="post-detail">
                                         <span class="post-title wh-clr"><a onclick="window.open('/premium-services.pdf')">Premium Services</a></span><br>
                                         <span class="post-exc wh-clr">Download the latest brochure detailing our premium cataract services.</span>
                                     </div>
                                 </li>
                                 
                                 <li>
                                     <a onclick="window.open('/advanced-services.pdf')" class="pdf" style="float: left;"><img src="images/pdf_icon.png" alt="" /></a>
                                     <div class="post-detail">
                                         <span class="post-title wh-clr"><a onclick="window.open('/advanced-services.pdf')">Advanced Services</a></span><br>
                                         <span class="post-exc wh-clr">Download the latest brochure detailing our advanced ophthalmic services.</span>
                                     </div>
                                 </li>
                                 
                                 <!--<li>
                                     <div class="post-date brd-wh-clr wh-clr">22 Feb</div>
                                     <div class="post-detail">
                                     	<span class="post-title wh-clr"><a href="post-video.html">Post Video Format</a></span>
                                     	<span class="post-exc wh-clr">Lorem ipsum dolo sit amet, consectetur elit dolo sit amet.</span>
                                     </div>
                                 </li>
                                 
                                 <li>
                                     <div class="post-date brd-wh-clr wh-clr">12 Jan</div>
                                     <div class="post-detail">
                                     	<span class="post-title wh-clr"><a href="post-audio.html">Post Audio Format</a></span>
                                     	<span class="post-exc wh-clr">Lorem ipsum dolo sit amet, consectetur elit dolo sit amet.</span>
                                		</div>
                                 </li> -->                      
                                                         
                             </ul>
                         
                         </div>
                     
                     </div>
         
                     
                 
                     <div class="clear"></div>
                 
                 </div>
         
             </div>
             
         </div><!-- // WIDGETS -->
         
         <footer>
 	
     <div class="footer-content">
     
     	<div class="footer-layer bg-nd-clr">
         
         	<div class="boxed">
     
                 
         
                 <div id="footer-copy" class="padd-x-25">© 2014 Precision Eye Services. All rights reserved. All trademarks are the property of their respective owners.</div>
                 
                 <div class="clear"></div>
             
             </div>
         
         </div>
         
     </div>
     
 </footer><!-- // FOOTER -->
     	
 	</div>
     
     <div class="btn-up  ">        
          <img src="images/up.png" alt="" />
     </div>
 
 	<div id="curtain"></div>
 
 <!-- JS LIBS -->
 <script type="text/javascript" src="js/jquery-min.js"></script>
 
 <script type="text/javascript" src="js/plugins.js"></script> 
 
 <script type="text/javascript" src="js/scripts-no-loader.js"></script> 
 
 
 
 </body>
 
 </html><!-- // FOOTER -->
     