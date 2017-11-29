<!--Какая разница между require, require_once, include и include_once?-->
<?php 
/*Функциональная работа: все функции выполняют аналогичную работу. Все функции будут включать и оценивать конкретный файл во время выполнения кода. 
require() и include() идентичны почти во всём, за исключением того, как они обрабатывают неудачное выполнение. include() выдаёт "Warning!", а require() выдаёт "Fatal Error". http://www.coders-library.ru/news-view-307.html https://puzzleweb.ru/php/26_inc_files.php */

/*Поведение include_once идентично инструкции include, с той лишь разницей, что если код из файла уже был один раз подключен, он не будет подключен и выполнен повторно.*/

//Подключение файла, вызов переменной и её увеличение на "1"
include_once("connection_files_test.php"); //файл "connection_files_test.php" который вызывает include_once
echo "Number=" . $a . "<br/>";
$a=$a+1; //Или $a++; Увеличиваем переменную на "1"
echo "Number+1=" . $a . "<br/><br/>";

for($i=9;$i<11;$i++){ //число входящее в диапазон (9,11) вывести, а потом прибавить "1"
include_once("connection_files_test.php"); 
echo "before/after-".$c."<br/>"; 
$c=$c+1; //Или $a++; Увеличиваем переменную на "1" 
} echo "<br/>";

/*Инструкция include позволяет подключать и присоединять к вашему PHP-сценарию другие сценарии. При запуске программы интерпретатор просто заменит инструкцию на содержимое подключаемого файла.*/

for($i=9;$i<11;$i++){ 
include("connection_files_test.php"); 
echo "before/after-".$c."<br/>"; 
$c=$c+1;
} echo "<br/>";

//Подклчение внутри функции
function fructs(){
	global $d; //Объявление глобальной переменной
	include("connection_files_test.php");
	echo "conclusion=$d <br/>";
}
fructs();
echo "conclusion=$d <br/>";

/*Инструкции require и require_once работают идентично include и include_once за исключением лишь одной особенности. Если подключаемый файл не будет найден, выполнение скрипта будет остановлено, в то время как include и include_once выводят предупреждение и продолжают выполнение скрипта.*/
?>