# lab4
## 1. Инструкции по запуску проекта
1. Скачайте проект и разместите файлы в директории веб-сервера:
`git clone https://github.com/ваш-репозиторий.git`
2. Запустите сервер:
   `php -S localhost:8000`
4. Откройте в браузере:
   `http://localhost:8000`
## 2. Описание лабораторной работы   
__Цель:__ Изучить основы работы с циклами, массивами и функциями в PHP. Научиться использовать ассоциативные массивы, генерировать данные с помощью циклов и выполнять базовые операции с файловой системой.

1. Реализовать циклы for и while с выводом промежуточных значений

2. Создать и обработать массивы

3. Разработать функции для обработки транзакций

4. Реализовать галерею изображений с обработкой файловой системы
## 3. Краткая документация к проекту 
<table>
    <tr>
        <th>Файл</th>
        <th>Описание</th>
    </tr>
    <tr>
        <td>index.php</td>
        <td>Решение с 1 по 4 задания</td>
    </tr>
    <tr>
       <td>image.php</td>
      <td>Решение 5 задания </td>
    </tr>
     <tr>
        <td>image</td>
        <td>Папка с изображениями для галереи</td>
    </tr>
</table>

## 4. Примеры использования проекта с приложением скриншотов или фрагментов кода

1.Рeализация цикла for:

```php
<?php echo "<h2>Задание 1: Цикл for</h2>";
$a = 0;
$b = 0;

for ($i = 0; $i <= 5; $i++) {
    $a += 10;
    $b += 5;
    echo "Шаг $i: a = $a, b = $b<br>";
}
echo "End of the loop: a = $a, b = $b<br>"; ?>
```
Скриншот:

![image](https://github.com/user-attachments/assets/80f09ec1-94e8-4b26-87b8-7ae8cc4de1d3)

2. Реализация цикла while:
```php
<?php echo "<h2>Задание 2: Цикл while</h2>"; 

$a = 0;
$b = 0;
$i = 0;

while ($i <= 5) {
    $a += 10;
    $b += 5;
    echo "Шаг $i: a = $a, b = $b<br>";
    $i++;
}
echo "End of the loop: a = $a, b = $b<br>"; ?>
```
Скриншот:

![image](https://github.com/user-attachments/assets/ce2eee4e-6012-405b-8c25-57306c384bcb)

3. Работа с массивами:
```php 
   <?php echo "<h2>Задание 3: Работа с массивами</h2>";
  $numbers = [];
  for($i=0; $i<100; $i++){
   $numbers[] = rand(1, 100); 
  }
  echo "Массив: <br>";
  for($i=0; $i<count($numbers); $i++){
    echo"Элемент $i = $numbers[$i]  <br>";
  }
  ?>
  ```

Скриншот:

![image](https://github.com/user-attachments/assets/3a549b8e-bfe1-4e7b-9920-7bf9dc372ba8)

4. Ассоциативные массивы и функции:

Вывод транзакций

  ```php
echo "<h3>Результаты обработки транзакций:</h3>";
echo "Общая сумма: " . calculateTotalAmount($transactions) . "<br>";
echo "Средняя сумма: " . calculateAverage($transactions) . "<br>";

$descriptions = mapTransactionDescriptions($transactions);
for ($i = 0; $i < count($descriptions); $i++) {
    echo "Описание транзакции номер: $i: " . $descriptions[$i] . "<br>";
}
   ```
Скриншот:

![image](https://github.com/user-attachments/assets/a94aa67e-2c31-415f-b400-9a34f996444d)

5. Работа с файловой системой:
   
   Галерея изображений
   
   ```php
   if ($fileExt == 'jpg' || $fileExt == 'jpeg') {
    echo '<img src="' . $path . '" alt="Изображение ' . ($i-1) . '">';}
    ```

Скриншот:

![image](https://github.com/user-attachments/assets/119b3742-a032-4cd7-8764-5dc0614d467b)

## 5. Ответы на контрольные вопросы

1. Что делает цикл for ?

   Цикл for выполняет блок кода заданное количество раз.

2. Разница между while и for ?

   У while количетсво итераций зависит от условия. For же используется, когда известен точный диапазон итераций.

3. Как сгенерировать массив случайных  чисел ?

   ```php
   for($i=0; $i<100; $i++){
   $numbers[] = rand(1, 100); }
   ```

4. Что такое ассоциативный массив ?

   Это массив, в котором ключи представлены строками.

5. Как задать путь в папку с изображением ?

  ```php
  $dir = 'image/';
  ```
   
## 6. Список использованных источников

   1. https://skillbox.ru/media/code/yazyk-razmetki-markdown-shpargalka-po-sintaksisu-s-primerami/
      
   2. https://gist.github.com/Jekins/2bf2d0638163f1294637

   3. https://proglib.io/p/samouchitel-dlya-nachinayushchih-kak-osvoit-php-s-nulya-za-30-minut-2021-02-08

      
