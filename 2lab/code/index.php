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

$sqrtSum = sqrt($sumOfSquares);
echo "Корень из суммы квадратов элементов массива равен $sqrtSum<br />";

//Работа с функциями округления

$sqrt379 = sqrt(379);

// Округление до целых
$roundToInt = round($sqrt379);
echo "Квадратный корень из 379, округленный до целых: $roundToInt<br />";

// Округление до десятых
$roundToTenths = round($sqrt379, 1);
echo "Квадратный корень из 379, округленный до десятых: $roundToTenths<br />";

// Округление до сотых
$roundToHundredths = round($sqrt379, 2);
echo "Квадратный корень из 379, округленный до сотых: $roundToHundredths<br />";


$sqrt587 = sqrt(587);

// Округление в меньшую сторону
$floorValue = floor($sqrt587);

// Округление в большую сторону
$ceilValue = ceil($sqrt587);

// Сохраняем результаты в ассоциативный массив
$results = [
    'floor' => $floorValue,
    'ceil' => $ceilValue,
];

echo "Квадратный корень из 587, округленный в меньшую сторону: " . $results['floor'] . "<br />";
echo "Квадратный корень из 587, округленный в большую сторону: " . $results['ceil'] . "<br />";

//Работа с min и max

$numbers = [4, -2, 5, 19, -130, 0, 10];

$minNumber = min($numbers);
$maxNumber = max($numbers);

echo "Минимальное число: $minNumber<br />";
echo "Максимальное число: $maxNumber<br />";

//Работа с рандомом

$randomNumbers = [];

for ($i = 0; $i < 10; $i++) {
    $randomNumbers[] = rand(1, 100); // Генерируем случайное число и добавляем его в массив
}

echo "Массив из 10 случайных чисел: ";
print_r($randomNumbers); // Выводим массив
echo "<br />";

//Работа с модулем

$a = 5;
$b = -3;

$moduleDifference = abs($a - $b);
echo "Модуль разности $a и $b равен $moduleDifference<br />";


$numbers = [1, 2, -1, -2, 3, -3];
$positiveNumbers = [];

foreach ($numbers as $number) {
    $positiveNumbers[] = abs($number);
}

echo "Исходный массив: ";
print_r($numbers);
echo "<br />Новый массив с положительными числами: ";
print_r($positiveNumbers);
echo "<br />";

//Общее

$number = 2024; // Число, для которого ищем делители
$divisors = []; // Массив для хранения делителей

for ($i = 1; $i <= $number; $i++) {
    if ($number % $i == 0) { // Проверяем, делится ли $number на $i без остатка
        $divisors[] = $i; // Если да, добавляем $i в массив делителей
    }
}

echo "Делители числа $number: ";
print_r($divisors);
echo "<br />";

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0; // Начальное значение суммы
$count = 0; // Счётчик количества элементов

foreach ($numbers as $number) {
    $sum += $number; // Добавляем текущий элемент к сумме
    $count++; // Увеличиваем счётчик на 1
    if ($sum > 10) { // Проверяем, превысила ли сумма 10
        break; // Если да, прерываем цикл
    }
}

echo "Нужно сложить первых $count элементов массива, чтобы сумма получилась больше 10. <br />";


//Task15
function printStringReturnNumber() {
    echo "Строка с очень важным содержанием. С 8 марта, прекрасные дамы!<br />"; // Печать строки
    return 80324; // Возврат числового значения
}

$my_num = printStringReturnNumber(); // Вызов функции и сохранение возвращаемого значения в переменную
echo $my_num; // Вывод значения переменной

