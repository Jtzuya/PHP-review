<?php 

    /*
        Options to communicate with the database
        MYSQLi or PDO
        ~ MySQLi and i stands for improved (code more procedural manner)
        ~ PDO: PHP Data Objects (Preferred as PHP developer)
    */

    // connect to the databse
    $connection = mysqli_connect('127.0.0.1', 'root', 'hygienix', 'test_database');

    // check connection
    if(!$connection) {
        echo 'Connection error ' . mysqli_connect_error();
    }

    /* 
        Retrieving data from the database, is by usuing SQL commands or queryies
        1. construct the query
        2. make the query
        3/ fetch the result from that query
        
        write query
        $sql_query = 'SELECT * FROM product_order';
        SELECT * (asterisk means all the data)
        FROM product_order (from the product_order table)
        can also just retrieve 1 or any data from the database by specifying the name of that column to be retrieved 
        example below
    */

    $sql_query = 'SELECT email, product_title FROM product_order';

    // make query and get results
    $results = mysqli_query($connection, $sql_query);

    // fetch results
    $data_result = mysqli_fetch_all($results, MYSQLI_ASSOC); // returns an associative array
    // after fetching it is good to free results from memory
    mysqli_free_result($results);
    // then close the connection
    mysqli_close($connection);

    // print_r($data_result);

    foreach ($data_result as $data) {
        echo $data['email'] . '<br /><hr />';
        echo $data['product_title'] . '<br /><hr />';
    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First UI Experience with PHP</title>
    <link rel="stylesheet" href="./assets/styles.css" type="text/css" />
</head>
<body>
    <?php include './sections/header.php'; ?>
    <?php include './sections/main.php'; ?>
    <?php include './sections/footer.php'; ?>
</body>
</html>