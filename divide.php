<?php
function isValidInteger($str) {
    return preg_match('/^-?\d+$/', $str);
}

$num1_str = trim(fgets(STDIN));
$num2_str = trim(fgets(STDIN));

if (!isValidInteger($num1_str) || !isValidInteger($num2_str)) {
    fwrite(STDERR, "Введите, пожалуйста, число\n");
    exit(1);
}

$num1 = (int)$num1_str;
$num2 = (int)$num2_str;

if ($num2 === 0) {
    fwrite(STDERR, "Делить на 0 нельзя\n");
    exit(1);
}

$result = $num1 / $num2;
echo $result . PHP_EOL;

?>
