<!--Что такое позднее статическое связывание и в чем его особенность. В чем отличие self:: и static:: Приведи пример.-->
<?php
//Само название "позднее статическое связывание" отражает в себе внутреннюю реализацию этой особенности. "Позднее связывание" отражает тот факт, что обращения через static:: не будут вычисляться по отношению к классу, в котором вызываемый метод определен, а будут вычисляться на основе информации в ходе исполнения. Также эта особенность была названа "статическое связывание" потому, что она может быть использована (но не обязательно) в статических методах. https://habrahabr.ru/post/259627/ https://php.ru/manual/language.oop5.late-static-bindings.html */

//Пример #1 Использование self::
class A {
  public static $number=1;
  public static function getNumber() {
    echo self::$number . "<br/>";
  }
}

class B extends A { 
  public static $number=2;
}

echo B::getNumber();

//Пример #2 Простое использование static::
class C {
  public static $number="current value";
  public static function getNumber() {
    echo static::$number . "<br/>"; // Здесь действует позднее статическое связывание: static::$number
  }
}

class D extends C {
  public static $number="another value";
}

echo D::getNumber();
?>