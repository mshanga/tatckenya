<?php
	// Message Vars
	$msg = '';
	$msgClass = '';

	// Check For Submit
	if(filter_has_var(INPUT_POST, 'submit')){
		// Get Form Data
		$name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $company = htmlspecialchars($_POST['company']);
    $email = htmlspecialchars($_POST['email']);
		$message = htmlspecialchars($_POST['message']);

		// Check Required Fields
		if(!empty($email) && !empty($name) && !empty($message)){
			// Passed
			// Check Email
			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				// Failed
				$msg = 'Please use a valid email';
				$msgClass = 'alert-danger';
			} else {
				// Passed
				$toEmail = 'info@tatcke.com';
				$subject = 'Contact Request From '.$name;
				$body = '<h2>Contact Request</h2>
					<h4>Name</h4><p>'.$name.'</p>
          <h4>Email</h4><p>'.$email.'</p>
          <h4>Phone Number</h4><p>'.$phone.'</p>
          <h4>Company</h4><p>'.$company.'</p>
					<h4>Message</h4><p>'.$message.'</p>
				';

				// Email Headers
				$headers = "MIME-Version: 1.0" ."\r\n";
				$headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

				// Additional Headers
				$headers .= "From: " .$name. "<".$email.">". "\r\n";

				if(mail($toEmail, $subject, $body, $headers)){
					// Email Sent
					$msg = 'Your email has been sent';
					$msgClass = 'alert-success';
				} else {
					// Failed
					$msg = 'Your email was not sent';
					$msgClass = 'alert-danger';
				}
			}
		} else {
			// Failed
			$msg = 'Please fill in all fields';
			$msgClass = 'alert-danger';
		}
	}
?>

<!DOCTYPE html>
<html class=" js no-touch" lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <script async="" src="js/analytics.js"></script>
        
    <title>Trans-Atlantic Trading Company | Your Reliable Tea Supplier</title>
    <meta name="description" content="Trans-Atlantic Trading Company | Your Reliable Tea Supplier">
    <meta name="keywords" content="Trans-Atlantic Trading Company | Your Reliable Tea Supplier">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="robots" content="index,follow,noodp,noydir">

    <link rel="icon" href="images/new/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link href="../maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/core.css" rel="stylesheet">
    <link href="css/multi-step.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/jquery.css" rel="stylesheet">
    <link href="css/map-animation.css" rel="stylesheet">
    <script src="js/jquery_002.js"></script>

    <script src="html5lightbox/jquery.js" type="text/javascript"></script>
    <script src="html5lightbox/html5lightbox.js" type=" text/javascript "></script>


    <link href="css/custom.css" rel="stylesheet">

    <script>
    if ($(window).width() > 767) {
        // DOM: Create the script element
        var jsElm = document.createElement("script");
        // set the type attribute
        jsElm.type = "application/javascript";
        // make the script element load file
        jsElm.src = "js/pace-loader.js";
        // finally insert the element to the body element in order to load the script
        document.head.appendChild(jsElm);
    }

    paceOptions = {
    // Disable the 'elements' source
    elements: false,

    // Only show the progress on regular and ajax-y page navigation,
    // not every request
    restartOnRequestAfter: false
    }
    </script>
    <script type="application/javascript" src="js/pace-loader.js"></script>	 
    <link href="css/pace-simple.css" rel="stylesheet">
    <script>
    function now(){
        window.location.reload(true);
    }
    </script>
    <style>
    #footer_FormValues_validate .active{display:block !important;}
    </style>

    <!-- Google Analytics code -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-44574992-1', 'tatcke.com');
    ga('send', 'pageview');
    </script>
        
    <!-- Google Analytics code ends -->
    
    <link href="css/chat.css" rel="stylesheet">
    <!-- <script id="lhc_operator_message" type="text/javascript" src="/js/0"></script> -->
</head>
    
         

<div style="position:fixed;top:0px;left:0px;width:0;height:0;" id="scrollzipPoint"></div>

<div class="pace  pace-inactive" style="display: none;">
  <div class="pace-progress" style="transform: translate3d(100%, 0px, 0px);" data-progress-text="100%" data-progress="99"></div>

  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div>
