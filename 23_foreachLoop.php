<?php

$colors = array("red", "green", "blue");

$a = array(
    "bill" => 10,
    "anmol" => 18
);


foreach($colors as $value){
    echo $value . "   ";
}

echo "<br><br>";

foreach($a as $key => $value){
    echo "$key  =  $value  <br>";
}

?>