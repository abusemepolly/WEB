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


//Task 15

function printStringReturnNumber() {
    echo "Строка с очень важным содержанием. С 8 марта, прекрасные дамы!<br />"; // Печать строки
    return 80324; // Возврат числового значения
}

$my_num = printStringReturnNumber(); // Вызов функции и сохранение возвращаемого значения в переменную
echo $my_num . "<br />"; // Вывод значения переменной


//Task 16

function increaseEnthusiasm($str) {
    return $str . "!";
}

function repeatThreeTimes($str) {
    return $str . $str . $str;
}

echo increaseEnthusiasm("Я люблю всех вокруг, кроме тех, кого не люблю") . "<br />";

echo repeatThreeTimes("WEB") . "<br />";

echo increaseEnthusiasm(repeatThreeTimes("Ура")) . "<br />";

function cut($str, $length = 10) {
    return mb_substr($str, 0, $length);
}

echo cut("Hello, world!", 5) . "<br />";
echo cut("Hello, world!") . "<br />";

function printArrayRecursively($arr, $index = 0) {
    if ($index < count($arr)) {
        echo $arr[$index] . "<br />";
        printArrayRecursively($arr, $index + 1);
    }
}

$numbers = [1, 2, 3, 4, 5];
printArrayRecursively($numbers);

function sumDigitsUntilSingleDigit($number) {
    $sum = array_sum(str_split($number));
    if ($sum > 9) {
        return sumDigitsUntilSingleDigit($sum);
    } else {
        return $sum;
    }
}

echo sumDigitsUntilSingleDigit(987) . "<br />"; 


//Task 17

// Заполнение массива строками 'x', 'xx', 'xxx', ...
$array = [];
for ($i = 1; $i <= 5; $i++) {
    $array[] = str_repeat('x', $i);
}
print_r($array);
echo "<br /><br />";

// Функция arrayFill
function arrayFill($value, $count) {
    return array_fill(0, $count, $value);
}
print_r(arrayFill('x', 5));
echo "<br /><br />";

// Сумма элементов двухмерного массива
$numbers = [[1, 2, 3], [4, 5], [6]];
$sum = 0;
foreach ($numbers as $part) {
    $sum += array_sum($part);
}
echo "Сумма элементов массива: $sum<br /><br />";

// Создание двухмерного массива с циклами
$array = [];
$value = 1;
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $array[$i][$j] = $value++;
    }
}
print_r($array);
echo "<br /><br />";

// Математические операции с элементами массива
$elements = [2, 5, 3, 9];
$result = $elements[0] * $elements[1] + $elements[2] * $elements[3];
echo "Результат: $result<br /><br />";

// Вывод данных из ассоциативного массива
$user = ['name' => 'Иван', 'surname' => 'Иванов', 'patronymic' => 'Иванович'];
echo "{$user['surname']} {$user['name']} {$user['patronymic']}<br /><br />";

// Вывод текущей даты из массива
$date = ['year' => date('Y'), 'month' => date('m'), 'day' => date('d')];
echo "Текущая дата: {$date['year']}-{$date['month']}-{$date['day']}<br /><br />"; 

$arr = ['a', 'b', 'c', 'd', 'e'];
echo count($arr); // Выведет количество элементов массива
echo "<br />";

echo end($arr); // Выведет последний элемент массива
echo "<br />";

// Предпоследний элемент можно получить, отняв один от общего количества элементов массива
echo $arr[count($arr) - 2]; // Выведет предпоследний элемент массива


//Task 18 

function isSumGreaterThanTen($num1, $num2) {
    return ($num1 + $num2) > 10;
}

var_dump(isSumGreaterThanTen(5, 6)); // true
var_dump(isSumGreaterThanTen(4, 5)); // false

function areNumbersEqual($num1, $num2) {
    return $num1 === $num2;
}

var_dump(areNumbersEqual(10, 10)); // true
var_dump(areNumbersEqual(10, 11)); // false


// Сокращенное условие
$test = 0; // Значение переменной для проверки
echo $test == 0 ? 'верно' : '';
echo "<br />";

// Условие с диапазоном чисел
$age = 25; // Значение переменной для проверки
if ($age < 10 || $age > 99) {
    echo 'Число меньше 10 или больше 99';
} else {
    $sum = array_sum(str_split((string)$age));
    echo $sum < 10 ? 'Сумма цифр однозначна' : 'Сумма цифр двузначна';
}
echo "<br />";

// Условие для массива с тремя элементами
$arr = [1, 2, 3]; 
if (count($arr) === 3) {
    echo array_sum($arr);
    echo "<br>";
}


//Task 19

for ($i = 1; $i <= 20; $i++) {
    echo str_repeat('x', $i) . "<br />";
}


//Task 20

// Среднее арифметическое элементов массива
$numbers = [1, 2, 3, 4, 5];
$average = array_sum($numbers) / count($numbers);
echo "Среднее арифметическое: $average<br /><br />";

// Сумма чисел от 1 до 100
$sum = array_sum(range(1, 100));
echo "Сумма чисел от 1 до 100: $sum<br /><br />";

// Массив с квадратными корнями чисел
$numbers = [1, 4, 9, 16, 25];
$squareRoots = array_map('sqrt', $numbers);
echo "Массив квадратных корней: ";
print_r($squareRoots);
echo "<br /><br />";

// Массив с числами и ключами как буквы алфавита
$alphabet = range('a', 'z');
$numbers = range(1, 26);
$combined = array_combine($alphabet, $numbers);
echo "Массив с ключами алфавита: ";
print_r($combined);
echo "<br /><br />";

// Сумма пар чисел в строке
$str = '1234567890';
$sumPairs = (int)($str[0].$str[1]) + (int)($str[2].$str[3]) + (int)($str[4].$str[5]) + (int)($str[6].$str[7]) + (int)($str[8].$str[9]);
echo "Сумма пар чисел: $sumPairs<br />";
