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
// Standard header
$header = "
  <center><h1>$site_title</h1>
  <small>Prepared $generated_time</small></center>
  <hr>
";
// Standard footer
$footer = "
  <hr>
  <center><p><small>Prepared $generated_time on $system_hostname</small></p></center>
";
?>