</div>


<div class="testHidden">
  <div class="preloader">
    <img src="images/sei-loader.png" class="" alt="">
  </div>
</div>
<div class="defineFloat mobStickyBar">
  <ul class="list-unstyled">
    <li class="sPhone">
      <a href="tel:+254 (0)20 2004959"></a>
    </li>
    <li class="sMail">
      <span class="salesEmail">
        <a href="mailto:info@tatcke.com">
          <i class="fa fa-envelope" aria-hidden="true"></i>info@tatcke.com</a>
      </span>
    </li>
    <li class="sCal">
      <a data-toggle="modal" data-target="#myModal" title="" href="contact.php" data-original-title="Online Cost Calculator"></a>
    </li>
  </ul>
</div>
<p id="back-top" style="display: none;">
  <a href="#top">
    <img src="images/toparrow.png" alt="" class="img-responsive">
  </a>
</p>

<header class="defineFloat nav-down">
  <div class="defineFloat topBar">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 renoPad">
          <ul class="list-unstyled">
            <li>
              <span>Have a question? Contact Us.</span>
              <a href="index.html">
                <i class="fa fa-phone" aria-hidden="true"></i> +254 (0)20 2004959</a>
            </li>
            <li>
              <span class="salesEmail">
                <a href="mailto:info@tatcke.com">
                  <i class="fa fa-envelope" aria-hidden="true"></i>info@tatcke.com</a>
              </span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="defineFloat midBar">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-6 logo">
          <a href="index.html">
            <img src="images/logo1.png" class="img-responsive" alt="" title="Trans-Atlantic Trading Company Ltd">
          </a>
        </div>
        <div class="col-sm-9 col-md-9 col-xs-12 menu_outer">
          <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <img src="images/mobCalcIcon.png" class="img-responsive" alt="" data-toggle="modal" data-target="#myModal">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav" id="example-one">
                <li class="active current_page_item">
                  <a href="index.html" style="">Home</a>
                </li>

                <li class="menuOneTT aboutTip">
                  <a href="about.html" title="" data-original-title="About">About Us</a>
                </li>

                <li class="menuOneTT aboutTip">
                  <a href="about.html" title="" data-original-title="Exports">Our Exports</a>
                </li>

                <li class="menuOneTT aboutTip">
                  <a href="about.html" title="" data-original-title="Services">Our Services</a>
                </li>


                <li class="lastChild onlineButtonTT finished">
                  <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
                    <rect rx="2" ry="2" class="shape" height="100%" width="100%"></rect>
                  </svg>
                  <a href="contact.php" title="" data-original-title="Online Cost Calculator" style="">
                    <span>For Enquires</span>
                    <br> Contact Us</a>
                </li>
                <li id="magic-line" style="width: 25.442px; left: 0.799992px; display: none; overflow: hidden;"></li>
              </ul>
              <div class="defineFloat mobPhone">
                <ul class="list-unstyled">
                  <li>
                    <a href="tel:+254 (0)20 2004959">
                      <img src="images/phonePop.png" class="img-responsive" alt="">+254 (0)20 2004959</a>
                  </li>
                  <li>
                    <a href="index.html">
                      <img src="images/mailPop.png" class="img-responsive" alt="">
                      <span class="salesEmail">
                        <a href="mailto:info@tatcke.com">
                          <i class="fa fa-envelope" aria-hidden="true"></i>info@tatcke.com</a>
                      </span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /.navbar-collapse -->
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>

	<section id="sliderInner" class="defineFloat commonSlider formbannerArrow">
		<h4 class="hide">removing error</h4>
		<!--img src="{% static 'home/images/getInTouch.jpg" class="img-responsive" alt="" /-->
	</section>

	<section class="defineFloat" id="getInTouch">
		<div class="container-fluid">
			<div class="row">
				<div class="container">
					<div id="contForm" class="col-sm-12 col-xs-12 text-center getHeading">
						<h2>For any inquiries contact us below</h2>
						<hr>
						<p>
							We would love to serve you as a partner or client. Please fill out the form below to get in touch. We wil get back to you promptly.
						</p>
					</div>
				</div>
				<div class="col-sm-12 col-xs-12 getOuter">
					<div class="col-sm-12 col-xs-12">

						<div class="defineFloat getOut">

							<div class="col-md-7 col-sm-12 col-xs-12 noPad getLeft">
							    
							    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.45354399656!2d36.8595629!3d-1.2535928!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x22f80e1d44fad66d!2sTrans-Atlantic%20Trading%20Company!5e0!3m2!1sen!2ske!4v1569312684262!5m2!1sen!2ske" width="100%" height="700" frameborder="0" style="border:0;" allowfullscreen="">
							    </iframe>
							</div>

