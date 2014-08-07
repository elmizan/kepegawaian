<?php
 
function __autoload($class_name)
{
	$class_name = strtolower($class_name);
 	$path = "lib/{$class_name}.php";

 	if(file_exists($path))
 	{
 		require_once $path;
 	}
 	else
 	{
 		die("File {$class_name}.php tidak dapat ditemukan.");
 	}
}
 
?>