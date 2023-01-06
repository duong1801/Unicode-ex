<?php
//1. Vẽ bảng cửu chương sử dụng vòng lặp php

for ($i = 1; $i <= 10; $i++) {
    echo "Bảng nhân $i" . "<br>";
    for ($j = 1; $j <= 10; $j++) {
        $multiply = $i * $j;
        echo $i . "*" . $j . "=" . $multiply . "<br>";
    }
    echo "<br>";
}

//2. 2. Tính tổng các số nguyên tố từ 1 đến N
$n = 11;
$total = 0;
for ($i = 2; $i <= $n; $i++) {
    $count = 0;
    for ($j = 2; $j <= sqrt($i); $j++) {
        if ($i % $j == 0)
            $count++;
    }
    if ($count == 0)
        $total += $i;
}
// echo "Tổng các số nguyên tố từ 1 đến $n là: $total";

//3 . Hiển thị N số Fibonaci đầu tiên

$n = 11;
$a = 0;
$b = 1;
for ($i = 1; $i <= $n; $i++) {
    $fibonaci = $a + $b;
    $b = $a;
    $a = $fibonaci;
    echo $fibonaci . ' ';
}