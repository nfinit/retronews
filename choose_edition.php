<?php

require_once('config.php');

if( isset( $_GET['loc'] ) ) {
    $loc = $_GET["loc"];
}

require_once('modules.php');

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 2.0//EN">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<html>
<head>
	<title><?php echo $site_name ?> (Choose edition)</title>
  <?php echo $metadata ?>
  <?php echo $legacy_style ?>
</head>
<body>
    <?php echo $header ?>
    <center>
    <p><h2>EDITIONS</h2></p>
    <p><a href='index.php?section=nation&loc=US'>United States</a></p>
    <p><a href='index.php?section=nation&loc=JP'>Japan</a></p>
    <p><a href='index.php?section=nation&loc=UK'>United Kingdom</a></p>
    <p><a href='index.php?section=nation&loc=CA'>Canada</a></p>
    <p><a href='index.php?section=nation&loc=DE'>Deutschland</a></p>
    <p><a href='index.php?section=nation&loc=IT'>Italia</a></p>
    <p><a href='index.php?section=nation&loc=FR'>France</a></p>
    <p><a href='index.php?section=nation&loc=AU'>Australia</a></p>
    <p><a href='index.php?section=nation&loc=TW'>Taiwan</a></p>
    <p><a href='index.php?section=nation&loc=NL'>Nederland</a></p>
    <p><a href='index.php?section=nation&loc=BR'>Brasil</a></p>
    <p><a href='index.php?section=nation&loc=TR'>Turkey</a></p>
    <p><a href='index.php?section=nation&loc=BE'>Belgium</a></p>
    <p><a href='index.php?section=nation&loc=GR'>Greece</a></p>
    <p><a href='index.php?section=nation&loc=IN'>India</a></p>
    <p><a href='index.php?section=nation&loc=MX'>Mexico</a></p>
    <p><a href='index.php?section=nation&loc=DK'>Denmark</a></p>
    <p><a href='index.php?section=nation&loc=AR'>Argentina</a></p>
    <p><a href='index.php?section=nation&loc=CH'>Switzerland</a></p>
    <p><a href='index.php?section=nation&loc=CL'>Chile</a></p>
    <p><a href='index.php?section=nation&loc=AT'>Austria</a></p>
    <p><a href='index.php?section=nation&loc=KR'>Korea</a></p>
    <p><a href='index.php?section=nation&loc=IE'>Ireland</a></p>
    <p><a href='index.php?section=nation&loc=CO'>Colombia</a></p>
    <p><a href='index.php?section=nation&loc=PL'>Poland</a></p>
    <p><a href='index.php?section=nation&loc=PT'>Portugal</a></p>
    <p><a href='index.php?section=nation&loc=PK'>Pakistan</a></p>
    </center>
    <?php echo $footer ?>
</body>
</html>