<!-- Form -->
							<div class="col-md-5 col-sm-12 col-xs-12 getLeft noPad">

              <?php if($msg != ''): ?>
    		<div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
    	<?php endif; ?>
		
								<form class="contactPageform" id="mainform" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                <div class="form-group">
										
                    <label>Name:</label>
                    <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
									</div>
									<div class="form-group">
										
										<label>Phone Number:</label>
										<input type="text" name="phone" value="<?php echo isset($_POST['phone']) ? $phone : ''; ?>">
									</div>
									<div class="form-group">
										
										<label>Company:</label>
										<input type="text" name="company" value="<?php echo isset($_POST['company']) ? $company : ''; ?>">
									</div>
									<div class="form-group">
										
										<label>Email:</label>
										<input type="text" name="email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
									</div>

									<div class="form-group">
										
										<label>Message:</label>
										<textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
									</div>

									<button type="submit" name="submit" class="btn btn-default">Send Message
										<i class="fa fa-angle-double-right ctnBtn" aria-hidden="true"></i>
									</button>
								</form>
							</div>
							<!-- END OF FORM -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
             
  <footer class="defineFloat">
  <div class="container">
      <div class="row">
          <div class="col-sm-12 col-xs-12">
              <div class="defineFloat footerInner">
                  <div class="col-md-9 col-sm-8 col-xs-12 footerLeft">
                      <div class="defineFloat reseller">
                          <div class="resellerLeft">
                              <h2>Sale To The World</h2>
                              <span>Expand your target market and Multiply Your Profits</span>
                          </div>
                          <a href="contact.php" class="btn btn-primary resellButton footerGetbtn" title=""
                              data-original-title="reseller-seo">Get More Information</a>
                      </div>
                      <div class="defineFloat footerLinks">
                          <div class="row">
                              <div class="col-md-4 col-sm-4 col-xs-4 mobResLinks linkl dspl-none">
                                  <ul class="list-unstyled">
                                      <li class="">
                                          <a href="#" title="" class="footerMainMenu"
                                              data-original-title="Search Engine Optimization">Export of Bulk Loose
                                              Tea</a>
                                      </li>
                                      <li class="">
                                          <a class="footerMainMenu" href="#" title=""
                                              data-original-title="Pay Per Click Management">Export of tea</a>
                                      </li>
                                      <li class="">
                                          <a class="footerMainMenu" href="#" title=""
                                              data-original-title="Online Reputation Management">Export of
                                              Livestock</a>
                                      </li>
                                      <li class="">
                                          <a class="footerMainMenu" href="#" title=""
                                              data-original-title="Social Media Marketing">Export of Meat</a>
                                      </li>
                                  </ul>
                              </div>
                              <div class="col-md-4 col-sm-4 col-xs-4 mobResLinks link2 dspl-none">
                                  <ul class="list-unstyled">
                                      <li class="active">
                                          <a href="index.html" title="" data-original-title="Home">Home</a>
                                      </li>
                                      <li class="">
                                          <a href="about.html" class="footerMainMenu" title=""
                                              data-original-title="About">About Us</a>
                                      </li>
                                      <li>
                                          <a class="footerMainMenu" href="general-supplies.html" title=""
                                              data-original-title="Services">Supplies</a>
                                      </li>
                                      <li class="">
                                          <a href="contact.php" class="footerMainMenu" title=""
                                              data-original-title="Packages">Contact </a>
                                      </li>
                                  </ul>
                              </div>
                              <div class="col-md-4 col-sm-4 col-xs-4 mobResLinks link3 dspl-none">
                                  <ul class="list-unstyled subMenuFooter">
                                      <li class="">
                                          <a href="exports.html" class="footerMainMenu" title=""
                                              data-original-title="Career">Our Exports</a>
                                      </li>
                                      <li class="">
                                          <a href="imports.html" class="footerMainMenu" title=""
                                              data-original-title="Get in Touch">Our Imports</a>
                                      </li>

                                      <li class="">
                                          <a href="general-supplies.html" class="footerMainMenu" title=""
                                              data-original-title="Make a Payment">Our Supplies</a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                      <div class="defineFloat footerList">
                          <p style="color:white">Nairobi Head Office<br>
                              CPA Centre, 4th Floor, Thika Road, Next to KCA University<br>
                              P.O. Box 26454 – 00100 Nairobi, Kenya<br>

                          </p>
                          <ul class="list-unstyled disableLink">

                              <li>
                                  <a class="disableLink" href="tel:+254 (0)20 2004959">
                                      <i class="fa fa-phone" aria-hidden="true"></i>+254 (0)202 004 959</a>
                              </li>
                              <li>
                                  <a class="disableLink" href="tel:+254 (0)791 071 920">+254 (0)791 071 920</a>
                              </li>
                              <li>
                                  <span class="salesEmail">
                                      <a href="mailto:info@tatcke.com">
                                          <i class="fa fa-envelope" aria-hidden="true"></i>info@tatcke.com</a>
                                  </span>
                              </li>
                          </ul>
                      </div>
                    
                      
                      <div class="defineFloat footerList">
                          <p style="color:white"><br>Mombasa Office<br>
                              Harbour House, 3rd Flour, Moi Avenue<br>
                              P.O Box 80111-80100, Mombasa, Kenya</p>
                          <ul class="list-unstyled disableLink">
                              <li>
                                  <a class="disableLink" href="tel:+254 (0)20 2004959">
                                      <i class="fa fa-phone" aria-hidden="true"></i>+254 (0)748 455 132</a>
                                      </li>
                           <li>
                                  <span class="salesEmail">
                                      <a href="mailto:tea@tatcke.com">
                                          <i class="fa fa-envelope" aria-hidden="true"></i>tea@tatcke.com</a>
                                  </span>
                              </li>
                          </ul>
                      </div>

                  </div>
                  <div class="col-md-3 col-sm-4 col-xs-12 footerRight">
                      <div class="defineFloat footBg">
                          <div class="col-sm-12 col-xs-12 fLogo text-center">
                              <a href="index.html">
                                  <img src="images/new/logo2.png" class="img-responsive" alt="">
                              </a>
                          </div>
                          <div class="col-sm-12 col-xs-12 grab text-center">
                              <h2>Get The Latest Trading News</h2>
                              <p>We’ll provide you with detailed metrics &amp; statistics to help you take the right
                                  decisions</p>
                              <a href="contact.php" class="btn btn-primary resellButton footerGetbtn" title=""
                                  data-original-title="reseller-seo">Subscribe</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="container-fluid copyRight noPad">
      <div class="container">
          <span class="col-xs-12"> © Copyright <script>document.write(new Date().getFullYear())</script> &nbsp;&nbsp; | &nbsp;&nbsp; Trans-Atlantic Trading Company Ltd.
              All rights reserved. </span>
      </div>
  </div>
