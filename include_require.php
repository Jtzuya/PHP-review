<?php 
    // TO CHECK THIS PAGE VISIT
    // http://localhost:PORT/include_require.php

    // include is like the import statement on Javascript, works very diffrently because it will include the entire PHP file here

    /*
        include('name of the directory');

        Example:
        pulling the include_test.php file
    */
    include('./include_test.php'); // end result would look like this as a component and we are bringing that component into this file

    
    // require is same like the include() keyword
    // Caveat: require() keyword is like in STRICT mode, than include() keyword
    /*
        require('name of the directory');

        Example:
        pulling the require_test.php file
    */
    require('./require_test.php');


    /*
        Other ways to write include and require
        include './include_test.php';
        require './require_test.php';
    */

    /*
        you can also use this just like in liquid where you are synchronizing components inside the HTML
    */



    echo 'include & require';
    echo '<br />';
    echo 'end of PHP';
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
    <?php include './snippets.php'; ?>
</body>
</html>