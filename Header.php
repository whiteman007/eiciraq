<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?= isset($Title) ? $Title : "Page"?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="شركة قيثارة للصناعات الالكترونية">
<meta name="keywords" content="قيثارة,شركة قيثارة,شركة قيثارة صناعات الكترونية,الكترونية,شركة صناعات الكترونية">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/header-footer.css">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-88263277-1', 'auto');
  ga('send', 'pageview');

</script>
  </head>

  <body >
  <div class="container">
	<div class="header-container">
	  <div class="row header-top">
		<div class="col-sm-4">
		  <h3 style="padding-top: 15px;" class="LOGOEN">Electronic Industries Company</h3>
		</div>
		<div class="col-sm-4">
		  <img src="image/logo-inverse.png" style="max-width: 200px;">
		</div>
		<div class="col-sm-4">
		  <img class="LOGOAR" src="image/quetharaW.png"/>
		</div>
	  </div>
	  <div class="row header-bottom">
		<div class="col-xs-12">
            <?php if(isset($Level1)){  echo '<a href="', isset($Link1)? $Link1 :'#', '"><div class="path-button">', $Level1 ,'</div></a>';}?>
            <?php if(isset($Level2)){  echo '<a href="', isset($Link2)? $Link2 :'#', '"><div class="path-button">', $Level2, '</div></a>';}?>
            <?php if(isset($Level3)){  echo '<a href="', isset($Link3)? $Link3 :'#', '"><div class="path-button">', $Level3, '</div></a>';}?>
		</div>
	  </div>
	</div>