</footer>         

<!-- JavaScript Library  -->
<link href="css/owl.css" rel="stylesheet">
<script src="js/jquery_005.js"></script>
<script src="js/jquery_006.js"></script>
<link href="css/classyslider.css" rel="stylesheet">
<script src="js/classyslider.js"></script>
<script>
    $(document).ready(function () {
        $('.slider').ClassySlider();
    });

    // counter
    jQuery('.statistic-counter').counterUp({
        delay: 10,
        time: 1500
    });
</script>
<!-- stats conunter -->

<script src="js/counter.js"></script>
<!-- wow slider -->
<script src="js/wow.js"></script>
<!-- bootstrap css -->
<script src="js/bootstrap.js"></script>
<!-- custom js code -->

<!-- Scrolling effect -->
<script src="js/highlight.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/examples.js"></script>
<script src="js/ScrollMagic.js"></script>
<script src="js/debug.js"></script>
<script src="js/example.js"></script>

<script src="js/scroll.js"></script>
<!-- bx slider  -->
<script src="js/owl.js"></script>
<script src="js/jquery_004.js"></script>
<!-- multi_step_form  -->
<script src="js/multi_step_form.js"></script>
<!-- scrollSpeed  -->
<script src="js/jquery.js"></script>
<!-- preload images  -->
<script src="js/preload.js"></script>
<script src="js/counter-scripts.js"></script>

