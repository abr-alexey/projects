<!--Как в PHP объявляются переменные, какие символы допустимы в именах переменных. Разобраться что такое "camel case" в именах переменных.-->

<!--Название переменной не может начинаться с цифры-->
<!--camel case - стиль написания составных слов, при котором несколько слов пишутся слитно без пробелов, при этом каждое слово внутри фразы пишется с заглавной буквы.-->
<?php 
$a=1; // Переменная имеет числовой тип
$b=1.5; 
$c1_p=-10.55;
$_d=true; 
$text="Text"; // Переменная имеет строковый тип

echo $a; // Оператор вывода
echo "<br>";

echo "variable = $b <br>"; 

echo $a. "," .$b. "," .$c1_p. "," .$_d. "," .$text; 

define("pi", 3.14); //Объявление константы, число
echo "<br>";
echo pi;

define("tx", "const"); //Объявление константы, текст
echo "<br>";
echo tx;
?>