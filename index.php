<?php
$date = $_POST['birthdate'];
list($year, $month, $day) = explode('-', $date);
$year = (int)$year;
$month = (int)$month;
$day = (int)$day;

$DATE_BIRTHD = $month * 100 + $day;

switch (true) {
    
    case ($DATE_BIRTHD >= 120 && $DATE_BIRTHD <= 218):
        echo "Водолей";
        break;
        case ($DATE_BIRTHD >= 219 && $DATE_BIRTHD <= 320):
        echo "Рыбы";
        break;
    case ($DATE_BIRTHD >= 321 && $DATE_BIRTHD <= 419):
        echo "Овен";
        break;
    case ($DATE_BIRTHD >= 420 && $DATE_BIRTHD <= 520):
        echo "Телец";
        break;
    case ($DATE_BIRTHD >= 521 && $DATE_BIRTHD <= 621):
        echo "Близнецы";
        break;
    case ($DATE_BIRTHD >= 622 && $DATE_BIRTHD <= 722):
        echo "Рак";
        break;
    case ($DATE_BIRTHD >= 723 && $DATE_BIRTHD <= 822):
        echo "Лев";
        break;
    case ($DATE_BIRTHD >= 823 && $DATE_BIRTHD <= 922):
        echo "Дева";
        break;
    case ($DATE_BIRTHD >= 923 && $DATE_BIRTHD <= 1023):
        echo "Весы";
        break;
    case ($DATE_BIRTHD >= 1024 && $DATE_BIRTHD <= 1122):
        echo "Скорпион";
        break;
    case ($DATE_BIRTHD >= 1123 && $DATE_BIRTHD <= 1221):
        echo "Стрелец";
        break;
    default:
        echo "Козерог";
}
?>