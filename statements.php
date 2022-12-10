<?php
// TO CHECK THIS PAGE VISIT
// http://localhost:PORT/statements.php

// If else statements and Switch statements

echo "statements";

$price = 29.95;
$yourMoney = 35.95;

echo '<br />';

if ($price > 33.93) {
    echo "it is not cheap";
} elseif ($yourMoney > $price) {
    echo "you can afford this!";
} else {
    echo "it is affordable";
}

echo '<br />';

$products = [
    [
        'product_name' => 'Hygienix',
        'price' => '130.00'
    ],
    [
        'product_name' => 'Sky Flakes',
        'price' => '7.00'
    ],
    [
        'product_name' => 'Presto',
        'price' => '8.00'
    ],
    [
        'product_name' => 'Nursy (Baby wipes)',
        'price' => '75.00'
    ],
    [
        'product_name' => 'Rexona(packets)',
        'price' => '15.00'
    ],
];

echo '<br />';

foreach ($products as $product) {
    if ($product['price'] > 20) {
        echo $product['product_name'] . " is quite expensive! " . "because it's price is " . $product['price'] . '<br /> <hr />';
    } elseif ($product['price'] > 10 and $product['price'] < 20) {
        echo $product['product_name'] . " is not that cheap! " . "because it's price is " . $product['price'] . '<br /> <hr />';
    } else {
        echo $product['product_name'] . " is affordable! " . "because it's price is " . $product['price'] . '<br /> <hr />';
    }
}

foreach ($products as $product) {
    switch (true) {
        case $product['price'] > 20:
            echo $product['product_name'] . ' is as expensive as lambo! ' . '<br /> <hr />';
            break;
        default:
            echo $product['product_name'] . ' is okay... ' . '<br /> <hr />';
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>STATEMENTS</h1>

    <ul>
        <?php foreach ($products as $product) { ?>
            <?php if ($product['product_name'] == 'Sky Flakes' || $product['product_name'] == 'Presto') { ?>
                <h5>
                    <?php echo $product['product_name']; ?>
                    <span> ~ <?php echo 'is a food'; ?></span>
                </h5>
            <?php } else { ?>
                <h5>
                    <?php echo $product['product_name']; ?>
                    <span> ~ <?php echo ' is a different necessity'; ?></span>
                </h5>
            <?php } ?>
        <?php } ?>
    </ul>

</body>

</html>