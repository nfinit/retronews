<?php
// Common variables
$system_hostname = gethostname();
$generated_time = date("j F Y, g:i a");
// Standard metadata for all pages
$metadata = "
  <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
  <meta name=\"viewport\" CONTENT=\"width=device-width, initial-scale=1.0\">
";
if (file_exists($stylesheet)) { 
  $metadata = $metadata . "<link rel=\"stylesheet\" href=\"" . $stylesheet . "\">\n"; 
}
// Legacy style
$legacy_style = "
  <style><!--
  $inline_style
  //--></style>
";
// Standard header
$header = "
  <div id=\"header\">
    <center><h1>$site_title</h1>
    <p>$generated_time</p>
    <hr>
  </div>
";
// Standard footer
$footer = "
  <div id=\"footer\">
    <hr>
    <p><small>
      <a href=\"index.php\">$site_name</a>  
      generated $generated_time on $system_hostname
    </small></p>
  </div>
";
// Feedbar
$feedbar = "
    <center>
    <b><a href=\"choose_edition.php\">$loc EDITION</a></b> |
    <a href=\"index.php?loc=$loc\">TOP</a> 
    <a href=\"index.php?section=world&loc=$loc\">WORLD</a> 
    <a href=\"index.php?section=nation&loc=$loc\">NATION</a> 
    <a href=\"index.php?section=business&loc=$loc\">BUSINESS</a> 
    <a href=\"index.php?section=technology&loc=$loc\">TECHNOLOGY</a> 
    <a href=\"index.php?section=entertainment&loc=$loc\">ENTERTAINMENT</a> 
    <a href=\"index.php?section=sports&loc=$loc\">SPORTS</a> 
    <a href=\"index.php?section=science&loc=$loc\">SCIENCE</a> 
    <a href=\"index.php?section=health&loc=$loc\">HEALTH</a><br>
    <hr>
    </center>
";
?>
