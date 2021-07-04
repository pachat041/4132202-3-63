<?php
echo "Hello World!!";

$a = 5;
$b = "Benz";
$c = 8.32;

echo $a . $b;
echo "<br>";
echo $b . $c;
echo "<br>";
echo $c . $a;

$array = array(5,8.32,"Benz");
echo $array[1] . "<br>";
echo $array[2] . "<br>";

var_dump($array);

$array = array(array(3,2),8,"BRU");
var_dump($array);

echo $array[0][1];

//json

echo "<br>";
$json = array("A","B",3);
$json = json_encode($json);
var_dump($jObj);

echo "<br>";
$array = array("one"=>"Mon","two"=>"Tue","Three"=>"Fri");
var_dump($array);
echo $array["two"] . "<br>";

echo "<br>";
$jStr = json_encode($array);
var_dump($jStr);

echo "<br>";
$jObj = json_decode($jStr);
echo $jObj->one . "<br>";

/////////////////////
if($a == "Benz"){
    echo "TRUE";
} 
else{
    echo $a;
}

///////////////
echo "<hr>";
echo ($b == "benz")?"TRUE":$b;

for($i = 0; $i < 5; $i++){
    echo $i . ".) Benz <br>";
}

echo "<hr>";
foreach($jObj as $key => $val){
    echo $key . ":" . $val . "<br>";
}

echo "<hr>";
$i = 0;
while($i < 5){
    echo $i++ . "<br>";
}

try{
    $i = 10;
    echo $i/0;
    include "conDB.php";
}
catch(Exceptio $e){
    $e->getMessage();
}
?>


