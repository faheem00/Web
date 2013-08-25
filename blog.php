<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta charset="utf-8" />
    <title>Rahit's site</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/ui-lightness/jquery-ui-1.10.3.custom.min.css" />    
    <link href="css/bjqs.css" rel="stylesheet" />
    <link href="css/navbar.css" rel="stylesheet" />    
    <link href="css/basic.css" rel="stylesheet" />

    <!-- IE6 "fix" for the close png image -->
    <!--[if lt IE 7]>
    <link type='text/css' href='css/basic_ie.css' rel='stylesheet' media='screen' />
    <![endif]-->

    <link href="css/button.css" rel="stylesheet" />
    <link href="css/cblog.css" rel="stylesheet" />
    <link href="css/footer.css" rel="stylesheet" />
    <script src="js/jquery-latest.js"></script>
    <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.simplemodal.js"></script>
    <script src="js/nav.js"></script>
    <script src="js/smooth-scroll.js"></script>
    <script src="js/bjqs-1.3.min.js"></script>
    <script src="js/blog.js"></script>
</head>
<body>


    <?php
            include 'nav.php';
    ?>

    <div class="container-fluid">
        <div class="row-fluid row">
            <!-- Left Sidebar -->
            <div class="span3 left-sidebar">
                <div class="well sidebar-nav">
                    <ul class="nav nav-list">
                        <li>
                            <div class="blog-tag">
                                <a>PHP</a>
                                <span>Java</span>
                                <span>HTML</span>
                                <span>CSS</span>
                                <span>XYZ</span>
                                <span>Personal</span>
                            </div>
                        </li>
                        <li class="nav-header">
                            <h4 class="nav-head">Recent Blog Post</h4>
                        </li>
                        <li><a href="#b1">Recent Blog Post 1</a></li>
                        <li><a href="#b2">Recent Blog Post 2</a></li>
                        <li><a href="#b3">Recent Blog Post 3</a></li>
                        <li><a href="#b4">Recent Blog Post 4</a></li>
                        <li class="nav-header">
                            <h4 class="nav-head">Most Popolar</h4>
                        </li>
                        <li><a href="#">Most Popolar 1</a></li>
                        <li><a href="#">Most Popolar 2</a></li>
                        <li><a href="#">Most Popolar 3</a></li>
                        <li><a href="#">Most Popolar 4</a></li>
                        <li><a href="#">Most Popolar 5</a></li>
                        <li><a href="#">Most Popolar 6</a></li>
                        <li class="nav-header">
                            <h4 class="nav-head">Recent Blog Post</h4>
                        </li>
                        <li><a href="#">Recent Blog Post 1</a></li>
                        <li><a href="#">Recent Blog Post 2</a></li>
                        <li><a href="#">Recent Blog Post 3</a></li>
                        <li><a href="#">Recent Blog Post 4</a></li>
                        <li class="nav-header">
                            <h4 class="nav-head">Most Popolar</h4>
                        </li>
                        <li><a href="#">Most Popolar 1</a></li>
                        <li><a href="#">Most Popolar 2</a></li>
                        <li><a href="#">Most Popolar 3</a></li>
                        <li><a href="#">Most Popolar 4</a></li>
                        <li><a href="#">Most Popolar 5</a></li>
                        <li><a href="#">Most Popolar 6</a></li>
                    </ul>
                </div>
                <!--/.well -->
            </div>
            <!--/span-->
            <div class="span9">
                <div class="row-fluid row" id="jquery-slider">
                    <ul class="bjqs">
                        <li>
                            <div class="span12" style="margin-left: 25px;">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </div>
                        </li>
                        <li>
                            <div class="span12" style="margin-left: 25px;">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</div>
                        </li>
                    </ul>
                </div>
                <div class="row-fluid row blog-teaser-container">
                    <div id="b1"></div>
                    <div class="blog-teaser">
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                    <div id="b2"></div>
                    <div class="blog-teaser">
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                    <div id="b3"></div>
                    <div class="blog-teaser">
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                    <div id="b4"></div>
                    <div class="blog-teaser">
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                    <div id="b5"></div>
                    <div class="blog-teaser">
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                    <div id="b6"></div>
                    <div class="blog-teaser">
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                    <div id="b7"></div>
                    <div class="blog-teaser">
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                    <div id="b8"></div>
                    <div class="blog-teaser">
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                    <div id="b9"></div>
                    <div class="blog-teaser">
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                    <div id="b10"></div>
                    <div class="blog-teaser">
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

                    </div>
                </div>
            </div>
        </div>
    </div>

        <?php
            include 'footer.php';
        ?>
</body>
</html>

