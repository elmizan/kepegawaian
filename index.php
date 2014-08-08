<?php
$page_title = "Aplikasi SIM SMPN 31 Bekasi";
include_once "header.php";
echo '<div class="container">';

if(isset($_GET['page']))
{
  $page = $_GET['page'];
  $filename = "$page.php";
  
  if(!file_exists($filename))
  {
    include "home.php";
  }
  else
  {
    include "$page.php";
  }
}
else
{
  include "home.php";
}

include_once "footer.php";
?>