<?php 
    // TO CHECK THIS PAGE VISIT
    // http://localhost:PORT/functions.php
    
    $name = 'jake';

    function scoping() {
        // you cannot use a variable from global to your function if you do not set it and call that variable from global env.
        // global $name; // comment/uncomment to see the output 
        // $name = 'tatsuya'; // comment/uncomment to see the output 
        echo "yooooo " . $name; 
    }

    '<br />';
    // echo $name; // comment/uncomment to see the output 
    scoping();

    // '<br />';
    // echo $name; // comment/uncomment to see the output 

    // Just like 'global' keyword but by using an ampersand concatenated to the variable that we are passing as a parameter
    function usingAmpersandToChangeTheStringValue(&$name) {
        $name = 'Von';
        echo $name . '<br />';
    }
    usingAmpersandToChangeTheStringValue($name);

    echo 'outside the function ' . $name; // so from "Jake" to "Von"
?>