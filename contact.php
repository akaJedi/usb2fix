<?php
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
        <div class="righthead">
        	<ul class="links">
                <li><a href="#" class="txthover">Directions</a></li>
                <li><a href="#" class="txthover">Volunteer</a></li>
            	<li><a href="javascript:animatedcollapse.toggle('jason')" class="colr">Staff Login</a></li>
            </ul>
            <div id="jason" class="loginbox">
            	<h5 class="loghead backcolr">Staff Login</h5>
                <ul>
                	<li class="txt"><h6 class="colr bold">Login Id</h6></li>
                    <li class="field"><input type="text" class="bar" /></li>
                    <li class="txt"><h6 class="colr bold">Password</h6></li>
                    <li class="field"><input type="password" class="bar" /></li>
                    <li class="txt"><a href="#" class="forgot">Forgot your password?</a></li>
                    <li class="field"><input type="submit" value="Submit" class="go backcolr" /></li>
                </ul>
            </div>
            <div class="clear"></div>
            <div class="search">
                <h3 class="white bold">Search</h3>
                <ul>
                    <li>
                        <input type="text" value="Enter any Keyword" name="s" onblur="if(this.value == '') { this.value = 'Enter any Keyword'; }" onfocus="if(this.value == 'Enter any Keyword') { this.value = ''; }" class="txtfield" />
                    </li>
                    <li class="right"><input type="submit" class="go backcolr" value="" /></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
        <div class="navigation">
        	<div id="smoothmenu1" class="ddsmoothmenu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="static.html">About</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="blog.html">Blog</a>
                        <ul class="backcolr">
                            <li><a href="#">Facebook Fan</a></li>
                            <li><a href="#">You've Helped</a>
                            	<ul class="backcolrdark">
                                    <li><a href="#">You've Helped</a></li>
                                    <li><a href="#">Text Widget</a></li>
                                    <li><a href="#">Get Social</a></li>
                                    <li><a href="#">Banner ads</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Text Widget</a></li>
                            <li><a href="#">Get Social</a></li>
                            <li><a href="#">Banner ads</a></li>
                            <li><a href="blog.html">Blog</a></li>
                        </ul>
                    </li>
                    <li><a href="gallery_sidebar.html">Photo Gallery</a></li>
                    <li><a href="gallery_sidebar.html">Video Gallery</a></li>
                    <li><a href="#">Staff page</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="#">Pages</a>
                        <ul class="backcolr">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blogdetail.html">Blog Detail</a></li>
                            <li><a href="events.html">Events</a></li>
                            <li><a href="eventsdetail.html">Event Detail</a></li>
                            <li><a href="#">Gallery</a>
                            	<ul class="backcolrdark">
                                    <li><a href="gallery_sidebar.html">Gallery With Sidebar</a></li>
                                    <li><a href="gallery_two_column.html">Gallery Two Column</a></li>
                                    <li><a href="gallery_three_column.html">Gallery Three Column</a></li>
                                    <li><a href="gallery_four_column.html">Gallery Four Column</a></li>
                                </ul>
                            </li>
                            <li><a href="videodetail.html">Video Detail</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="contact.php">PHP Contact Us Form</a></li>
                            <li><a href="static.html">Fullwidth</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
            <div class="announcment">
            	<ul>
                	<li>
                    	<h5 class="bold"><a href="blogdetail.html" class="txthover">Consectetur adipiscing elit. Nulla</a></h5>
                        <p class="date">December 18th 2011</p>
                    </li>
                    <li>
                    	<h5 class="bold"><a href="blogdetail.html" class="txthover">Consectetur adipiscing elit. Nulla</a></h5>
                        <p class="date">December 18th 2011</p>
                    </li>
                    <li>
                    	<h5 class="bold"><a href="blogdetail.html" class="txthover">Consectetur adipiscing elit. Nulla</a></h5>
                        <p class="date">December 18th 2011</p>
                    </li>
                </ul>
            	<a href="#" class="mlink">Announcements</a>
            </div>
        </div>
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
        <div class="inner">
        	<!-- Widget Footer Area -->
            <div class="footerwidgets">
            	<!-- Widget -->
                <div class="widget first">
                	<!-- Text Widget -->
                    <div class="textwidget">
                        <h4 class="headng colr">Text Widget</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pulvinar, odio eu consectetur porta, libero orci tempor felis, a adipiscing diam ipsum in enim. Donec hendrerit dictum quam, a tincidunt neque vulputate nec. Proin nec sollicitudin augue. Donec hendrerit 
                        </p>
                    </div>
                </div>
                <!-- Widget -->
                <div class="widget">
                	<!-- Get Social -->
                	<div class="getsocial">
                    	<h4 class="headng colr">Get Social</h4>
                        <ul>
                        	<li><a href="#"><img src="images/social1.gif" alt="" /></a><span>Facebook</span></li>
                            <li><a href="#"><img src="images/social2.gif" alt="" /></a><span>Twitter</span></li>
                            <li><a href="#"><img src="images/social3.gif" alt="" /></a><span>Skype</span></li>
                            <li><a href="#"><img src="images/social4.gif" alt="" /></a><span>Yahoo</span></li>
                            <li><a href="#"><img src="images/social5.gif" alt="" /></a><span>Digg it</span></li>
                            <li><a href="#"><img src="images/social6.gif" alt="" /></a><span>Windows</span></li>
                            <li><a href="#"><img src="images/social7.gif" alt="" /></a><span>Apple</span></li>
                            <li><a href="#"><img src="images/social8.gif" alt="" /></a><span>Stumble Upon</span></li>
                            <li><a href="#"><img src="images/social9.gif" alt="" /></a><span>Freinds Finder</span></li>
                            <li><a href="#"><img src="images/social10.gif" alt="" /></a><span>Picasa</span></li>
                            <li><a href="#"><img src="images/social11.gif" alt="" /></a><span>Sound Cloud</span></li>
                            <li><a href="#"><img src="images/social12.gif" alt="" /></a><span>Blogger</span></li>
                            <li><a href="#"><img src="images/social13.gif" alt="" /></a><span>Delicious</span></li>
                            <li><a href="#"><img src="images/social14.gif" alt="" /></a><span>Google</span></li>
                            <li><a href="#"><img src="images/social15.gif" alt="" /></a><span>Vimeo</span></li>
                            <li><a href="#"><img src="images/social16.gif" alt="" /></a><span>Gamespot</span></li>
                            <li><a href="#"><img src="images/social17.gif" alt="" /></a><span>AIM</span></li>
                            <li><a href="#"><img src="images/social18.gif" alt="" /></a><span>Viddler</span></li>
                            <li><a href="#"><img src="images/social19.gif" alt="" /></a><span>Yelp</span></li>
                            <li><a href="#"><img src="images/social20.gif" alt="" /></a><span>AIM</span></li>
                            <li><a href="#"><img src="images/social21.gif" alt="" /></a><span>Virb</span></li>
                            <li><a href="#"><img src="images/social22.gif" alt="" /></a><span>Technorati</span></li>
                            <li><a href="#"><img src="images/social23.gif" alt="" /></a><span>Tumbler</span></li>
                            <li><a href="#"><img src="images/social24.gif" alt="" /></a><span>Reddit</span></li>
                        </ul>
                    </div>
                </div>
                <!-- Widget -->
                <div class="widget">
                	<!-- Text Widget -->
                    <div class="textwidget">
                        <h4 class="headng colr">Contact us</h4>
                        <p>
                           	Heartness Charity Organisation<br />
                            1234 Lorem ipsum, Dolor sit,<br />
                            City name - 43680.<br />
                            Tel - 123 456 7890/91/92<br />
                            Fax - 123 456 7890<br />
                            e-mail : info@organisation.org <br />
                        </p>
                    </div>
                </div>
                <!-- Widget -->
                <div class="widget">
                	<!-- Newsletter -->
                	<div class="newsletter">
                        <h4 class="headng colr">Newsletter</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pulvinar.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                        <ul>
                        	<li>
                                <input type="text" value="Enter any Valid Email Address" name="s" onblur="if(this.value == '') { this.value = 'Enter any Valid Email Address'; }" onfocus="if(this.value == 'Enter any Valid Email Address') { this.value = ''; }" class="textfield" />
                            </li>
                            <li><input type="submit" value="Submit" class="go backcolr" /></li>
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
            <!-- Footer Navigation -->
            <div class="navi_bottom">
            	<ul>
                	<li><a href="index.php" class="txthover">Home</a></li>
                    <li><a href="#" class="txthover">About Us</a></li>
                    <li><a href="events.html" class="txthover">Events</a></li>
                    <li><a href="#" class="txthover">News</a></li>
                    <li><a href="#" class="txthover">Get Involved</a></li>
                    <li><a href="contact.html" class="txthover">Contact</a></li>
                    <li><a href="blog.html" class="txthover">Blog</a></li>
                    <li><a href="#" class="txthover">Stay Up To Date</a></li>
                    <li><a href="#" class="txthover">Send To Friend</a></li>
                    <li><a href="#" class="txthover">Donate Online</a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
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
