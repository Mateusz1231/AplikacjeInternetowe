<?php
$myfile = fopen("webdictionary","r") or die("Unable to open the file!");
echo fgets($myfile);
fclose($myfile);
?>