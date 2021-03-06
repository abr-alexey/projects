<!--Что такое паттерн проектирования. В чем основные особенности следующих паттернов: Abstract Factory, Factory Method, Singleton, Prototype, Builder (порождающие). Adapter, Bridge, Composite, Decorator, Facade (структурные).-->
<?php
/*http://dron.by/post/patterny-shablony-proektirovanie-v-php-vvedenie.html 
Паттерн проектирования (design pattern) - это общее типовое решение некоторой проблемы, многократно повторяемое в процессе проектирования архитектуры программного продукта. Они показывают отношения и взаимодействия между классами, позволяют сделать систему гибкой и легко изменяемой. За счет их правильного использования повышается коэффициент использования готовых решений.
ПОРОЖДАЮЩИЕ.
- Abstract Factory (абстрактная фабрика). Его основное назначение - предоставить интерфейс для создания семейства взаимосвязанных объектов, не специфицируя их классы (для каждого из семейств объектов (напимер рас), создается конкретная фабрика (наследник абстрактной), посредством которой создаются продукты (например юниты) этого семейства).
- Factory Method (фабричный метод). Они используются для определения и поддержания отношений между объектами. Фабричные методы избавляют проектировщика от необходимости встраивать в код зависящие от приложения классы. 
- Singleton (одиночка). Он используется для создания всего одного экземпляра класса, и гарантирует, что во время работы программы не появиться второй. Например в схеме MVC, зачастую этот паттерн используется для порождения главного контроллера (фронтового). 
- Prototype (прототип). Он используется для задания вида создаваемых объектов на основе объекта прототипа, от которого происходит передача внутреннего состояния. Он сродни фабричному методу, позволяет избавиться от жесткой привязки к классам, и, как следствие, вязкости кода.
- Builder (строитель). Он используется для отделения процесса конструирования сложного объекта от его представления, так что в результате одного и того же конструирования могут получаться различные объекты.
СТРУКТУРНЫЕ.
- Adapter (адаптер). Он используется для преобразования одного интерфейса в другой, необходимый клиенту. Адаптер обеспечивает совместимость несовместимых интерфейсов, реализуя прослойку.
- Bridge (мост). Он используется для отделения абстракции от ее реализации так, чтобы то и другое можно было изменять независимо. Если для одной абстракции возможно несколько реализаций, то обычно используют наследование. Однако такой подход не всегда удобен, так как наследование жестко привязывает реализацию к абстракции, что затрудняет независимую модификацию и усложняет их повторное использование.
- Composite (компоновщик). Он используется для компоновки объектов в древовидные структуры для представления иерархий, позволяя одинаково трактовать индивидуальные и составные объекты.
- Decorator (декоратор). Он используется для динамического расширения функциональности объекта. Является гибкой альтернативой наследованию.
- Facade (фасад). Представляет собой унифицированный интерфейс вместо набора интерфейсов некоторой подсистемы. Паттерн фасад определяет интерфейс более высокого уровня, который упрощает использование подсистем. Разбиение на подсистемы сложной системы позволяет упростить процесс проектирования, а также помогает максимально снизить зависимости одной подсистемы от другой. Однако это приводит к тому, что использовать такие подсистемы вместе становиться довольно сложно. Один из способов решения этой проблемы является ввод паттерна фасад.





*/


?>