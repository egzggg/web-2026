<?php
$year = $_POST['year'];

if ($year <= 30000) {
    if ($year % 4 == 0 or $year % 400 ==0) {
        echo "YES";
    } else {
        echo "NO";
    } 
}else {
    echo "год больше 30000";
}
?>
