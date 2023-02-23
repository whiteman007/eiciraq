<!--Header-->
<?php
    $Title = "RM204";
    $Level1 = "Home الرئيسية";
  	$Level2 = "Radio راديو";
  	$Level3 = "RM204";
  	$Link1 = "index.php";
  	$Link2 = "Radio.php";
  	$Link3;
    include_once 'Header.php';
    ?>
    <!--Header-->

    <!--bootstrab-->
    
    <link rel="stylesheet" href="styles/bootstrap-mod.css">
    <!--bootstrab-->
    <!--LINKS-->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/cloud-zoom.1.0.2.min.js"></script>
    <link rel="stylesheet" href="styles/next-prev.css">

    <link rel="stylesheet" href="styles/hover.css">
    <link rel="stylesheet" href="styles/style-items.css">
    <!--LINKS-->

    <!--BODY-->
    <div class="row" style=" padding-left: 10px;padding-right: 10px;">
        <div class="col-sm-7">
            <div class="row">
               <div class="col-xs-12">
                    <div class="product-name">Radio</div>
                    <div style="display: block; background-color:#FFAE0F; height: 20px;"></div>
                    <div class="product-model">MODEL RM204</div>
                    <div class="product-tag">Colored</div>
                </div>
                <div class="col-xs-12" align="center">
                    <h3 lang="ar">جهاز مذياع بثلاث موجات </h3>
                    <h3 lang="ar">SW - MW - FM</h3>
                </div>
            </div>
        </div>
        <div class="col-sm-5">
            <div class="row">
                <div calss="col-xs-12">
                    <div class="zoom-section">
                        <div class="zoom-small-image">
                            <a href='products/RM204.png' class='cloud-zoom' rel="position:'inside',showTitle:false,adjustX:-4,adjustY:-4">
                                <img class="product-img" src="products//RM204.png" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-2 specs-icon">
                    <img src="image/radio/MW.png" />
                </div>
                <div class="col-xs-2 specs-icon">
                    <img src="image/radio/SW.png" />
                </div>
                <div class="col-xs-2 specs-icon">
                    <img src="image/radio/FM.png" />
                </div>
                <div class="col-xs-2 specs-icon">
                    <img src="image/radio/dc.png" />
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12  catagory-back" style="background-image: url(image/Back-Radio.jpg);" align="center">
            <a id="prev" href="RM301.php" class="Next-Prev btn btn-1">
                <span class="txt">PREVIOUS السابق</span>
                <span class="round"><i class="fa fa-chevron-right"></i></span>
            </a>
            <a id="next" href="RM201.php" class="Next-Prev btn btn-1">
                <span class="txt">NEXT التالي</span>
                <span class="round"><i class="fa fa-chevron-right"></i></span>
            </a>
        </div>
    </div>
    <!--BODY-->

    <!--Fotter-->
    <?php include_once 'Footer.php'; ?>
        <!--Fotter-->
