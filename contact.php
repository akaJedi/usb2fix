<?php
include_once("./functions.php");
//If the form is submitted
if(isset($_POST['submit'])) {

	//Check to make sure that the name field is not empty
	if(trim($_POST['contactname']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['contactname']);
	}

	//Check to make sure that the subject field is not empty
	if(trim($_POST['subject']) == '') {
		$hasError = true;
	} else {
		$subject = trim($_POST['subject']);
	}

	//Check to make sure sure that a valid email address is submitted
	if(trim($_POST['email']) == '')  {
		$hasError = true;
	} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	//Check to make sure comments were entered
	if(trim($_POST['message']) == '') {
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['message']));
		} else {
			$comments = trim($_POST['message']);
		}
	}

	//If there is no error, send the email
	if(!isset($hasError)) {
		$emailTo = 'support@usb2fix.com';
		$body = "Name: $name \n\nEmail: $email \n\nSubject: $subject \n\nComments:\n $comments";
		$headers = 'From: Contact Form <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Wisdom of Life</title>
<!-- // Stylesheets // -->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/red.css" rel="stylesheet" type="text/css" />
<!-- // Javascripts // -->
<script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.quicksand.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/scrolltopcontrol.js"></script>
<script type="text/javascript" src="js/sudo.js"></script>
<script type="text/javascript" src="js/contentslider.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="js/jquery.countdown.js"></script>
<script type="text/javascript" src="js/jquery.validate.pack.js"></script>
<script type="text/javascript" src="js/misc.js"></script>
<script type="text/javascript" src="js/animatedcollapse.js"></script>
<script type="text/javascript" src="js/jquery.fancybox-1.3.1.js"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="js/tabs.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<!--[if lte IE 7]><style>#controls{	margin:0px 0px 0px -80px;}</style><![endif]-->
</head>
<body>
<!-- Clouds effect -->
<span class="grung backcolr">&nbsp;</span>
<span class="blackstrip">&nbsp;</span>
<span class="whitestrip">&nbsp;</span>
<!-- Outer Wrapper -->
<div id="outer_wrapper">
	<!-- Header -->
	<div id="header">
    	<div class="logo">
        	<a href="index.php"><img src="images/logo.png" alt="" /></a>
        </div>
        <div class="headtext">
        	<p>We're working with you to make a positive impact around the world in more than 30 countries, all 50 United States and your backyard. </p>
            <p class="bold">Call Us: (800) 1234567</p>
        </div>
        <?php righthead(); ?>
        <?php div_navigation(); ?>
    </div>
    <div class="clear"></div>
    <!-- Banner -->
    <div id="subbanner">
    	<div class="inner">
        	<a href="#"><img src="images/bannersub2.jpg" alt="" /></a>
        </div>
    </div>
    <div class="clear"></div>
    <!-- Content Section -->
    <div id="contentsec">
    	<div class="inner">
        	<!-- Columns -->
            <div class="columns">
            	<!-- Small side bar left -->
                <div class="breadcrumb">
                	<ul>
                    	<li><a href="index.php" class="txthover">Home</a></li>
                        <li><a href="#" class="txthover">About Us</a></li>
                        <li><a href="blog.html" class="txthover">Latest Blogs</a></li>
                    </ul>
                </div>
                <!-- Contact Us left Column -->
                <div class="midcol left">
                	<div class="quickenquiry">
                    	<h3 class="colr bold">Quick Inquiry</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a odiosapien. Praesent interdum velit in lorem ornare eu auctor mauris.</p>
                        <?php if(isset($hasError)) { //If errors are found ?>
                            <p class="errormsg"><span>Please check if you've filled all the fields with valid information. Thank you.</span></p>
                        <?php } ?>
                    
                        <?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
                            <div class="successmsg">
                            	<div>
                                    <p><strong>Email Successfully Sent!</strong></p>
                                    <p>
                                    	Thank you <strong><?php echo $name;?></strong> for using our contact form! Your email was successfully sent and we will be in touch with you soon.
                                    </p>
                                </div>
                            </div>
                        <?php } ?>
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
                        <ul>
                        	<li class="txt bold"><label for="contactname">Name</label></li>
                            <li class="inputfield"><input type="text" name="contactname" id="contactname" value="" class="required bar name" /></li>
                            <li class="txt bold"><label for="email">Email</label></li>
                            <li class="inputfield"><input type="text" name="email" id="email" value="" class="required email bar" /></li>
                            <li class="txt bold"><label for="subject">Phone Number</label></li>
                            <li class="inputfield"><input type="text" name="subject" id="subject" value="" class="required bar phon" /></li>
                            <li class="txt bold"><label for="message">Comment</label></li>
                            <li class="textfield"><textarea rows="5" cols="50" name="message" id="message" class="required"></textarea></li>
                            <li class="nopad"><input type="submit" value="Send Message" name="submit" class="go backcolr" /></li>
                        </ul>
                        </form>
                    </div>
                </div>
                <div class="midcol right">
                	<div class="contactinfo">
                    	<div class="cont_map">
                        	<iframe width="458" height="264" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;q=McMahons+Point+New+South+Wales+2060,+Australia&amp;ie=UTF8&amp;geocode=FbeU-_0ddTIDCQ&amp;split=0&amp;hq=&amp;hnear=McMahons+Point+New+South+Wales,+Australia&amp;ll=-33.844041,151.204469&amp;spn=0.011691,0.026157&amp;t=m&amp;z=14&amp;vpsrc=6&amp;output=embed"></iframe>
                        </div>
                    	<h3 class="colr bold">Contact info</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a odiosapien. Praesent interdum velit in lorem ornare eu auctor mauris.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a odiosapien. Praesent interdum velit in lorem ornare eu auctor mauris.</p>
                        <div class="left">
                        	<div class="address">
                            	<h5 class="bold colr">Los Angeles Office</h5>
                                <p>
                                    17412 Ventura Blvd<br />
                                    Encino, CA<br />
                                    91316<br />
                                </p>
                            </div>
                        </div>
                        <div class="right">
                        	<div class="phoneno">
                            	<h5 class="bold colr">Phone</h5>
                                <p>800.123.456 [Toll-free U.S. only]</p>
                            </div>
                            <div class="email">
                            	<h5 class="bold colr">Email</h5>
                                <p><a href="mailto:info@usb2fix.com">info@usb2fix.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <!-- Footer -->
    <div id="footer">
    	<!-- Our Sponsers -->
        <div class="sponsers">
        	<div class="sponinner">
                <div class="sponshead">
                    <h5 class="colr bold">Our Sponsors</h5>
                </div>
                <div class="spnscrousal">
                    <div class="carouselsec_wrapp">
						<ul>
							<li>
								<a href="#"><img src="images/logo1.gif" alt="" /></a>
                            </li>
                            <li>
								<a href="#"> <img src="images/logo2.gif" alt="" /></a>
                            </li>
                            <li>
								<a href="#"> <img src="images/logo3.gif" alt="" /></a>
                            </li>
                            <li>
								<a href="#"> <img src="images/logo4.gif" alt="" /></a>
                            </li>
                            <li>
								<a href="#"> <img src="images/logo5.gif" alt="" /></a>
							</li>
                            <li>
								<a href="#"> <img src="images/logo6.gif" alt="" /></a>
							</li>
                            <li>
								<a href="#"> <img src="images/logo7.gif" alt="" /></a>
							</li>
						</ul>
					</div>
                </div>
            </div>
        </div>
        <?php div_inner(); ?>
    </div>
    <div class="clear"></div>
    <div id="copyright" class="backcolr">
    	<div class="inner">
            <p>© Copyright 2015 USB2FIX.COM All rights reserved. Data Recovery in Los Angeles.</p>
            <a href="#top" class="top">&nbsp;</a>
        </div>
    </div>
</div>
</body>
</html>
