<!--Что такое виртуальный метод? Создай файл cat.php с классом Cat наследующимся от класса Animal. В данном файле создай виртуальный метод-->
<?php
/*Виртуальный метод (виртуальная функция) — в объектно-ориентированном программировании метод (функция) класса, который может быть переопределён в классах-наследниках так, что конкретная реализация метода для вызова будет определяться во время исполнения. Виртуальные методы — один из важнейших приёмов реализации полиморфизма. Полиморфизм (многоформенность) является следствием идеи наследования. В общих словах, полиморфность класса — это свойство базового класса использовать функции производных классов, даже если на момент определения еще неизвестно, какой именно класс будет включать его в качестве базового и, тем самым, становиться от него производным. http://www.php.su/learnphp/phpoo/?ci */
class Animal{ 
	var $species=null; 
	var $type=null;
	
	public function __construct($species, $type){ 
		$this->species=$species;
		$this->type=$type;
	}	
	public function getSpecies(){
		echo "<pre>", $this->species, " \n</pre>"; 
	}
	public function getType(){
		echo "<pre>", $this->type, " \n</pre>";
	}
}
 
$one_object=new Animal ("text_A", "text_B"); 
$two_object=new Animal ("text_C", "text_D");

$one_object->getSpecies(); 
$one_object->getType();
$two_object->getSpecies();
$two_object->getType();

class Cat extends Animal{ //Класс Cat наследуется из класса Animal
	public function getSpecies(){
		echo "<pre>", $this->species, " \n</pre>"; 
	}
	public function getType(){
		echo "<pre>", $this->type, " \n</pre>";
	}
}

$three_object=new Cat ("text_E", "text_F");

$three_object->getSpecies();
$three_object->getType();
?>