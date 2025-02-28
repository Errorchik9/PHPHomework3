<?php

$students = [
    ['name' => 'Маша', 'age' => 22, 'grades' => [5, 4, 5]],
    ['name' => 'Витя', 'age' => 23, 'grades' => [3, 4, 2]],
    ['name' => 'Олег', 'age' => 21, 'grades' => [4, 5, 5]],
];

$result = [];

foreach ($students as $student) {
    $sr = array_sum($student['grades']) / count($student['grades']);
    if ($sr>= 4) {
        $av = sprintf('%.2f', $sr);
        $result[] = "{$student['name']}: $av";
    }
}

echo implode(' ', $result);

?>