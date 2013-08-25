<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta charset="utf-8" />
    <title>Rahit's site</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/ui-lightness/jquery-ui-1.10.3.custom.min.css" />
    <link href="css/navbar.css" rel="stylesheet" />
    <link href="css/basic.css" rel="stylesheet" />

    <!-- IE6 "fix" for the close png image -->
    <!--[if lt IE 7]>
    <link type='text/css' href='css/basic_ie.css' rel='stylesheet' media='screen' />
    <![endif]-->

    <link href="css/button.css" rel="stylesheet" />
    <link href="css/contact.css" rel="stylesheet" />
    <link href="css/footer.css" rel="stylesheet" />   
    <script src="js/jquery-latest.js"></script>
    <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.simplemodal.js"></script>
    <script src="js/nav.js"></script>
    <script src="js/smooth-scroll.js"></script>

</head>
<body>


    <?php
            include 'nav.php';
    ?>

    <div class="container-fluid" style="margin-top: 40px;">
        <div class="row-fluid row">
            <div class="span12">
                <img src="cover.jpg">
            </div>
            <!--/span-->
        </div>

        <!-- Big Social Network Icons -->
        <div class="row-fluid row" style="margin-top: 20px;">
            <div class="span3">
                <a href="https://www.facebook.com/tahsinrahit">
                    <img src="img/facebook_128.png" title="My Facebook Page" />
                </a>
            </div>
            <div class="span3">
                <a href="https://twitter.com/tahsinrahit">
                    <img src="img/twitter_128.png" title="My Twitter Page" />
                </a>
            </div>
            <div class="span3">
                <a href="https://plus.google.com/104936784101477906439">
                    <img src="img/gplus-128.png" title="My G+ Page" />
                </a>
            </div>
            <div class="span3">
                <a href="http://bd.linkedin.com/pub/tahsin-hassan-rahit/52/9b0/14b">
                    <img src="img/linkedin_128.png" title="My LinkedIn Page" />
                </a>
            </div>
            </div>


            <div class="row-fluid row" style="padding-top: 20px";>
                <div class="span6">
                    <form class="form-horizontal">
                        <header>
                            <h2>Leave Your Messege Here </h2>
                        </header>
                        <div class="control-group">
                            <label class="control-label" for="inputEmail">Name</label>
                            <div class="controls">
                                <input type="text" id="inputEmail" placeholder="Name" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputEmail">Email</label>
                            <div class="controls">
                                <input type="text" id="inputEmail" placeholder="Email" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="message">Message</label>
                            <div class="controls">
                                <textarea type="text" name="message" id="message" rows="8" class="input-xlarge">

										</textarea>
                                <p style="margin-top: 5px;">
                                    <input name="" type="button" class="btn btn-enter" value="Submit"/>
                                </p>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="span6">
                    <div class="img-div"><a href="mailto:tahsin.rahit@gmail.com" target="_blank">
                        <img src="img/gmail-ico.png" /></a>&nbsp;Gmail</div>
                    <div class="img-div"><a href="mailto:tahsin.rahit@yahoo.com" target="_blank">
                        <img src="img/yahoo-ico.png"/></a>&nbsp;Yahoo</div>
                    <div class="img-div"><a href="mailto:tahsin.rahit@hotmail.com" target="_blank">
                        <img src="img/hotmail-ico.png"/></a>&nbsp;Hotmail</div>
                    <div class="img-div"><a href="mailto:tahsin.rahit@mail.com" target="_blank">
                        <img src="img/mail-ico.png"/></a>&nbsp;Mail</div>
                </div>
            </div>

            <div class="row row-fluid">
                <div class="span4">
                    <img src="cover.jpg" />
                </div>
                <div class="span4">
                    <img src="cover.jpg" />
                </div>
                <div class="span4">
                    <img src="cover.jpg" />
                </div>
            </div>
    </div>

        <?php
            include 'footer.php';
        ?>

</body>

</html>

