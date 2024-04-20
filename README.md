# PHP intermediate

* [PHP Docker - Nginx](https://www.youtube.com/watch?v=I_9-xWmkh28)

    * Рассматриваются такие понятия как контейнеры, образы, Dockerfile и Docker Compose в контексте среды разработки
      Docker для PHP.

    * Показан простой проект с двумя сервисами - PHP-FPM и Nginx. Используются файлы Dockerfile и docker-compose.yml для
      конфигурирования контейнеров.

    * С помощью docker-compose можно запустить несколько проектов на разных версиях PHP одновременно. Это упрощает
      настройку окружения по сравнению с XAMPP.

    * Также упоминается о дополнительных сервисах как MySQL, о настройке php.ini и нюансах производственной среды.

    *  ### В целом дается представление о Docker для среды разработки PHP-приложений - что такое контейнеры и образы, как писать Dockerfile и docker-compose.yml.

---

* [PHP Classes & Objects - Typed Properties - Constructors & Destructors](https://www.youtube.com/watch?v=6FW72q5fIx8)
    - Класс - это чертеж для создания объектов. Объект - это экземпляр класса.

    - Свойства определяют данные объекта, а методы - его поведение. Видимость может быть публичной, приватной или
      защищенной.

    - Конструкторы инициализируют свойства при создании объекта. Проверка типов для свойств требует их инициализации.

    - Методы могут возвращать объект, чтобы разрешить цепочку вызовов методов. Не все методы должны быть цепочными.

    - Геттеры и сеттеры используются для энкапсуляции доступа к свойствам, когда они приватные.

    - Можно создать несколько объектов одного класса с разными значениями свойств.

    - Деструкторы выполняют очистку при уничтожении объекта. Они редко используются.

    - StdClass может быть использован для генерического создания объектов. Массивы и скалярные типы могут быть
      преобразованы в объекты.

    - Свойства объекта соответствуют ключам массива или значениям скалярного типа при преобразовании.

    - Проверка типов для свойств определяет ожидаемый тип, предотвращая недопустимые назначения.

    - ### В резюме видео рассматриваются ключевые концепции классов, объектов, свойств, методов, конструкторов, цепочного вызова и энкапсуляции в объектно-ориентированном программировании PHP. Показано как определять классы и создавать множественные экземпляры объектов.

---

- [Constructor Property Promotion - Nullsafe Operator](https://www.youtube.com/watch?v=T1PbFz-o6kw)

---

- [PHP Namespace Tutorial](https://www.youtube.com/watch?v=Jni9c0-NjrY)
    - Пространства имен помогают избежать коллизий имен классов, функций и констант, логически группируя взаимосвязанные
      элементы.

    - Ключевое слово namespace используется в верхней части файла для объявления пространства имен. Пространства имен
      могут содержать подпространства для соответствия древовидной структуре каталогов.

    - Без пространств имен элементы по умолчанию попадают в глобальное пространство имен и могут возникнуть коллизии.
      Использование пространств имен решает эту проблему.

    - Классы обращаются к своему полностью квалифицированному имени с разделителем пространств имен либо через импорт
      пространств/классов.

    - Правила разрешения имен - не квалифицированное ищется в локальном пространстве, квалифицированное - по импортам,
      полностью квалифицированное всегда работает.

    - Функции ищутся в глобальном пространстве если не найдены локально, в отличие от классов, которые выдают ошибку.
      Функции могут префиксироваться для обеспечения глобальной области видимости.

    - Псевдонимы позволяют использовать одно и то же имя класса из разных пространств имен, избегая коллизий. Можно
      также полностью переименовать пространство имен.

    - Подключаемые файлы не наследуют импортированные классы/пространства родительского файла, поэтому импорты требуются
      в обоих.

    - ### Это охватывает основные моменты использования пространств имен для избежания коллизий имен, разрешения пространств и классов, а также некоторые лучшие практики работы с namespaces в PHP.

---

- [PHP Coding Standards, Autoloading (PSR-4) & Composer](https://www.youtube.com/watch?v=rqzYdHdyMH0)
    - В PHP есть встроенная функция автозагрузки классов spl_autoload_register, которая позволяет определить
      callback-функцию для автоматической загрузки классов.

    - Внутри функции-обработчика получается полное имя класса, на основании которого необходимо подключить/включить
      соответствующий файл.

    - Composer - это менеджер зависимостей для PHP, который берет на себя автозагрузку и установку внешних
      пакетов/библиотек.

    - Composer генерирует файлы автозагрузки, в которых классы соотносятся с путями к файлам, позволяя автоматически
      загружать классы.

    - В composer.json перечисляются зависимости проекта, которые будут устанавливаться с Packagist.

    - Папка vendor содержит исходный код установленных зависимостей. autoload.php регистрирует автозагрузчик Composer.

    - Стандарты PSR такие как PSR-1 и PSR-12 определяют рекомендации по стилю кода PHP-проектов. PHP CodeSniffer
      проверяет соответствие стилю.

    - Composer может автозагружать классы проекта, если их пространства имен указаны в composer.json и файла
      автозагрузки пересобраны.

    - Классовая карта (classmap) позволяет для оптимизации прямо соотносить все классы с файлами в продакшене.

    - ### То есть в кратце в видео рассказывалось про автозагрузку классов в PHP, использование Composer для управления зависимостями и автозагрузкой, стандарты PSR, настройку PHP-проекта с применением Composer.

---

- [Object Oriented PHP - Class Constants](https://www.youtube.com/watch?v=bEGNvUxYf2o)
    - Константы в PHP определяются с помощью ключевого слова const и должны быть в верхнем регистре с подчёркиваниями.
      Они являются неизменяемыми значениями.

    - Классовые константы можно обращаться с использованием имени класса и оператора разрешения области видимости (::).
      Они выделяются один раз для каждого класса.

    - Константам можно задавать видимость, такую как public или private. Приватные константы можно обращаться только
      внутри класса.

    - Константы удобны для хранения неизменяемых данных, значение которых может меняться, избегая жёсткого кодирования
      значений.

    - Константы в стиле enum можно использовать для представления статусов, ролей и т.д., предотвращая ошибки в
      написании. Они были вынесены из класса Transaction в отдельный класс перечислений Status.

    - Добавлена константа all_statuses в виде массива со статусами в качестве ключей и понятными именами в качестве
      значений для валидации.

    - Упомянуты статические свойства и методы как следующая тема. PHP 8.1 добавит нативную поддержку типа enum для более
      чистого определения классов констант.

    - ### В резюме рассказано о том, как определять, обращаться и использовать классовые константы в PHP, а также некоторых лучших практиках, таких как вынесение их в отдельные классы перечислений для организации и валидации.

---

- [Static Properties & Methods + singletone](https://www.youtube.com/watch?v=6VVN-2SCx7Q)

    - Статические свойства и методы принадлежат самому классу, а не отдельным объектам. Их можно обращаться без создания
      объекта.

    - Чтобы определить статическое свойство/метод, используется ключевое слово static. Свойства можно инициализировать
      как обычные свойства.

    - Статические свойства общедоступны для всех экземпляров класса. Изменение значения в одном месте влияет на все.

    - Для доступа к приватным статическим свойствам изнутри класса используются ключевые слова self или название класса.
      Вне класса могут понадобиться статические геттеры.

    - Типичные случаи использования статиков - счётчики, кэширование, утилитные методы, шаблоны singleton/factory (хотя
      предпочтительнее инъекция зависимостей).

    - Статики представляют глобальное состояние, что ухудшает тестируемость и поддержку. Их следует избегать, кроме
      очень узких случаев.

    - Статические методы могут маскироваться под методы объекта, но не стоит этого делать, так как это скрывает их
      статическую природу.

    - ### В видео показано определение/вызов статических свойств и методов, их общее значение, доступ из класса, вред от неправильного использования статиков.

--- 

- [Encapsulation & Abstraction](https://www.youtube.com/watch?v=kA9BTNPFObo)
    - Инкапсуляция объединяет данные и методы, которые работают с этими данными, в пределах класса. Она скрывает
      внутреннее представление и состояние объекта. Это защищает целостность объекта.

    - Установка свойств как публичных может нарушить инкапсуляцию, позволяя внешнему коду изменять внутреннее состояние
      объекта.

    - Геттеры и сеттеры иногда используются для выставления свойств при одновременном соблюдении инкапсуляции. Однако
      они также могут нарушить инкапсуляцию при чрезмерном использовании.

    - В целом лучше делать свойства приватными и передавать данные через конструктор или методы, а не позволять внешнему
      коду изменять состояние через сеттеры.

    - Абстрагирование скрывает детали реализации, так что пользователям нужно знать только интерфейс (вызываемые
      методы), а не то, как все работает внутри. Это позволяет гибко менять внутреннюю реализацию, не затрагивая внешний
      код.

    - Приватные/защищённые свойства и методы могут быть доступны другим объектам того же класса с помощью рефлексии или
      передачи объектов между методами одного класса.

    - Инкапсуляция сосредоточена на скрытии внутреннего состояния, тогда как абстрагирование — на скрытии деталей
      реализации от пользователей. Оба принципа помогают достичь слабой связанности и лучшего проектирования.

    - ### В целом текст рассматривает инкапсуляцию и абстрагирование как два основных принципа объектно-ориентированного программирования на PHP, акцентируя внимание на то, как их применять для защиты состояния объекта и гибкости реализации.
- [Encapsulation & Abstraction](https://www.youtube.com/watch?v=LyyzeYOoH5s)
    - Наследование позволяет дочернему классу унаследовать свойства и методы от родительского класса. Дочерний класс
      расширяет родительский.

    - Унаследованные свойства и методы могут быть переопределены в дочернем классе. Частные свойства недоступны.

    - Конструкторы в дочерних классах не вызываются автоматически, поэтому родительский конструктор должен быть вызван
      явно с помощью parent::construct().

    - Подписи методов должны быть совместимы при переопределении методов. Параметры и типы возвращаемых значений могут
      варьироваться больше в PHP 8.

    - Ключевое слово final предотвращает наследование классов и переопределение методов.

    - Примеры наследования включают типы транзакций, поля форм и типы счетов.

    - Наследование может нарушить инкапсуляцию и привести к наследованию ненужных методов. Переопределение для бросания
      исключений не является идеальным.

    - Композиция предпочтительнее наследования, когда отношение "является" не применимо, как в случае наследования
      духовки от тостера.

    - С помощью композиции класс может содержать другой класс в качестве свойства, а не расширять его. Это было
      продемонстрировано на примере класса роскошной духовки.

    - ### Наследование полезно, когда оно адекватно моделирует взаимоотношения между классами, но композиция следует рассмотреть в качестве альтернативы в других случаях.
- [Inheritance](https://www.youtube.com/watch?v=LyyzeYOoH5s)

    - Наследование позволяет дочернему классу унаследовать свойства и методы от родительского класса. Дочерний класс
      расширяет родительский.

    - Унаследованные свойства и методы могут быть переопределены в дочернем классе. Частные свойства недоступны.

    - Конструкторы в дочерних классах не вызываются автоматически, поэтому родительский конструктор должен быть вызван
      явно с помощью parent::construct().

    - Подписи методов должны быть совместимы при переопределении методов. Параметры и типы возвращаемых значений могут
      варьироваться больше в PHP 8.

    - Ключевое слово final предотвращает наследование классов и переопределение методов.

    - Примеры наследования включают типы транзакций, поля форм и типы счетов.

    - Наследование может нарушить инкапсуляцию и привести к наследованию ненужных методов. Переопределение для бросания
      исключений не является идеальным.

    - Композиция предпочтительнее наследования, когда отношение "является" не применимо, как в случае наследования
      духовки от тостера.

    - С помощью композиции класс может содержать другой класс в качестве свойства, а не расширять его. Это было
      продемонстрировано на примере класса роскошной духовки.

    - ### Наследование полезно, когда оно адекватно моделирует взаимоотношения между классами, но композиция следует рассмотреть в качестве альтернативы в других случаях.
- [Abstract Classes](https://www.youtube.com/watch?v=UnwaW13xJuw)
- [Interfaces & Polymorphism](https://www.youtube.com/watch?v=-AJic0FjuAA)
    - Интерфейс определяет контракт, которому должны соответствовать конкретные классы, реализуя методы интерфейса. Это
      позволяет обеспечить полиморфизм, когда несколько классов могут работать с одним и тем же интерфейсом.

    - Объявление интерфейса создаёт абстрактный шаблон без реализации тел методов. Конкретные классы, реализующие
      интерфейс, должны предоставить реализации методов.

    - Интерфейсы позволяют писать код в зависимости от интерфейса, а не конкретного класса, улучшая гибкость и
      развязывая код от специфических реализаций. Это следует принципу "Программировать по интерфейсу".

    - Проблемы возникают, когда код слишком специфически зависит от конкретных классов-реализаций, а не от интерфейсов.
      Интерфейсы решают эту проблему, позволяя использовать любой класс, соответствующий контракту интерфейса.

    - Пример демонстрирует интерфейс сбора долгов с двумя реализациями - одна использует случайный сбор, другая всегда
      собирает 65%. Код работает с обеими благодаря программированию по интерфейсу.

    - Преимущества интерфейсов включают множественное наследование поведения, поддержку разных реализаций и разделение
      контракта от конкретных классов.

    - Фреймворки часто используют интерфейсы, такие как стандарты PSR, для определения общего поведения компонентов
      кэширования, логгирования и других плагинов, работающих через различные бэкенды.

    - ### Это сжатое изложение основных моментов о интерфейсах, их преимуществах и примерах из видео. Скажите, если какой-то момент нуждается в дополнительном разъяснении.
- [2.12 - Magic-Methods](https://www.youtube.com/watch?v=nCxnzj83poQ)
    - Волшебные методы в PHP - это специальные методы, которые переопределяют стандартное поведение для определенных
      действий или событий с объектом. Они начинаются с двойного подчеркивания, как __construct.

    - Распространенные волшебные методы включают:
        - get и set для доступа к несуществующим свойствам
        - isset и unset для проверки существования свойства
        - call и callStatic для вызова несуществующих методов
        - __toString для обработки преобразования объекта в строку

    - Методы get и set позволяют перехватить доступ/назначение свойств и обеспечить обратную совместимость или обработку
      ошибок.

    - isset и unset подключаются к проверке наличия и удалению свойств.

    - call и callStatic перехватывают вызовы методов и позволяют отложенные вызовы для других объектов. Так реализуется
      работа фасадов в Laravel.

    - __toString контролирует преобразование объекта в строку, например при выводе объекта. Начиная с PHP 8, он
      импlicitно реализует интерфейс Stringable.

    - __invoke делает объект прямо вызываемым, полезно для классов с одиночным действием.

    - __debugInfo контролирует выводимые свойства при var_dump для конфиденциальности или уменьшения избыточности.

    - Другие волшебные методы как clone, serialize обрабатывают клонирование и сериализацию объектов.

    - ### В общем, волшебные методы предоставляют «уколы» для типичных действий с объектом и позволяют реализовать мощные возможности, такие как динамические/отложенные свойства, диспетчеризацию методов и преобразование в строку совместимым образом. Они являются ключевыми для фреймворков и добавляют гибкость в поведение объектов PHP.
- [2.13 - Late Static Binding](https://www.youtube.com/watch?v=4W5t8g3Rp_0)
    - Позднее статическое связывание относится к тому, как PHP разрешает вызовы классов/методов во время выполнения, а
      не на этапе компиляции.

    - Существует два типа связывания - раннее связывание на этапе компиляции и позднее связывание во время выполнения.

    - Раннее связывание использует ключевое слово self, которое разрешает класс на этапе компиляции. Это вызывает
      проблемы с наследованием.

    - Позднее связывание использует ключевое слово this для разрешения класса во время выполнения на основе контекста
      объекта. Оно сохраняет поведение наследования.

    - Для вызова статических методов и доступа к статическим свойствам с выгодами позднего связывания используется
      ключевое слово static. Оно разрешает исходный класс перед наследованием/перенаправлением.

    - Примеры показывают, что static разрешает подкласс во время выполнения, а не всегда базовый класс как self.

    - Ключевое слово static можно также использовать в нестатических контекстах для имитации разрешения позднего
      связывания для объектов.

    - Начиная с PHP8, static можно использовать в качестве типа возвращаемого значения, чтобы указать на наследуемые
      статические фабричные методы вместо всегда разрешения базового класса.

    - ### В резюме, позднее статическое связывание позволяет наследующим классам переопределять базовые статические методы/свойства ожидаемым образом с использованием ключевого слова static вместо self.
- [2.14 - Traits](https://www.youtube.com/watch?v=PMruqUC4Qpc)

    - ### В PHP трейты позволяют совместно использовать методы между классами без наследования. Трейты можно использовать для уменьшения дублирования кода.

    - ### Некоторые ключевые особенности трейтов:

        - В трейтах можно объявлять методы, свойства и константы
        - Классы могут использовать несколько трейтов с помощью инструкции use
        - Видимость методов можно менять при использовании трейта
        - В трейтах можно объявлять абстрактные методы
        - Статические методы и свойства работают независимо в каждом классе, использующем трейт
        - Есть правила приоритета для методов, если класс тоже определяет такой метод
        - Оператор instead of разрешает конфликты имен методов между трейтами

    - ### С трейтами есть некоторые проблемы:
        - Не стоит менять видимость методов или делать приватные методы паблик
        - Финальные и приватные методы не блокируют переопределение как в наследовании
        - Абстрактные методы в трейтах не очень хорошее решение, для контрактов лучше интерфейсы.

    - ### Хороший применение - общий метод отправки электронной почты между несвязанными классами Покупатель и Счет. Трейты избегают дублирования кода и неправильного использования наследования в этом случае.

    - ### В целом, трейты полезны для повторного использования кода, но главным образом для избежания дублирования, а не как замена наследованию или интерфейсам. Их мощности нужно использовать ответственно.
- [2.15 - Anonymous Classes](https://www.youtube.com/watch?v=zQ4Znj3RT3E)
    - Анонимные классы - это классы, определенные без имени. Их можно создать, используя ключевые слова new и class.

    - В анонимных классах можно задать конструктор с аргументами, определить свойства и методы, реализовать интерфейсы,
      расширить другие классы и т.д. точно как в обычных классах.

    - Основное применение анонимных классов - тестирование, в частности создание мок-зависимостей. Они позволяют
      создавать мок-объекты без отдельного класса.

    - Анонимные классы избегают обращения к загрузчику, так как определяются непосредственно без имени файла. Это дает
      микро-оптимизацию.

    - Использование анонимных классов вне области их определения также является плюсом, так как не загрязняет глобальную
      область видимости.

    - Хотя анонимные классы формально не имеют имени, PHP динамически ему назначает. Но нужно считать, что имени нет и
      их нельзя указывать в типизации. Для этого используются интерфейсы.

    - Анонимные классы внутри других классов не могут обращаться к свойствам и методам вмещающего класса, если только
      через конструктор или наследование.

    - ### В целом, анонимные классы позволяют непосредственно определять простые классы без имени, в первую очередь для тестовых моков, при сохранении обычных возможностей классов, таких как наследование, свойства, интерфейсы.