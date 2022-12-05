<?php 
 $myfile = fopen("textfile.txt", "r") or die("Error!");
 if(flock($myfile,LOCK_EX))
 {
     $number = (int)fgets($myfile);
     $number++;
     $myfile = fopen("textfile.txt", "w") or die("Error");
     fwrite($myfile, $number);
 }
 else
 {
     echo("Error!");
 }
 fclose($myfile);
?>