<script src="js/core.js"></script>

<!-- Google Analytics code -->

<!-- chat widget -->
<!-- <script type="text/javascript" src="/js/chat.js"></script> -->
<!-- End Of Live Helper Chat-->
<!-- validation js-->
<script src="js/jquery_003.js" charset="utf-8"></script>
<script src="js/validateForm.js" charset="utf-8"></script>

<div style="position: fixed; overflow: visible; white-space: nowrap; pointer-events: none; font-size: 0.85em; z-index: 9999; display: none; top: 363.5px; left: 1521px;">
    <div style="position: absolute; overflow: visible; border-width: 1px 0px 0px; border-style: solid; color: blue; border-color: blue; right: 0px;">
        <div style="position: relative; padding: 0px 8px 3px; transform: translateY(-100%);">trigger</div>
    </div>
</div>
<div style="position: absolute; overflow: visible; white-space: nowrap; pointer-events: none; font-size: 0.85em; z-index: 9999; display: none; left: 1521px; top: 363.5px; height: 600px;">
    <div style="position: absolute; overflow: visible; width: 0px; height: 0px;">
        <div style="position: absolute; overflow: visible; border-width: 0px 0px 1px; border-style: solid; color: green; border-color: green; bottom: -1px; right: 0px; padding: 0px 8px;">start 1 (duration: 1200)</div>
    </div>
    <div style="position: absolute; overflow: visible; border-width: 1px 0px 0px; border-style: solid; color: red; border-color: red; top: 100%; right: 0px; padding: 0px 8px;">end 1 (duration: 1200)</div>
</div>
<div style="position: absolute; overflow: visible; white-space: nowrap; pointer-events: none; font-size: 0.85em; z-index: 9999; display: none; left: 1521px; top: 363.5px; height: 600px;">
    <div style="position: absolute; overflow: visible; width: 0px; height: 0px;">
        <div style="position: absolute; overflow: visible; border-width: 0px 0px 1px; border-style: solid; color: green; border-color: green; bottom: -1px; right: 0px; padding: 0px 8px;">start 1 (duration: 1200)</div>
    </div>
    <div style="position: absolute; overflow: visible; border-width: 1px 0px 0px; border-style: solid; color: red; border-color: red; top: 100%; right: 0px; padding: 0px 8px;">end 1 (duration: 1200)</div>
</div>
<div style="position: absolute; overflow: visible; white-space: nowrap; pointer-events: none; font-size: 0.85em; z-index: 9999; display: none; top: 363.5px; height: 600px; left: 1521px;">
    <div style="position: absolute; overflow: visible; width: 0px; height: 0px;">
        <div style="position: absolute; overflow: visible; border-width: 0px 0px 1px; border-style: solid; color: green; border-color: green; bottom: -1px; right: 0px; padding: 0px 8px;">start 1 (duration: 800)</div>
    </div>
    <div style="position: absolute; overflow: visible; border-width: 1px 0px 0px; border-style: solid; color: red; border-color: red; top: 100%; right: 0px; padding: 0px 8px;">end 1 (duration: 800)</div>
</div>

<script id="wappalyzer" src="js/inject.js"></script>
<!-- Code injected by live-server -->
<script type="text/javascript" src="js/bottom.js"></script>
    </body>

</html>