### Описание проекта
Написать программу для игры "Сапер" (minesweeper). Квадратное игровое поле разделено на смежные ячейки, некоторые из которых заминированы; количество заминированных ячеек известно. Цель игры - открытие всех ячеек, не содержащих мины.

Игрок открывает ячейки, стараясь не открыть ячейку с миной. Открыв ячейку с миной, он проигрывает. Если под открытой ячейкой мины нет, то в ней появляется число, показывающее, сколько ячеек, соседствующих с только что открытой, заминировано.Если под соседними ячейками тоже нет мин, то открывается не заминированная область до ячеек, в которых есть цифры. 

  *

* Размерность поля и количество мин на поле берется из конфигурационного файла.
* Информация о датах и исходах всех партий, а также о всех ходах, сделанных во время игры, должна сохраняться в базе данных SQLite.
* Для каждой игры в базе должна храниться следующая информация:
    * Дата игры
    * Имя игрока
    * Размерность поля и количество мин на поле
    * Расстановка мин на поле
    * Исход игры 
    * Запись ходов в формате: 
      `номер хода | координаты точки | результат (мины нет/взорвался/выиграл)`
* В программе должны быть реализованы три режима, которым соответствуют ключи:
    * `--new`. Новая игра.
    * `--list`. Вывод списка всех сохраненных игр.
    * `--replay id`. Повтор игры с идентификатором id.
  *

## Требования

Минимальная версия PHP: 7.4.7 \
Минимальная версия Composer: 1.9.3

  *

## Инструкция по установке и запуску игры

Из Github:

1. Склонировать проект на локальную машину;
2. Установить composer, если он не установлен;
3. Перейти в корневой каталог;
4. Выполнить в консоли команду `composer update`;
5. Перейти в каталог bin из корнегого каталога и запустить файл minesweeper.bat.

Из Packagist:

1. Установить composer, если он не установлен;
2. Перейти в каталог, в который вы будете клонировать проект;
3. Выполнить команду `composer require syusinav/minesweeper`;
4. Перейти в каталог vendor/bin;
5. Запустить файл minesweeper.bat.

  *

## Ссылки

Packagist: <https://packagist.org/packages/syusinav/minesweeper>