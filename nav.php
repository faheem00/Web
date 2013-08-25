<?php
$x = basename($_SERVER['REQUEST_URI']);
function fname($y){
    global $x;
	if($y == $x)
		return 'class="active"';
}
?>

<!-- Navigation Bar -->
        <div class="nav navbar-fixed-top">
            <ul class="nav nav-tabs day">
                <li <?php echo fname("home.php")?> >
                    <a href="home.php">Home</a>
                </li>
                <li <?php echo fname("about.php")?> class="dropdown" id="drop1">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">About Me</a>
                    <ul class="dropdown-menu custdrop">
                        <!-- Dropdown Menu -->
                        <li>
                            <a href="about.php#content1">Sub Menu 1</a>
                        </li>
                        <li>
                            <a href="about.php#content2">Sub Menu 2</a>
                        </li>
                        <li>
                            <a href="about.php#content3">Sub Menu 3</a>
                        </li>
                    </ul>
                </li>
                <li <?php echo fname("blog.php"); fname("blogcontent.php")?>  class="dropdown" id="drop2">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">My Blog</a>
                    <ul class="dropdown-menu custdrop">
                        <!-- Dropdown Menu -->
                        <li>
                            <a href="blogcontent.php">Blog Content</a>
                        </li>
                        <li>
                            <a href="blog.php">Blog Home</a>
                        </li>
                    </ul>
                </li>
                <li <?php echo fname("contact.php")?> >
                    <a href="contact.php">Contact Me</a>
                </li>
                <li class="social-links">
                    <a href="https://www.facebook.com/tahsinrahit" target="_blank" align="left"><img src="img/facebook-ico.png"></a> <a href="https://twitter.com/tahsinrahit" target="_blank" align="left"><img src="img/twitter_ico.png"></a> <a href="http://bd.linkedin.com/pub/tahsin-hassan-rahit/52/9b0/14b" target="_blank" align="left"><img src="img/linkedin_ico.png"></a> <a href="https://www.odesk.com/users/Web-Programmer_~0197d939691d639326?tot=1&amp;pos=0" target="_blank" align="left"><img src="http://cdn.slidesharecdn.com/profile-photo-oDesk-48x48.jpg?1368824180" style="height:35px"></a>
                </li>
                <li class="pull-right">
                    <ul class="nav nav-pills logreg">
                        <li>
                            <a style="cursor: pointer;" id="login">Log In</a>
                            <div class="popup">
                                <form>
                                    <p>
                                        <span class="title">Username</span> <input name="" type="text">
                                    </p>
                                    <p>
                                        <span class="title">Password</span> <input name="" type="password">
                                    </p>
                                    <p>
                                        <input name="" type="button" class="btn btn-primary" value="Login">
                                    </p>
                                </form>
                            </div>
                        </li>
                        <li>
                            <a href="#" id="regtrigger">Register</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- Login Modal -->
        <div id="basic-modal-content">
            <h3>
                Register
            </h3>
            <div id="openid_btns" class="script-only">
                <a title="log in with Stack Exchange" href="javascript:openid.signin('stack_exchange');" style="background: #fff url(//cdn.sstatic.net/Img/openid/openid-logos.png?v=8); background-position: -1px -518px" class="stack_exchange openid_large_btn"></a>

                <a title="log in with Google" href="javascript:openid.signin('google');" style="background: #fff url(//cdn.sstatic.net/Img/openid/openid-logos.png?v=8); background-position: -1px -1px" class="google openid_large_btn"></a>

                <a title="log in with Facebook" href="javascript:openid.signin('facebook');" style="background: #fff url(//cdn.sstatic.net/Img/openid/openid-logos.png?v=8); background-position: -1px -456px" class="facebook openid_large_btn"></a>

                <a title="log in with Yahoo" href="javascript:openid.signin('yahoo');" style="background: #fff url(//cdn.sstatic.net/Img/openid/openid-logos.png?v=8); background-position: -1px -63px" class="yahoo openid_large_btn"></a>

                <br>

                <div id="show-more-options" style="display: block;">
                    <div id="more-openid-options" class="script-only">
                        <a title="log in with myOpenID" href="javascript:openid.signin('myopenid');" style="background: #fff url(//cdn.sstatic.net/Img/openid/openid-logos.png?v=8); background-position: -27px -326px" class="myopenid openid_small_btn"></a><a title="log in with LiveJournal" href="javascript:openid.signin('livejournal');" style="background: #fff url(//cdn.sstatic.net/Img/openid/openid-logos.png?v=8); background-position: -1px -352px" class="livejournal openid_small_btn"></a><a title="log in with WordPress" href="javascript:openid.signin('wordpress');" style="background: #fff url(//cdn.sstatic.net/Img/openid/openid-logos.png?v=8); background-position: -1px -404px" class="wordpress openid_small_btn"></a><a title="log in with Blogger" href="javascript:openid.signin('blogger');" style="background: #fff url(//cdn.sstatic.net/Img/openid/openid-logos.png?v=8); background-position: -1px -249px" class="blogger openid_small_btn"></a><a title="log in with Verisign" href="javascript:openid.signin('verisign');" style="background: #fff url(//cdn.sstatic.net/Img/openid/openid-logos.png?v=8); background-position: -1px -378px" class="verisign openid_small_btn"></a><a title="log in with claimID" href="javascript:openid.signin('claimid');" style="background: #fff url(//cdn.sstatic.net/Img/openid/openid-logos.png?v=8); background-position: -1px -326px" class="claimid openid_small_btn"></a><a title="log in with ClickPass" href="javascript:openid.signin('clickpass');" style="background: #fff url(//cdn.sstatic.net/Img/openid/openid-logos.png?v=8); background-position: -1px -274px" class="clickpass openid_small_btn"></a><a title="log in with Google Profile" href="javascript:openid.signin('google_profile');" style="background: #fff url(//cdn.sstatic.net/Img/openid/openid-logos.png?v=8); background-position: -1px -300px" class="google_profile openid_small_btn"></a><a title="log in with AOL" href="javascript:openid.signin('aol');" style="background: #fff url(//cdn.sstatic.net/Img/openid/openid-logos.png?v=8); background-position: -27px -249px" class="aol openid_small_btn"></a>
                    </div>
                    <div id="simple-openid-selector">
                        <div id="openid_input_area" class="script-only">
                            <p id="openid_provider_label"></p><input id="openid_username" type="text" name="openid_username" value=""><input id="openid_submit" type="submit" value="Sign In" style="pointer: default; margin-left:10px; margin-top:-8px;" class="btn btn-warning">
                        </div>
                        <div id="openid-url-input-area">
                            <noscript>&lt;p class="noscript-notice"&gt;Because JavaScript is disabled, you can only log in by entering your OpenID URL manually:&lt;/p&gt;</noscript>
                            <p class="script-only" style="color: rgba(44, 59, 117, 0.86);">
                                Or, you can manually enter your OpenID
                            </p>
                            <table id="openid-url-input">
                                <tbody>
                                    <tr>
                                        <td class="vt large">
                                            <input id="openid_identifier" name="openid_identifier" class="openid-identifier" style="height: 28px; width: 500px;" type="text" tabindex="100">
                                        </td>
                                        <td class="vt large">
                                            <input id="submit-button" class="btn btn-warning" style="margin-left: 5px; margin-top:-8px;" type="submit" value="Log in" tabindex="101">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <!-- preload the images -->
            <div style='display: none'>
                <img src='img/basic/x.png' alt=''>
            </div>