<?php
$year = $_POST['year'];

if ($year <= 30000) {
    if ($year % 4 == 0 or $year % 400 ==0) {
        echo "$year весокосный год";
    } else {
        echo "$year не весокосный год";
    } 
}else {
    echo "год больше 30000";
}
?>
