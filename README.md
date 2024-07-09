# Тестовое задание для вакансии Frontend-разработчик (стажер) от компании Anverali Group

## Описание работы
Сайт адаптивен для всех экранов. Моковые данные для вариантов подписок представлены в файле **subscriptions-data.json**, для их вывода на странице используется файл **script.js** в котором представлены несколько функций:
+ **loadSubscriptions** - функция для загрузки данных с json, на вход функция получает аргумент __path__, в которую передается путь для получения данных, на выход отдает промис с данными.
+ **displaySubscriptions** - функция для вывода вариантов подписок на страницу, на вход получает получает аргумент __subscriptions__ с данными подписок и аргумент __container__ с элементом куда будут выводится подписки.
+ **createSubscriptionElement** - функция для создания элемента подписки,на вход получает получает аргумент __subscription__ с данными подписки, на выход отдает готовый элемент подписки.

## Как запустить
Для запуска достаточно скачать папку с проектом и запустить через любой редактор кода с помощью live server.

### Посмотреть сайт можно по ссылке - https://shumilovmikhail.github.io/
