<?php
require_once('config.php');
header("X-Robots-Tag: noindex, nofollow", true);
$url = "";
$filetype = "";
$raw_image = NULL;

//get the image url
if (isset( $_GET['i'] ) ) {
    $url = $_GET[ 'i' ];
} else {
    exit();
}

//an image will start with http, anything else is sus
if (substr( $url, 0, 4 ) != "http") {
    exit();
}

//we can only do jpg and png here
if (strpos($url, ".jpg") || strpos($url, ".jpeg") === true) {
    $filetype = "jpg";
    $raw_image = imagecreatefromjpeg($url);
} elseif (strpos($url, ".png") === true) {
    $filetype = "png";
    $raw_image = imagecreatefrompng($url);
} else {
    exit();
}

$src_imagex = imagesx($raw_image);
$src_imagey = imagesy($raw_image);
$src_aspect = $src_imagex/$src_imagey;
if ($src_imagex < $img_maxwidth) { 
  $dest_imagex = $src_imagex; 
} else {
  $dest_imagex = $img_maxwidth;
}
$dest_imagey = $dest_imagex/$src_aspect;
$dest_image = imagecreatetruecolor($dest_imagex, $dest_imagey);

imagecopyresized($dest_image, $raw_image, 0, 0, 0, 0, $dest_imagex, $dest_imagey, $src_imagex, $src_imagey);

/*
header('Content-type: image/' . $filetype); 
if ($filetype = "jpg") {
    imagejpeg($dest_image,NULL,80); //80% quality
} elseif ($filetype = "png") {
    imagepng($dest_image,NULL,8); //80% compression
}
*/

header('Content-type: image/gif');
imagegif($dest_image);

?>
