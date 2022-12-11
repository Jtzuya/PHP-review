<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <link rel="stylesheet" href="./php-ui/assets/styles.css" type="text/css" />
</head>

<body>

    <main>
        <form action="./forms.php" method="POST">
            <fieldset>
                <legend>Submit an order:</legend>
                <div class="email__case">
                    <label for="">Email:</label>
                    <input type="text" name="email" placeholder="sample1010@gmail.com" />
                </div>
                <div class="product__case">
                    <label for="">Product:</label>
                    <input type="text" name="product" placeholder="Hygienix Alcohol" />
                </div>
                <div class="quantity__case">
                    <label for="">Quantity:</label>
                    <input type="text" name="quantity" placeholder="1" />
                </div>
                <div class="form--btn">
                    <input type="submit" name="submit" value="submit">
                </div>
            </fieldset>
        </form>
    </main>

</body>

</html>

<?php
// echo '<br />';
// echo 'this is from the forms file';

// FORMS
/*
    POST & GET requests
    difference between POST & GET requests
    GET ~ shows the output in our URL and is concatenated as SLUG (which is not secure)
    POST ~ does not show the output in our URL, like the GET requests does
*/
// isset() https://www.php.net/manual/en/function.isset.php

// if (isset($_GET['submit'])) {
//     echo $_GET['email'] . '<br />';
//     echo $_GET['product'] . '<br />';
//     echo $_GET['quantity'] . '<br />';
// }

// Using POST method instead of GET is more secure because it is hidden
if (isset($_POST['submit'])) {
    // try inserting a script <script>window.location="https://www.youtube.com"</script> to one of the inputs and press submit the button.
    // While we are not using htmlspecialchars() keyword
    // echo $_POST['email'] . '<br />';
    // echo $_POST['product'] . '<br />';
    // echo $_POST['quantity'] . '<br />';


    echo htmlspecialchars($_POST['email']) . '<br />';
    echo htmlspecialchars($_POST['product']) . '<br />';
    echo htmlspecialchars($_POST['quantity']) . '<br />';
}

// Still not secure, XSS (Cross site scripting attacks) Attacks next course
// we will just wrapping it with htmlspecialchars(), docs https://www.php.net/manual/en/function.htmlspecialchars.php
?>