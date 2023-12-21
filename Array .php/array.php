<?php
    $names=array("Niya","Anjali","Dhanalakshmi","Manjima","Siya");
    echo"<b>Normal Array:</b><br>";
    print_r($names);
    echo"<br><br><b>Ascending Sort:</b><br>";
    asort($names);
    print_r($names);
    echo"<br><br><b>Descenting Sort:</b><br>";
    arsort($names);
    print_r($names);
?>
