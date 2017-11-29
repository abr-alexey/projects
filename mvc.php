<!--Что такое MVC и за что отвечает?-->
<?php
/*
https://ruseller.com/lessons.php?id=666 
MVC — это не шаблон проекта, это конструкционный шаблон, который ОПИСЫВАЕТ СПОСОБ ПОСТРОЕНИЯ НАШЕГО ПРИЛОЖЕНИЯ, сферы ответственности и взаимодействие каждой из частей в данной структуре. Идея, которая лежит в основе конструкционного шаблона MVC, очень проста: нужно чётко разделять ответственность за различное функционирование в наших приложениях: Model(Обработка данных и логика приложений), View(Представление данных пользователю в любом поддерживаемом формате), Controller(обработка запросов пользователя и вызов соответствующих ресурсов).
- Контроллер(Controller) управляет запросами пользователя. Его основная функция — вызывать и координировать действие необходимых ресурсов и объектов, нужных для выполнения действий, задаваемых пользователем. Обычно контроллер вызывает соответствующую модель для задачи и выбирает подходящий вид. Контроллер содержит в основном организационную логику для самого приложения (очень похоже на ведение домашнего хозяйства).
- Модель(Model) - это данные и правила, которые используются для работы с данными, которые представляют концепцию управления приложением. В любом приложении вся структура моделируется как данные, которые обрабатываются определённым образом. Модель даёт контроллеру представление данных, которые запросил пользователь. Модель данных будет одинаковой, вне зависимости от того, как мы хотим представлять их пользователю. Поэтому мы выбираем любой доступный вид для отображения данных. Модель содержит наиболее важную часть логики нашего приложения, логики, которая решает задачу, с которой мы имеем дело (форум, магазин, банк, и тому подобное). 
- Вид(View) обеспечивает различные способы представления данных, которые получены из модели. Он может быть шаблоном, который заполняется данными. Может быть несколько различных видов, и контроллер выбирает, какой подходит наилучшим образом для текущей ситуации. Веб приложение обычно состоит из набора контроллеров, моделей и видов. Контроллер может быть устроен как основной, который получает все запросы и вызывает другие контроллеры для выполнения действий в зависимости от ситуации.

Самое очевидное преимущество, которое мы получаем от использования концепции MVC — это чёткое разделение логики представления (интерфейса пользователя) и логики приложения. Поддержка различных типов пользователей, которые используют различные типы устройств является общей проблемой наших дней. Предоставляемый интерфейс должен различаться, если запрос приходит с персонального компьютера или с мобильного телефона. Модель возвращает одинаковые данные, единственное различие заключается в том, что контроллер выбирает различные виды для вывода данных. Помимо изолирования видов от логики приложения, концепция MVC существенно уменьшает сложность больших приложений. Код получается гораздо более структурированным, и, тем самым, облегчается поддержка, тестирование и повторное использование решений.
*/

/*
https://ruseller.com/lessons.php?id=666
*/
?>