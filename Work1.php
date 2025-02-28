<?php
$ocenki = [5, 4, 3, 5, 4];
{
    $sum = array_sum($ocenki);
    $zn = count($ocenki);
    $sr = $sum / $zn;
    echo "Средняя оценка: " . $sr;
}
?>