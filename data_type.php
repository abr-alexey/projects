<!--Расскажите про типизацию данных в PHP. Сколько базовых типов данных поддерживает PHP. Опиши их.
Создай файл data_type.php и создай в нем переменные каждого типа. Какого типа будет значение, если сложить числа float и integer? Преобразуй переменную типа float в integer.-->
<?php
/* PHP поддерживает восемь простых типов данных (переменных):4 скалярных типа, 2 смешанных, 2 специальных, 3 псевдотипов.*/
$a=true; //Он выражает истинность значения - это может быть либо TRUE, либо FALSE. 

$b1=50; //Десятичное число
$b2=-15; //Отрицательное число
$b3=025; //Восьмеричное число
$b4=0X1A; //Шестнадцатеричное число

/*Double - вещественное число довольно большой точности (ее должно хватить для подавляющего большинства математических вычислений).*/
$c1=1.5;
$c2=1.2e3;
$c3=7E-10;

/*Строка в PHP - это набор символов любой длины.*/
$d="Example text";
echo "$d <br>";

/*Массив в PHP - это упорядоченный набор данных, в котором устанавлено соответствие между значением и ключом. PHP позволяет создавать массивы любой сложности.*/
$colors=array("red", "while", "green", "yellow"); //Индекс может быть назначен автоматически (индекс всегда начинается с 0):
echo "colors: " .$colors[0]. "," .$colors[1]. "," .$colors[2]. "," .$colors[3]; echo "<br>";
//или индекс может быть назначен вручную:
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";
echo count($cars); //Функция позволяющая получить длину массиваecho 
echo "<br>";
//Выести на печать все элементы массива можно использовав цикл foreach
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

/*Объект является одним из базовых понятий объектно-ориентированного программирования. Внутренняя структура объекта похожа на хэш, за исключением того, что для доступа к отдельным элементам и функциям используется оператор ->, а не квадратные скобки.*/
class f
{
     function do_f()
     {
         echo "Doing f."; 
     }
}
$bar = new f;
$bar->do_f();
/*Тип resource-это специальная переменная, содержащая ссылку на внешний ресурс. Ресурсы создаются и используются специальными функциями.*/
/*Специальное значение NULL говорит о том, что эта переменная не имеет значения. NULL - это единственно возможное значение типа NULL (пустой тип).*/
$var = NULL; echo "<br>";
/*Псевдотип mixed (смешанный). mixed говорит о том, что параметр может принимать множество (но не обязательно все) типов. gettype(), например, принимает все типы PHP, тогда как str_replace() принимает строки и массивы.*/
/*Псевдотип number (числовой). number говорит о том, что параметр может быть либо integer, либо float.*/
/*Псевдотип callback (обратного вызова). call_user_func() или usort() принимают в качестве параметра определенные пользователем callback-функции. Callback-функции могут быть не только простыми функциями, но также методами объектов, включая статические методы классов.*/
function callback_function() { // Простой пример
     echo 'hello world!';
}
call_user_func('callback_function'); echo "<br>";

/*Примером автоматического преобразования типа является оператор умножения "*". Если какой-либо из операндов является float, то все операнды интерпретируются как float, и результатом также будет float. В противном случае операнды будут интерпретироваться как integer и результат также будет integer. Обратите внимание, что это НЕ меняет типы самих операндов; меняется только то, как они вычисляются и сам тип выражения.*/
$float=0.15;
$integer=5;
$sum=$integer+$float;
echo $sum; echo "<br>";// Сумма выводится в виде вещественного типа

$float2=1.05;
$float2=(int)$float2; // Преобразование вещественного числа в целое
echo $float2;
?>