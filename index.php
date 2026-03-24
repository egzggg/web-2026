<?php
$expression = $_POST['expression'];

$expressionArray = explode(' ', $expression);
$arrayForChar = [];
foreach ($expressionArray as $char) {
    if (is_numeric($char)) {
        array_push($arrayForChar, (int)$char);
    } else {
        $ch2 = array_pop($arrayForChar);
        $ch1 = array_pop($arrayForChar);
        switch ($char) {
            case '+':
                    array_push($arrayForChar, $ch1 + $ch2);
                    break;
                case '-':
                    array_push($arrayForChar, $ch1 - $ch2);
                    break;
                case '*':
                    array_push($arrayForChar, $ch1 * $ch2);
                    break;
                case '/':
                    if ($ch2 == 0){
                        array_push($arrayForChar, $ch1 / 1);}
                    else {
                        array_push($arrayForChar, $ch1 / $ch2);}
                    break;
        }
    }
}

echo $arrayForChar[0];
?>