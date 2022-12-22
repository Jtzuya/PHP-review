<?php session_start(); ?>

<ul>
    <li><a href="session.php">SESSION</a></li>
    <li><a href="homepage.php">HOMEPAGE</a></li>
    <li><a href="contactpage.php">CONTACT PAGE</a></li>
</ul>
<?php include('routing.env.php'); ?>
<?php echo '<br> and is at Contact Page' ;?>