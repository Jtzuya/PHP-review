<?php 
        include_once 'includes/db.env.php'; 

        $sql = 'SELECT * FROM login_system;';
        $query = mysqli_query($con, $sql);
        $queryResultCheck = mysqli_num_rows($query); // check if we got something back from DB

        switch(true) {
            case $queryResultCheck > 0:
                $dataArray = mysqli_fetch_all($query, MYSQLI_ASSOC);

                for($i = 0; $i < count($dataArray); $i++) {
                    $userName = $dataArray[$i]['user_name'];
                    $userEmail = $dataArray[$i]['user_email'];
                    $userPass = $dataArray[$i]['user_password'];
                    $userPhone = $dataArray[$i]['user_phone'];
                    $userAddress = $dataArray[$i]['user_address'];
                    $userCreated = $dataArray[$i]['date_created'];
                    // echo $userCreated . ' <strong>' . $userName . '</strong>' . '<br>';
                }

                break;

            default:
                echo 'There\'s nothing in here';
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.scss">
</head>
<body>
        <h3>Sign Up:</h3>
        <form action="includes/signup.inc.php" method="POST">
            <input type="text" name="user_name" placeholder="Username">
            <input type="email" name="user_email" placeholder="Email">
            <input type="text" name="user_password" placeholder="Password">
            <input type="number" name="user_phone" placeholder="Phone">
            <input type="text" name="user_address" placeholder="Address">
            <button>Sign Up</button>
        </form>
</body>
</html> 