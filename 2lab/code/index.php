<?php

// 1st Task

/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";


// Write your code here:
$order = &$very_bad_unclear_name;
$order .= ', extra garlic sauce, fries and a Dobry Cola';


// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name<br />";


// 2nd Task

$integerValue = 10; // Объявляем переменную с целочисленным значением
echo $integerValue . "<br />"; // Выводим значение переменной на экран и делаем перевод строки

$floatingValue = 3.14; // Объявляем переменную с дробным значением
echo $floatingValue . "<br />";

echo (6 + 6) . "<br />"; // Выводим результат арифметической операции, равный 12

$lastMonth = 1187.23;
$thisMonth = 1089.98;
$difference = $lastMonth - $thisMonth; // Рассчитываем разницу

echo "Насколько больше я потратил в прошлом месяце, чем в этом месяце?<br />" .
    "В прошлом месяце я потратил $lastMonth, а в этом месяце я потратил $thisMonth<br />" .
    "Получается, что я потратил на $difference больше!<br />";


// Task 11

$numLanguages = 4; // Количество изученных языков программирования
$months = 11; // Количество месяцев, затраченных на обучение
$days = $months * 16; // Общее количество дней, затраченных на обучение (16 дней в месяц)
$daysPerLanguage = $days / $numLanguages; // Среднее количество дней на изучение каждого языка

echo "В среднем Мэг потратит $daysPerLanguage дня на изучение языка программирования.<br />";


// Task 12

$power = 8 ** 2;

echo "Значение числа 8 в квадрате – $power<br />";


// Task 13

$myNum = 17;
$answer = $myNum;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $myNum;

echo $answer . "<br />";


//Task 14

//Работа с %

$a = 10;
$b = 3;
$remainder = $a % $b; // Используем оператор % для нахождения остатка от деления

echo "Остаток от деления $a на $b равен $remainder<br />";


if ($a % $b == 0) {
    $result = $a / $b; // Если делится без остатка, найдем результат деления
    echo "Делится. Результат деления: $result<br />";
} else {
    $remainder = $a % $b; // Если есть остаток, выведем его
    echo "Делится с остатком. Остаток от деления: $remainder<br />";
}

//Работа со степенью и корнем

$st = pow(2, 10);
echo "2 в 10 степени равно $st<br />";

$sqrt = sqrt(245);
echo "Квадратный корень из 245 равен $sqrt<br />";

$elements = [4, 2, 5, 19, 13, 0, 10];
$sumOfSquares = 0;

foreach ($elements as $element) {
    $sumOfSquares += pow($element, 2); // Суммируем квадраты элементов
}
