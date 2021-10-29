<?php

function hello(){
    echo "Hello everyone <br>";
}

// 0 is default value
function sum($a = 0, $b = 0){
    echo ($a+$b);
}

function returnVals($a,$b){
    return $a+$b;
}

hello();

sum();
sum(10);
// sum(,10); will throw error
sum(10,20);

echo returnVals(1000,1);


// yet to be done pass by refernce
// variable funcs
// recursives
?>