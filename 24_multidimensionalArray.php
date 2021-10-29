<?php

$emp = array(
    array("anmol", 18),
    array("sujal", 20)
);

$newEmp = [
    ["new anmol", 1800],
    ["new sujal", 2000]
];

for($row = 0; $row< 2; $row++){
    for($col = 0; $col< 2; $col++){
        echo $emp[$row][$col] . "  ";
    }
    echo "<br>";
}




echo "<br><br> Print in table : <br>";

echo "<table border='2px> cellpadding='5px";
echo "<tr>
        <th> Emp Name </th>
        <th> Age </th>
    </tr>";

foreach($emp as $v1){
    echo "<tr>";
    foreach($v1 as $v2){
        echo "<td> $v2 . </td>";
    }

    echo "</tr>";
}

echo "</table>";




// echo $emp[0][0];
// echo $newEmp[1][1];

// echo "<pre>";
// print_r($emp);
// echo "</pre>";
?>