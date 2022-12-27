<?php include 'includes/autoloader.inc.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $user1 = new UserData("jtzuya", "akoraygahi", "jtzuya.gmail.com", "Jake");
        $user2 = new UserData("yayin", "kiatan", "jaiyhen.gmail.com", "Buragoy");
        echo "Username: " . $user1->userName;
        echo "<hr>";
        echo "Username: " . $user2->userName;
        echo "<hr>";

        print_r($user1->dashboardGreet("brooo"));
        echo "<br>";
        print_r($user2->dashboardGreet("bruv"));
        echo "<br>";

        echo $user1->showPass();
        echo "<br>";
        echo $user2->showPass();

        echo "<br>";
        echo "<hr>";
        $person1 = new Person();
        echo $person1->first;
    ?>
</body>
</html>