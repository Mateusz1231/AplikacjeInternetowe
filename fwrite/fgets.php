<?php
$myfile = fopen("newfile.txt","t") or die("Unable to open the file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
?>