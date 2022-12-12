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
$email = $product = $quantity = '';
$errors = array(
    'email' => '',
    'product' => '',
    'quantity' => ''
);

if (isset($_POST['submit'])) {
    /*
        try inserting a script <script>window.location="https://www.youtube.com"</script> to one of the inputs and press submit the button.
        While we are not using htmlspecialchars() keyword
        echo $_POST['email'] . '<br />';
        echo $_POST['product'] . '<br />';
        echo $_POST['quantity'] . '<br />';
    */

    // Server side validation & filtering in PHP
    // 1. Check email
    if (empty($_POST['email'])) {
        $errors['email'] = "Sorry, you need to fill your email <br />";
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Email must be a valid email address.";
        } else {
            // echo htmlspecialchars($_POST['email']) . '<br />';
        }
    }

    // 2. Check product
    if (empty($_POST['product'])) {
        $errors['product'] = "Sorry, you need to fill your {$productErr} <br />";
    } else {
        $product = $_POST['product'];
        if (!preg_match('/^[a-zA-Z0-9\s]+$/', $product)) {
            $errors['product'] = "Product name should not have a special characters.";
        } else {
            // echo htmlspecialchars($_POST['product']) . '<br />';
        }
    }

    // 3. Check quantity
    if (empty($_POST['quantity'])) {
        $errors['quantity'] = "Sorry, you need to fill your {$quantityErr} <br />";
    } else {
        $quantity = $_POST['quantity'];
        if (!preg_match('/^[0-9]+$/', $quantity)) {
            $errors['quantity'] = "Product quantity should be a set of numbers and not letters or special characters.";
        } else {
            // echo htmlspecialchars($_POST['quantity']) . '<br />';
        }
    }

    // Check if there are any errors, if not, then the form is valid and redirect back to the homepage page ./php-ui/index.php
    if(array_filter($errors)) {
        echo 'there are errors in the form';
    } else {
        // echo 'form is valid';
        header('Location: ./php-ui/index.php');
    }
}

// Still not secure, XSS (Cross site scripting attacks) Attacks next course
// we will just wrapping it with htmlspecialchars(), docs https://www.php.net/manual/en/function.htmlspecialchars.php


// TODOOOOOOOOOOOOOOOOOOO
// branch is now updated, checkout to a new branch and name it continuation_mysql
// reference https://www.youtube.com/watch?v=N2L9KZo2szY&list=PL4cUxeGkcC9gksOX3Kd9KPo-O68ncT05o&index=23
// push
// PR
// check PR
// merge

?>

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
                    <input type="text" name="email" placeholder="sample1010@gmail.com" value="<?php echo htmlspecialchars($email); ?>" />
                    <div class="error"><?php echo $errors['email']; ?></div>
                </div>
                <div class="product__case">
                    <label for="">Product:</label>
                    <input type="text" name="product" placeholder="Hygienix Alcohol" value="<?php echo htmlspecialchars($product); ?>" />
                    <div class="error"><?php echo $errors['product']; ?></div>
                </div>
                <div class="quantity__case">
                    <label for="">Quantity:</label>
                    <input type="text" name="quantity" placeholder="1" value="<?php echo htmlspecialchars($quantity); ?>" />
                    <div class="error"><?php echo $errors['quantity']; ?></div>
                </div>
                <div class="form--btn">
                    <input type="submit" name="submit" value="submit">
                </div>
            </fieldset>
        </form>
    </main>

</body>

</html>