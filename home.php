<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <title>
            Rahit's site
        </title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/ui-lightness/jquery-ui-1.10.3.custom.min.css">
        <link href="css/navbar.css" rel="stylesheet" type="text/css">
        <link href="css/basic.css" rel="stylesheet" type="text/css">
        <!-- IE6 "fix" for the close png image -->
        <!--[if lt IE 7]>
    <link type='text/css' href='css/basic_ie.css' rel='stylesheet' media='screen' />
    <![endif]-->
        <link href="css/button.css" rel="stylesheet" type="text/css">
        <link href="css/home.css" rel="stylesheet" type="text/css">
        <link href="css/footer.css" rel="stylesheet" />    
        <script src="js/jquery-latest.js" type="text/javascript">
</script>
        <script src="js/jquery-ui-1.10.3.custom.min.js" type="text/javascript">
</script>
        <script src="js/bootstrap.min.js" type="text/javascript">
</script>
        <script src="js/jquery.simplemodal.js" type="text/javascript">
</script>
        <script src="js/nav.js" type="text/javascript">
</script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" type="text/javascript">
</script>
    </head>
    <body>

        <?php
            include 'nav.php';
        ?>
			
			<!-- Container -->
            <div class="container-fluid">
                <div class="row-fluid row">
                    <div class="span9">
                        <div class="home-content">
                            <h1>
                                Here goes contents
                            </h1>
                        </div>
                    </div>
                    <div class="span3">
                        <div class="social-feed">
                            <p>
                                Here goes social feed
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row-fluid row freelance">
                    <div class="span4">
                        <p>
                            Here goes freelancing profile
                        </p>
                    </div>
                    <div class="span4">
                        <p>
                            Here goes freelancing profile
                        </p>
                    </div>
                    <div class="span4">
                        <p>
                            Here goes freelancing profile
                        </p>
                    </div>
                </div>
                <div class="row-fluid row">
                    <div class="span12 gcal">
                        <h1>
                            Here goes your google calendar
                        </h1>
                    </div>
                </div>
            </div>

            <?php
                include 'footer.php';
            ?>

            <!-- login submit -->
            <script type="text/javascript">
$(function () {
            $('#loginform').submit(function (e) {
                return false;
            })
            });
            </script>
        </div>
    </body>
</html>