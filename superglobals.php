<h4>GLOBALS:</h4>
<?php
    // GLOBALS
    $x = 5;

    function scoping() {
        $y = 10;
        echo $GLOBALS['x'];
    }
    scoping();
?>
<hr>

<h4>GET & POST:</h4>
<?php 
    /*
        $_GET
        $_POST 
         * $_GET & $_POST uses the name attribute of an input/select within a form.
         * $_GET shows the data that you want to access as an additional slug in your URL
         * $_POST on the other hand cannot be seen in the URL
         * 
         * Also you can only use $_GET if your form method is set to GET, while $_POST if your form method is set to POST. Either way, you cannot access it.
    */

    echo $_GET['user-name'];
?>

<form method="GET">
    <input type="text" name="user-name">
    <button>Sumbit</button>
</form>
<hr>

<h4>COOKIE & SESSION:</h4>
<?php 
    /*
        $_COOKIE
        $_SESSION
         * Cookie and Session is simply a way to store data
    */

    // setcookie("data", "Sample data", time() + 86400);
    /* 
        1st argument is the "key" of the cookie
        2nd argument is the "value" of the cookie that you want to store
        3rd argument is the time you want to expire (optional, i think)
    */

    $_SESSION['id'] = "USER NAME VIA SESSION";
?>