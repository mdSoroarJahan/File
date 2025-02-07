<?php
 $filePath = "F:\\Files\\File\\file\\data\\f2.txt";
// $existingData = file_get_contents($filePath);
// $fp = fopen($filePath, "w");
// fwrite($fp, $existingData);
// fwrite($fp, "Soroar Jahan\n");
// fwrite($fp, "Farhan Mahmud\n");
// fwrite($fp, "Talha\n");
// fclose($fp);

//there is some problem with saving data in w mode so we use append mode

$fp = fopen($filePath, "a");
fwrite($fp, "Soroar is the best.\n");

?>