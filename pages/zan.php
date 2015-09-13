<?php
$sid=$_GET["sid"];
$count_json=file_get_contents("./count.json");
$countArray=json_decode($count_json,true);
$counts=$countArray["count".$sid];
$counts++;
$countArray["count".$sid]=$counts;
$file=fopen("./count.json","w");
$json=json_encode($countArray);
fwrite($file,$json);
fclose($file);
//output the response
echo $counts;
?>
