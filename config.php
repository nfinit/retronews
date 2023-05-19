<?php
  $site_name  = "Localnet Newsfeed";
  $site_title = $site_name;
  $loc        = "US";
  $site_font = "sans-serif";
  $img_maxwidth = 600;
  $inline_style = "
  a             { color: RoyalBlue;    }
  a:visited     { color: DodgerBlue;   }
  a:hover       { color: DodgerBlue;   }
  a         img { border: 0;           }
  a:hover   img { border: 0;           }
  a:visited img { border: 0;           }
  
  body { background-color: white;
         font-family: $site_font; }
  span { display: inline-block; }
  
  .no-border { border: none; }
  ";
  $stylesheet = "res/style.css";
?>
