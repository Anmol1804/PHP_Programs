<?php

$a = array(
    "bill" => 10,
    "anmol" => 18
);

$n = [
    "newBill" => 100,
    "newAnmol" => 1800,
    3 => "lol"
];

echo $a["anmol"];
// echo $a[0]; => will throw error

echo $n["newBill"];
echo $n[3];

var_dump($a);
?>