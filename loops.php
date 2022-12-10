<?php 
    // TO CHECK THIS PAGE VISIT
    // http://localhost:PORT/loops.php

    // loops in PHP
    // storing variables in a $ sign
    // use define() method to assign a constant to a variable
    // concatenation is by using dot '.'
    define("blogs_2", ["blogs2_1", "blogs2_2", "blogs2_3", "brooo", "weird af"]);
    define("vehicles", [
        "car",
        "bike",
        "jcb"
    ]);

    $vehicles = [
        "ferrari",
        "mercedes",
        "gmc"
    ];

    $str = 'Products';
    $blogs = ['blog1', 'blog2', 'blog3'];
    for($i=0; $i < count($blogs); $i++) {
        echo $blogs[$i] . '<br />';
    }
    
    for($k=0; $k < count(blogs_2); $k++) {
        echo "blogs_2[$k] " . '<br />';
    }

    // we aren't using the constant variable here because it is not WRITABLE
    foreach ($vehicles as $vehicle) {
        echo $vehicle . '<br />';
    }

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
        ]
    ];

    $count = 0;
    foreach ($products as $product) {
        $count += 1;
        // echo "Item no. $count: " . $product['product_name'] . '<br />' . $product['price'] . '<br />';
        echo 
            "Item no. $count: " . $product['product_name'] . '<br />' . 
            "Price starts at PHP " . $product['price'] . ' suggested retails price.' . '<br /> <hr />' 
        ;
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
    <h1><?php echo $str; ?></h1>

    <!-- 
        Pasting a loop inside the html, php is what I think the weirdest thing I've encountered so far
    -->

    <ul>
        <?php foreach($products as $product) { ?>
            <h3><?php echo $product['product_name']; ?></h3>
            <li><?php echo 'Php' . $product['price']; ?></li>
        <?php } ?>
    </ul>

</body>
</html>