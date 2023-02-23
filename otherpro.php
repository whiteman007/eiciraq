<!--Header-->
<?php 
    $Title = "منتجات اخرى";
    $Level1 = "Home الرئيسية";
  	$Level2 = "other products منتجات اخرى";
  	$Level3;
  	$Link1 = "index.php";
  	$Link2;
  	$Link3;
    include_once 'Header.php';
?>
    <!--Header-->

    <!--bootstrab-->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="styles/bootstrap-mod.css">
    <!--bootstrab-->
    <!--LINKS-->

    <link rel="stylesheet" href="styles/style-pro.css">
    <link rel="stylesheet" href="styles/hover.css">
    <!--LINKS-->

    <!--BODY-->
    <div class="row">
        <div class='col-md-3 col-sm-6 col-xs-12 probox'>
            <a href="other1.php">
                <div class='pro'><img src='thumbnails/other/1.png'></div>
                <div class='proid'>
                    <p> المصباح المنضدي</p>
                </div>
                <span class="flyout hidden">&nbsp;</span>
            </a>
        </div>
        <div class='col-md-3 col-sm-6 col-xs-12 probox'>
            <a href="other2.php">
                <div class='pro'><img src='thumbnails/other/2.png'></div>
                <div class='proid'>
                    <p>سخان شمسي</p>
                </div>
                <span class="flyout hidden">&nbsp;</span>
            </a>
        </div>
        <div class='col-md-3 col-sm-6 col-xs-12 probox'>
            <a href="other3.php">
                <div class='pro'><img src='thumbnails/other/3.png'></div>
                <div class='proid'>
                    <p>الفانوس الالكتروني </p>
                </div>
            </a>
            <div class="flyout hidden">&nbsp;</div>
        </div>

    </div>
    <!--BODY-->

    <!--Fotter-->
    <?php include_once 'Footer.php'; ?>
        <!--Fotter-->
