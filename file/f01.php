<?php
$fileName = "F:/Files/File/file/data/f1.txt";

$fp = fopen($fileName, 'r');
while($line = fgets($fp)){
    echo $line;
}
//if we want to again use the loop we need to use rewind or else it will not work
rewind($fp);
//we can use fseek to rewind in a specific position 
//fseek($fp, 8);
//we can also send so the end after calling rewind
//fseek($fp, -1, SEEK_END); 
echo "\n";
while($line = fgets($fp)){
    echo "-" . $line;
}
fclose($fp);

$data = file($fileName);
print_r($data);
echo $data[3];


//Best way to read a whole file 
$data = file_get_contents($fileName);
echo $data;

?>