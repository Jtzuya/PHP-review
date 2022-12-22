<?php 
    include_once 'db.env.php';

    $userName = mysqli_real_escape_string($con, $_POST['user_name']);
    $userEmail = mysqli_real_escape_string($con, $_POST['user_email']);
    $userPass = mysqli_real_escape_string($con, $_POST['user_password']);
    $userPhone = mysqli_real_escape_string($con, $_POST['user_phone']);
    $userAddress = mysqli_real_escape_string($con, $_POST['user_address']);

    $sql = "INSERT INTO login_system (
        user_name,
        user_email,
        user_password,
        user_phone,
        user_address,
        date_created
    ) VALUES (
        '$userName',
        '$userEmail',
        '$userPass',
        '$userPhone',
        '$userAddress',
        NOW()
    );";

    mysqli_query($con, $sql);
    header('Location: ../index.php?signup=success');
?>