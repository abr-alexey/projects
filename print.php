<!--Функции и конструкции языка для вывода переменных-->
<?php
/*Функции echo() выводит одну или несколько строк.*/
$age=21;
$b=-5;
$c="one";
$d="two";
echo $age;
echo "<br>";
echo $c. "," .$d;
echo "<br>";
echo "$c, $d";
echo "<br>";
print $b;
echo "<br>";

/*Команда «print» выводит одну или более строку, а также содержимое, которое находится в переменных.
Главное отличие «print» от «echo» в том, что она принимает только один аргумент и всегда возвращает «1».*/
$var=2;
if ($var>5)
	print "yes";
else 
	print "no";
echo "<br>";

/*Функции printf() выводит отформатированную строку. Возвращает длину строки.*/
$model="Audi";
$year=2007;
$format="It %s %d year"; //По сути формат - это щаблон, по примеру которого выводятся данные
printf($format, $model, $year);
echo "<br>";
$format="It %2\$s year %1\$d"; //Для изменение порядка следования параметров используется n\$
printf($format, $year, $model);
echo "<br>";

$ar = 1234.56789;
$format = '%.2f'; // Описатель точности вывода значения переменной
printf($format, $ar);
echo '<br>';

/*Функции sprintf() возвращает отформатированную строку. Отличие от функции printf() состоит в возращаемых данных, printf() возвращает длину строки.*/
$model2 = "BMW";
$year2 = 2009;
$format2 = 'It %s %d year';
$a = sprintf($format2, $model2, $year2);
echo $a;
?>