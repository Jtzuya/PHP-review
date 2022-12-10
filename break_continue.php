<?php 
    // TO VISIT THIS PAGE
    // KINDLY GOTO http://localhost:PORT/break_continue.php

    echo strToUpper('continue and breaks');
    // by simply using
    // break;
    // continue;

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
        ]
    ];
    
    echo '<hr />';

    foreach($products as $product) {
        // this skips the values that's inside the statement, rexona and nursy
        if($product['product_name'] == "Rexona(packets)" || $product['product_name'] == "Nursy (Baby wipes)") {
            continue; // try using break, samne output
        }

        echo $product['product_name'] . '<br /><hr />';
    }
?>