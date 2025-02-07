<?php
$filePath = "F:\\Files\\File\\file\\data\\f2.txt";
$fp = fopen($filePath, "r+");
$line = fgets($fp);
echo $line;
fwrite($fp, "Uranus");
$line = fgets($fp);
echo $line;



?>