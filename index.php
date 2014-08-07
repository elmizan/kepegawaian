<?php
$page_title = "Aplikasi SIM SMPN 31 Bekasi";
include_once "header.php";
echo '<div class="container">';

if(isset($_GET['page']))
{
  $page = $_GET['page'];
  $filename = "content/$page.php";
  
  if(!file_exists($filename))
  {
    include "content/home.php";
  }
  else
  {
    include "content/$page.php";
  }
}
else
{
  include "content/home.php";
}

include_once "footer.php";
?>