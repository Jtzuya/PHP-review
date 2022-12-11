<?php 
    // TO CHECK THIS PAGE VISIT
    // http://localhost:PORT/functions.php

    $str = 'functions ';

    // echo strlen($str);
    // strlen and count is very different

    // $str = 'Broo', here is that we are passing a default value of our $str param so that whenever if we do not have an argument that's being passed to the function and at the 
    // same time using the parameter inside the body of our function, we can still use it without having any error
    function firstLetterToUppercase($str = 'Broo') {
        echo "Hey $str";
    }
    
    firstLetterToUppercase($str); // and if we are passing an argument here, it'll use that value rather than the default value


    /*
        caveat: 
        In PHP, while using i.e $product['name'] inside a string like this "$product['name']" is that it won't return anything and creates an error.
        We need to wrap them inside a curly braces in order for it to be working properly like this "{$product['name']}"
        It's like the template string `` in javascript
        I.e
    */

    function formatProduct($product) {
        // echo "<strong>{$product['name']}</strong> costs {$product['cost']} USD to buy <br />";
        return "<strong>{$product['name']}</strong> costs {$product['cost']} USD to buy <br />";
    }
    $output = formatProduct(['name' => 'Macbook Pro', 'cost' => '1200.00']);
    echo '<br />' . $output;
    



    // echo 'test';
?>