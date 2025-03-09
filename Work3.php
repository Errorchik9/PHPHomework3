<?php
$st = [
    ['name' => 'Маша', 'age' => 22, 'grades' => [5, 4, 5]],
    ['name' => 'Витя', 'age' => 23, 'grades' => [3, 4, 2]],
    ['name' => 'Олег', 'age' => 21, 'grades' => [4, 5, 5]],
];
$res = '';
foreach ($st as $st) {
    $name = $st['name'];
    $gr = $st['grades'];
    $average = array_sum($gr) / count($gr);
    if ($av >= 4) {
        $av = round($av, 2);
        $res .= "$name: $av";
    }
}
echo trim($res);
