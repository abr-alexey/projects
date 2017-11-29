<?php
$list=array(34, 1, 529, -78, 89.7, 1243); //Созданный массив
print "<pre>". print_r ($list, 1) . "</pre>"; //Вывод созданного массива
print "Max number in array (max/min): " . max($list) . "</br>"; //Вывод максимального значения спомощью встроенной функции max

$x=0; //Создадим переменную x для вывода максимального значения из массива $list
foreach ($list as $value) 
     if ($x<$value) $x=$value; 
print "Max number in array (foreach): " . $x . "</br>"; //Вывод максимального значения спомощью функции foreach

$y=0; //Создадим переменную y для вывода максимального значения из массива $list
for ($i=0; $i<count($list); $i++) { //count—подсчитывает количество элементов массива или что-то в объекте
     if ($y<$list[$i]) $y=$list[$i]; 
} 
print "Max number in array (for): " . $y . "</br>"; //Вывод максимального значения спомощью функции for
?>