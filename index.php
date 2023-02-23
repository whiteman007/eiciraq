<!--Header-->
<?php 
    $Title = "Home";
    $Level1 = "Home الرئيسية";
	$Level2;
	$Level3;
	$Link1;
	$Link2;
	$Link3;
    include_once 'Header.php';
?>
    <!--Header-->

    <!--bootstrab-->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles/bootstrap-mod.css">
    <!--bootstrab-->
    <!--LINKS-->
    <link rel="stylesheet" href="styles/hover.css">
    <link rel="stylesheet" href="styles/style.css">

    <!--LINKS-->

    <!--BODY-->
    <div class="row" id="body-frame" style="background-image: url(image/back.png);">
        <!--LEFT-SIDE-->
        <div class="col-md-7">
            <div class="row">
                <div calss="col-md-12">
                    <div class="LogoContainer">
                        <img class="LogoContainer-img" src="image/logo.png" />
                        <img class="LogoContainer-NameAR" src="image/quethara.png" />
                        <h2 class="LOGOEN">Electronic Industries Company</h2>
                        <h3 lang="ar">ابداع صناعي عراقي متميز</h3>
                        <h4>Baghdad - Iraq </h4>
                        <h4 style="background-color:#9C9D9D; color: white;"> Since 1973 </h4>
                        <h4> الــعـــراق بــغــــداد </h4>
                    </div>
                </div>
            </div>
            <!--slider-->
            <div class="row">
                <div id="slideshow" calss="col-md-12">
                    <div id="carousel-example-generic" class="carousel" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="gallery/1.jpg" alt="">
                                <div class="carousel-caption"></div>
                            </div>
                            <div class="item">
                                <img src="gallery/2.jpg" alt="">
                                <div class="carousel-caption"></div>
                            </div>
                            <div class="item">
                                <img src="gallery/3.jpg" alt="">
                                <div class="carousel-caption"></div>
                            </div>
                            <div class="item">
                                <img src="gallery/4.jpg" alt="">
                                <div class="carousel-caption"></div>
                            </div>
                            <div class="item">
                                <img src="gallery/5.jpg" alt="">
                                <div class="carousel-caption"></div>
                            </div>
                            <div class="item">
                                <img src="gallery/6.jpg" alt="">
                                <div class="carousel-caption"></div>
                            </div>
                        </div>
                        <!-- end of items-->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <!--slider-->
        </div>
        <!--LEFT-SIDE-->
        <!--RIGHT-SIDE-->
        <div class="col-md-5">
            <div class="row">
                <div class="col-xs-12" style="padding:0">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0"><img class='carousel-indicators-img hvr-grow' src="gallery/1.jpg" /></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"><img class='carousel-indicators-img hvr-grow' src="gallery/2.jpg" /></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"><img class='carousel-indicators-img hvr-grow' src="gallery/3.jpg" /></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"><img class='carousel-indicators-img hvr-grow' src="gallery/4.jpg" /></li>
                        <li data-target="#carousel-example-generic" data-slide-to="4"><img class='carousel-indicators-img hvr-grow' src="gallery/5.jpg" /></li>
                        <li data-target="#carousel-example-generic" data-slide-to="5"><img class='carousel-indicators-img hvr-grow' src="gallery/6.jpg" /></li>
                    </ol>
                </div>
            </div>
            <div class="row" style="padding-top:15px;">
                <div class="col-xs-6 col-sm-4">
                    <a href="Computers.php">
                        <div class="menu_button" style=" background-color:#008BD2">
                            <p lang="ar" class="arabic">حاسوب</p>
                            <p>Computer</p>
                            <img class="icon" src="image/pc.png" />
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <a href="SmartPhones.php">
                        <div class="menu_button" style=" background-color:#E5007D">
                            <p lang="ar">هواتف ذكية</p>
                            <p>Smart</p>
                            <img class="icon" src="image/smartphone.png" />
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <a href="TV.php">
                        <div class="menu_button" style=" background-color:#000000">
                            <p lang="ar">تلفزيونات</p>
                            <p>Television</p>
                            <img class="icon" src="image/tv.png" />
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <a href="Radio.php">
                        <div class="menu_button" style=" background-color:#878786">
                            <p lang="ar">راديو</p>
                            <p>RADIO</p>
                            <img class="icon" src="image/radio.png" />
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <a href="PABX.php">
                        <div class="menu_button" style=" background-color:#00A139">
                            <p lang="ar"> بدالات وهواتف</p>
                            <p style="font-size: 14px; word-spacing:2px">PABX - Phones</p>
                            <img class="icon" src="image/pabx.png" />
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <a href="Domistic.php">
                        <div class="menu_button" style=" background-color:#6E3F82">
                            <p lang="ar">اجهزة القدرة</p>
                            <p style="font-size: 14px; word-spacing:2px">Domestic Devices</p>
                            <img class="icon" src="image/Domestic.png" />
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <a href="History.php">
                        <div class="menu_button" style=" background-color:#78070D">
                            <p lang="ar">تاريخ الشركة</p>
                            <p style="font-size: 14px; word-spacing:2px">Company History</p>
                            <img class="icon" src="image/history.png" />
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <a href="Projects.php">
                        <div class="menu_button" style=" background-color:#EA5906">
                            <p lang="ar">مشاريع</p>
                            <p>Projects</p>
                            <img class="icon" src="image/antina.png" />
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <a href="otherpro.php">
                        <div class="menu_button" style=" background-color:#FFCC00">
                            <p lang="ar">منتجات اخرى</p>
                            <p style="font-size: 14px; word-spacing:2px">Other Products</p>
                            <img class="icon" src="image/products.png" />
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--BODY-->

    <!--Fotter-->
    <?php include_once 'Footer.php'; ?>
        <!--Fotter-->
