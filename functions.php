<?php

function righthead(){ ?>
    <div class="righthead">
        <ul class="links">
            <li><a href="#" class="txthover">Directions</a></li>
            <li><a href="javascript:animatedcollapse.toggle('jason')" class="colr">Account Login</a></li>
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
<?php }

function div_navigation() { ?>
    <div class="navigation">
        <div id="smoothmenu1" class="ddsmoothmenu">
            <ul>
                <li  <?php if($_SERVER['REQUEST_URI'] == "/index.php"){ ?>
                    class="current-menu-item"
                <?php } ?>><a href="index.php">Home</a></li>
                <li <?php if($_SERVER['REQUEST_URI'] == "/get-quote.php"){ ?>
                    class="current-menu-item"
                <?php } ?>><a href="get-quote.php">Quote</a></li>
                <li  <?php if($_SERVER['REQUEST_URI'] == "/send-a-drive.html"){ ?>
                    class="current-menu-item"
                <?php } ?>><a href="send-a-drive.html">Send a Drive</a></li>
                <li  <?php if($_SERVER['REQUEST_URI'] == "/advice-and-price.html"){ ?>
                    class="current-menu-item"
                <?php } ?>><a href="advice-and-price.html">Advice and Price</a></li>
                <li  <?php if($_SERVER['REQUEST_URI'] == "/contact.php"){ ?>
                    class="current-menu-item"
                <?php } ?>><a href="contact.php">Contact Us</a></li>
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
<?php }

function div_inner() { ?>
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
        <div class="navi_bottom">
            <ul>
                <li><a href="index.php" class="txthover">Home</a></li>
                <li><a href="quote.html" class="txthover">Quote</a></li>
                <li><a href="send-a-drive.html" class="txthover">Send a Drive</a></li>
                <li><a href="advice-and-price.html" class="txthover">Advice and Price</a></li>
                <li><a href="contact.php" class="txthover">Contact Us</a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
<?php } ?>