<?php 

    /*
        Options to communicate with the database
        MYSQLi or PDO
        ~ MySQLi and i stands for improved (code more procedural manner)
        ~ PDO: PHP Data Objects (Preferred as PHP developer)
    */

    // connect to the databse
    $connection = mysqli_connect('127.0.0.1', 'user_testing', ']Abm)aHvJz1@zI@s', 'test_database');

    // check connection
    if(!$connection) {
        echo 'Connection error ' . mysqli_connect_error()
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