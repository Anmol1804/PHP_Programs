<?php

$colors = array("red", "green", "blue");
$new_colors = ["rred", "ggreen", "bblue"];
$mix = [10, "ten"];

// for length
$len = count($colors);
echo $len;


echo $colors[0];
echo $colors[2];
echo $new_colors[1];


// to increase readiblity will use when working with db
echo "<pre>";
print_r($colors);
echo "</pre>";
?>