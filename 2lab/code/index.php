<?php

// 1st Task

/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";


// Write your code here:
$order = &$very_bad_unclear_name;
$order .= ', extra garlic sauce, fries and a Dobry Cola';


// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name." . "<br>";


// 2nd Task

$integerValue = 10; // Объявляем переменную с целочисленным значением
echo $integerValue . "<br>"; // Выводим значение переменной на экран и делаем перевод строки

$floatingValue = 3.14; // Объявляем переменную с дробным значением
echo $floatingValue . "<br>";

echo (6 + 6) . "<br>"; // Выводим результат арифметической операции, равный 12

$lastMonth = 1187.23;
$thisMonth = 1089.98;
$difference = $lastMonth - $thisMonth; // Рассчитываем разницу

echo "Насколько больше я потратил в прошлом месяце, чем в этом месяце?" . "<br>" .
    "В прошлом месяце я потратил $lastMonth, а в этом месяце я потратил $thisMonth." . "<br>" .
    "Получается, что я потратил на $difference больше!" . "<br>";
