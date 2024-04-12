# PHP intermediate
* [PHP Docker - Nginx](https://www.youtube.com/watch?v=I_9-xWmkh28)

  * Рассматриваются такие понятия как контейнеры, образы, Dockerfile и Docker Compose в контексте среды разработки Docker для PHP.

  * Показан простой проект с двумя сервисами - PHP-FPM и Nginx. Используются файлы Dockerfile и docker-compose.yml для конфигурирования контейнеров.

  * С помощью docker-compose можно запустить несколько проектов на разных версиях PHP одновременно. Это упрощает настройку окружения по сравнению с XAMPP.

  *  Также упоминается о дополнительных сервисах как MySQL, о настройке php.ini и нюансах производственной среды.

  *  В целом дается представление о Docker для среды разработки PHP-приложений - что такое контейнеры и образы, как писать Dockerfile и docker-compose.yml.

* [PHP Classes & Objects - Typed Properties - Constructors & Destructors](https://www.youtube.com/watch?v=6FW72q5fIx8)
  - Класс - это чертеж для создания объектов. Объект - это экземпляр класса.

  - Свойства определяют данные объекта, а методы - его поведение. Видимость может быть публичной, приватной или защищенной.

  - Конструкторы инициализируют свойства при создании объекта. Проверка типов для свойств требует их инициализации.

  - Методы могут возвращать объект, чтобы разрешить цепочку вызовов методов. Не все методы должны быть цепочными.

  - Геттеры и сеттеры используются для энкапсуляции доступа к свойствам, когда они приватные.

  - Можно создать несколько объектов одного класса с разными значениями свойств.

  - Деструкторы выполняют очистку при уничтожении объекта. Они редко используются.

  - StdClass может быть использован для генерического создания объектов. Массивы и скалярные типы могут быть преобразованы в объекты.

  - Свойства объекта соответствуют ключам массива или значениям скалярного типа при преобразовании.

  - Проверка типов для свойств определяет ожидаемый тип, предотвращая недопустимые назначения.

  - В резюме видео рассматриваются ключевые концепции классов, объектов, свойств, методов, конструкторов, цепочного вызова и энкапсуляции в объектно-ориентированном программировании PHP. Показано как определять классы и создавать множественные экземпляры объектов.
- [Constructor Property Promotion - Nullsafe Operator](https://www.youtube.com/watch?v=T1PbFz-o6kw)
- [PHP Namespace Tutorial](https://www.youtube.com/watch?v=Jni9c0-NjrY)
  - Пространства имен помогают избежать коллизий имен классов, функций и констант, логически группируя взаимосвязанные элементы.

  - Ключевое слово namespace используется в верхней части файла для объявления пространства имен. Пространства имен могут содержать подпространства для соответствия древовидной структуре каталогов.

  - Без пространств имен элементы по умолчанию попадают в глобальное пространство имен и могут возникнуть коллизии. Использование пространств имен решает эту проблему.

  - Классы обращаются к своему полностью квалифицированному имени с разделителем пространств имен либо через импорт пространств/классов.

  - Правила разрешения имен - не квалифицированное ищется в локальном пространстве, квалифицированное - по импортам, полностью квалифицированное всегда работает.

  - Функции ищутся в глобальном пространстве если не найдены локально, в отличие от классов, которые выдают ошибку. Функции могут префиксироваться для обеспечения глобальной области видимости.

  - Псевдонимы позволяют использовать одно и то же имя класса из разных пространств имен, избегая коллизий. Можно также полностью переименовать пространство имен.

  - Подключаемые файлы не наследуют импортированные классы/пространства родительского файла, поэтому импорты требуются в обоих.

  - Это охватывает основные моменты использования пространств имен для избежания коллизий имен, разрешения пространств и классов, а также некоторые лучшие практики работы с namespaces в PHP.