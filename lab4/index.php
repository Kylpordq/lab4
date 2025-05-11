<?php echo "<h2>Задание 1: Цикл for</h2>";
$a = 0;
$b = 0;

for ($i = 0; $i <= 5; $i++) {
    $a += 10;
    $b += 5;
    echo "Шаг $i: a = $a, b = $b<br>";
}

echo "End of the loop: a = $a, b = $b<br>"; ?>

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

<?php echo "<h2>Задание 4: Ассоциативные массивы и функции</h2>";

//определение ассоциативного массива транзакций
$transactions = [
    [
        "transaction_id" => 1, // id
        "transaction_date" => "2019-01-01", // дата
        "transaction_amount" => 100.00, // сумма транзакции
        "transaction_description" => "Payment for groceries", // описание
        "merchant_name" => "SuperMart", // название организации
    ],
    [
        "transaction_id" => 2,
        "transaction_date" => "2020-02-15",
        "transaction_amount" => 75.50,
        "transaction_description" => "Dinner with friends",
        "merchant_name" => "Local Restaurant",
    ],
      [
        "transaction_id" => 3,
        "transaction_date" => "2021-07-21",
        "transaction_amount" => 200.00,
        "transaction_description" => "Electronics purchase",
        "merchant_name" => "TechStore",
    ],
    [
        "transaction_id" => 4,
        "transaction_date" => "2022-09-22",
        "transaction_amount" => 50.25,
        "transaction_description" => "Coffee and snacks",
        "merchant_name" => "Cafe Delight",
    ],
];

//функция calculateTotalAmount для подсчёта общей суммы транзакций:
function calculateTotalAmount(array $transactions): float {
    return array_reduce(
        $transactions,
        fn($sum, $transaction) => $sum + $transaction['transaction_amount'],
        0
    );
}

// функуия calculateAverage для вычисления среднего значения транзакций:
function calculateAverage(array $transactions): float {
    if (empty($transactions)) return 0;
    return calculateTotalAmount($transactions) / count($transactions);
}

// функция mapTransactionDescriptions для создания массива описаний транзакций:
function mapTransactionDescriptions(array $transactions): array {
    return array_map(
        fn($transaction) => $transaction['transaction_description'], $transactions
    );
}
?>
<table border="1">
    <tr style="background-color: #a6a6a6; color: #252525">
        <th colspan="5">Оценки студентов</th>
    </tr>
    <tr style="background-color: #a6a6a6; color: #252525">
        <th>ID</th>
        <th>Дата</th>
        <th>Сумма транзакции</th>
        <th>Описание транзакции</th>
        <th>Название организации</th>
    </tr>
    <?php
    foreach ($transactions as $transaction) { ?>
        <tr>
           <td><?= $transaction['transaction_id'] ?></td>
            <td><?= $transaction['transaction_date'] ?></td>
            <td><?= $transaction['transaction_amount'] ?></td>
            <td><?= $transaction['transaction_description'] ?></td>
            <td><?= $transaction['merchant_name'] ?></td>
        </tr>
    <?php } ?>
</table>
<?php


echo "<h3>Результаты обработки транзакций:</h3>";
echo "Общая сумма: " . calculateTotalAmount($transactions) . "<br>";
echo "Средняя сумма: " . calculateAverage($transactions) . "<br>";

$descriptions = mapTransactionDescriptions($transactions);
for ($i = 0; $i < count($descriptions); $i++) {
    echo "Описание транзакции номер: $i: " . $descriptions[$i] . "<br>";
}

?>