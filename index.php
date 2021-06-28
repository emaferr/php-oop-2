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
    new Notebook ('./dist/img/macbook.jpeg', 'Apple MacBook Air M1', '8GB Ram', 1439.50, null, 14),
    new Notebook ('./dist/img/asus.jpeg', 'Asus Rog Zephyrus', '16GB Ram', 1439.50, null, 16),
    new Notebook ('./dist/img/lenovo.jpeg', 'Lenovo IdeaPad', '12GB Ram', 980.00, null, 15),
    new Notebook ('./dist/img/acer.jpeg', 'Acer aspire v-nitro', '24GB Ram', 1016.32, null, 15),
];

$tablet = [
    new Tablet ('https://', 'Apple Ipad Air', '4GB Ram', 439.50, null, 7, '4G LTE'),
    new Tablet ('https://', 'Samsung Tab', '6GB Ram', 639.50, null, 7, '4G LTE'),
    new Tablet ('https://', 'Mediacom Pad X', '4GB Ram', 239.50, null, 7, 'Wi-Fi'),
];


// var_dump($users);
// var_dump($usersVip);
// var_dump($notebook);
// var_dump($tablet);
 
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

    <header>

        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="" alt="" width="" height="" class="d-inline-block align-text-top">
                    Shop
                 </a>
             </div>
        </nav>

    </header>

    <main>

        <div class="container">
            <h2>Notebook</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
                <?php foreach ($notebook as $item) : ?> 
                <div class="col">
                    <div class="card">
                        <div class="notebook_img">
                            <img src="<?= $item->getPath(); ?>" class="card-img-top p-3" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $item->getName(); ?></h5>
                            <p class="card-text"><?= $item->getDesc(); ?></p>
                            <h6 class="card-text"><?= $item->diagonal; ?></h6>
                            <h6 class="card-text"><?= $item->getPrice(); ?></h6>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
            <h2>Tablet</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
                <?php foreach ($tablet as $item) : ?> 
                <div class="col">
                    <div class="card">
                        <div class="notebook_img">
                            <img src="<?= $item->getPath(); ?>" class="card-img-top p-3" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $item->getName(); ?></h5>
                            <p class="card-text"><?= $item->getDesc(); ?></p>
                            <h6 class="card-text"><?= $item->diagonal; ?></h6>
                            <h6 class="card-text"><?= $item->getPrice(); ?></h6>
                            <h6 class="card-text"><?= $item->connect; ?></h6>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    
    </main>

    <script src="./dist/js/app.js"></script>
</body>

</html>