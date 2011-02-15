<?php
//Open images directory
$dir = opendir("/");

//List files in images directory
while (($file = readdir($dir)) !== false)
  {
  echo "filename: " . $file . "<br />";
  }

closedir($dir);
/*
$file = fopen("./testl.txt", "r") or exit("Unable to open local file!");
//Output a line of the file until the end is reached
while(!feof($file))
  {
  echo fgets($file). "<br />";
  }
fclose($file);

$file = fopen("~/testh.txt", "r") or exit("Unable to open home file!");
//Output a line of the file until the end is reached
while(!feof($file))
  {
  echo fgets($file). "<br />";
  }
fclose($file);
*/

?> 
