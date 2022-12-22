<?php session_start(); ?>

<ul>
    <li><a href="session.php">SESSION</a></li>
    <li><a href="homepage.php">HOMEPAGE</a></li>
    <li><a href="contactpage.php">CONTACT PAGE</a></li>
</ul>
<?php include('routing.env.php'); ?>
<?php
    if(isset($_SESSION['userID'])) {
        echo '<br> you are logged in';
    } else {
        echo '<br> you are not logged in';
    }
?>