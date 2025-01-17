<?php
error_reporting(E_ERROR | E_PARSE);

header("X-Robots-Tag: noindex, nofollow", true);

require_once('vendor/autoload.php');
require_once('config.php');
require_once('functions.php');

$article_url = "";
$article_html = "";
$error_text = "";

if( isset( $_GET['loc'] ) ) { $loc = strtoupper($_GET["loc"]); }
if( isset( $_GET['a'] ) ) { $article_url = $_GET["a"]; } else {
    echo "No article target URL specified";
    exit();
}
if (substr( $article_url, 0, 23 ) != "https://news.google.com") {
    echo("Invalid article target URL");
    die();
}

/* just a hacky fix lol, maybe make this better later */
$google_redirect_page = file_get_contents($article_url);
$parts = explode('<a href="', $google_redirect_page);
$actual_article_url = explode('"',$parts[1])[0];
$article_url = $actual_article_url;

use andreskrey\Readability\Readability;
use andreskrey\Readability\Configuration;
use andreskrey\Readability\ParseException;

$configuration = new Configuration();
$configuration
    ->setArticleByLine(false);

$readability = new Readability($configuration);

if(!$article_html = file_get_contents($article_url)) {
    $error_text .=  "Failed to get article contents <br>";
}

try {
    $readability->parse($article_html);
    $readable_article = strip_tags($readability->getContent(), '<ol><ul><li><br><p><small><font><b><strong><i><em><blockquote><h1><h2><h3><h4><h5><h6>');
    $readable_article = str_replace( 'strong>', 'b>', $readable_article ); //change <strong> to <b>
    $readable_article = str_replace( 'em>', 'i>', $readable_article ); //change <em> to <i>
    
    $readable_article = clean_str($readable_article);
    
} catch (ParseException $e) {
    $error_text .= $e->getMessage() . '<br>';
}

?>
<?php require_once('modules.php'); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 2.0//EN">
<html>
<head>
  <title><?php echo $readability->getTitle() . " (" . $site_name . ")"; ?></title>
  <?php echo $metadata ?>
  <?php echo $legacy_style ?>
</head>
<body>
  <small><a href="index.php"><?php echo $site_name ?></a> | <?php echo $loc ?></small>
  <hr>
  <h1><?php echo clean_str($readability->getTitle());?></h1>
  <p><small><a href="<?php echo $article_url ?>" target="_blank">Original source</a>
  <?php
     $img_num = 0;
     $imgline_html = "| Article images:";
     foreach ($readability->getImages() as $image_url):
       //we can only do png and jpg
       if (strpos($image_url, ".jpg") || strpos($image_url, ".jpeg") || strpos($image_url, ".png") === true) {
         $img_num++;
         $imgline_html .= " <a href='image.php?loc=" . $loc . "&i=" . $image_url . "'>[$img_num]</a> ";
       }
     endforeach;
     if($img_num>0) {
       echo  $imgline_html ;
     }
   ?></small></p>
    <?php if($error_text) { echo "<p><font color='red'>" . $error_text . "</font></p>"; } ?>
    <p><font size="4"><?php echo $readable_article;?></font></p>
    <?php echo $footer ?>
 </body>
 </html>
