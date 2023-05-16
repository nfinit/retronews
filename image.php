<?php

    require_once('config.php');
    require_once('modules.php');

    header("X-Robots-Tag: noindex, nofollow", true);
    $url = "";
    $loc = "US";

    if( isset( $_GET['loc'] ) ) {
        $loc = strtoupper($_GET["loc"]);
    }
    
    //get the image url
    if (isset( $_GET['i'] ) ) {
        $url = $_GET[ 'i' ];
    } else {
        exit();
    }

    //we can only do jpg and png here
    if (strpos($url, ".jpg") && strpos($url, ".jpeg") && strpos($url, ".png") != true ) {
        echo strpos($url, ".jpg");
        echo "Unsupported file type :(";
        exit();
    }

    //image needs to start with http
    if (substr( $url, 0, 4 ) != "http") {
        echo("Image failed :(");
        exit();
    }

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 2.0//EN">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 
 
<html>
<head>
  <title><?php echo $site_name . ' (Image Viewer)' ?></title>
  <?php echo $metadata ?>
  <style><!--
  <?php echo $base_style ?>
  //--></style>    
</head>
<body><center>
    <img src="image_compressed.php?i=<?php echo $url; ?>">
    <p><small><b>Image:</b> <?php echo $url ?></small></p>
    <small><a href="<?php echo $_SERVER['HTTP_REFERER'] . '?loc=' . strtoupper($loc) ?>">< Back to article</a> | <a href="index.php">Index</a></small>
 </center></body>
 </html>
