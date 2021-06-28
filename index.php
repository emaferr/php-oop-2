<?php

require __DIR__ . '/classes/User.php';
require __DIR__ . '/classes/Vip.php';
require __DIR__ . '/classes/Product.php';
require __DIR__ . '/classes/Notebook.php';
require __DIR__ . '/classes/Tablet.php';

$users = [
    new User ('Emanuele', 'ABC.123BBZxP', 'emanuele@example.net'),
    new User ('Tiziano', 'B6tx.Mm89frE', 'tiziano@example.com'),
    new User ('Fabiola', 'N78H.Bhy66.9', 'fabiola@example.it'),
];

$usersVip = [
    new Vip ('Alessandro', 'VgY.K99oi0rF', 'alessandro@example.it', 'ALSNDR'),
];

$notebook = [
    new Notebook ('https://', 'Apple MacBook Air M1', '8GB Ram', 1439.50, null, 14),
    new Notebook ('https://', 'Asus Rog Zephyrus', '16GB Ram', 1439.50, null, 16),
    new Notebook ('https://', 'Lenovo IdeaPad', '12GB Ram', 980.00, null, 15),
    new Notebook ('https://', 'Acer aspire v-nitro', '24GB Ram', 1016.32, null, 15),
];



$tablet = [
    new Tablet ('https://', 'Apple Ipad Air', '4GB Ram', 439.50, null, 7, '4G LTE'),
    new Tablet ('https://', 'Samsung Tab', '6GB Ram', 639.50, null, 7, '4G LTE'),
    new Tablet ('https://', 'Mediacom Pad X', '4GB Ram', 239.50, null, 7, 'Wi-Fi'),
];

var_dump($users);
var_dump($usersVip);
var_dump($notebook);
var_dump($tablet);

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./dist/css/app.css">
</head>

<body>

    <h1 class="bg-dark text-white" >Start</h1>

    <script src="./dist/js/app.js"></script>
</body>

</html>