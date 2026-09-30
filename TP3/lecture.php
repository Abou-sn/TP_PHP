<?php
//$file="data.txt";
//$fp=fopen($file,"r"); //r w a
////read write ou append
////Pour r et w le pointeur est placé au debut, donc write peut ecraser les données existantes
////while(!feof($fp)){
////    $data = fgets($fp);
////    echo "<pre>";
////    print_r($data);
////    echo "</pre>";
////}

//$file="data.csv";
//$fp=fopen($file,"r"); //r w a
//
//$data=fgetcsv($fp,1024,",");
//echo "<pre>";
//print_r($data);
//echo "</pre>";


$file="data.csv";
$fp=fopen($file,"r"); //r w a

$data=fgetcsv($fp,1024,",");

echo "<table>";
echo "<tr>";
foreach($data as $d){
    echo "<th>".$d."</th>";
}
echo "</tr>";

while($data=fgetcsv($fp,1024,",")){
    echo "<tr>";
    foreach($data as $d){
        echo "<td>".$d."</td>";
    }
    echo "</tr>";
}
echo "</table>";


fclose($fp);