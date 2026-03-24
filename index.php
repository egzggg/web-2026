<?php
$nums1 = $_POST['nums1'];
$nums2 = $_POST['nums2'];

function sumNum(int $digit) {
    return $digit % 100 + ((int)($digit / 10) % 10) + ($digit % 10);
}

function luckyNums(int $digit) {
    $firstPart = sumNum((int)($digit / 1000));
    $lastPart  = sumNum($digit % 1000);
    if ($firstPart == $lastPart) {
        echo $digit . "<br>";
    }
}

if ($nums1 >= 100000 and $nums1 <= 999999 and $nums2 >= 100000 and $nums2 <= 999999) {
    for ($num = $nums1; $num <= $nums2; $num++) {
        luckyNums($num);
    }
} else {
    echo "Входные числа должны быть шестизначными!";
}
?>