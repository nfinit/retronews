<?php
// Standard metadata for all pages
$metadata = "
  <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
  <meta name=\"viewport\" CONTENT=\"width=device-width, initial-scale=1.0\">
";
// Standard header
$header = "
  <center><h1>$site_title</h1></center>
  <hr>
";
// Standard footer
$generated_date = date("j F Y, g:i a");
$system_hostname = gethostname();
$footer = "
  <hr>
  <p><small>Generated $generated_date on $system_hostname</small></p>
";
?>
