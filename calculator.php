<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>
    <form action="" method="POST">
        <input type="number" name="val1" required autocomplete="off">
        <input type="number" name="val2" required autocomplete="off">
        <fieldset class="operations__wrapper">
            <label for="operation">add</label>
            <input type="radio" name="operation" value="add" checked id="operation"><br />
            <label for="operation">subtract</label>
            <input type="radio" name="operation" value="subtract" id="operation"><br />
            <label for="operation">multiply</label>
            <input type="radio" name="operation" value="multiply" id="operation"><br />
            <label for="operation">divide</label>
            <input type="radio" name="operation" value="divide" id="operation"><br />
            <label for="operation">none</label>
            <input type="radio" name="operation" value="none" id="operation"><br />
        </fieldset>
        <input name="submit" type="submit" value="Submit">
    </form>
    <h2>The answer is:</h2>
</body>

</html>

<?php
/* 
    print strlen("test to");
    print '<br />';
    print str_word_count("test to");
    print '<br />';
    print strrev("test to");
    print '<br />';
    print strpos("test to", "to"); // 0 based indexing
    print '<br />';
    print str_replace("to", "bobo ka ba!", "test oi, to");
    first arg is the value we want to be replaced, 2nd arg is the new value we will be useing to replace the 1st arg. 
    3rd arg is the value where we will look for the 1st arg and replace it with the 2nd arg

    $_GET = for testing
    $_POST = for production after testing
*/
if (isset($_POST['submit'])) {
    $val1 = $_POST['val1'];
    $val2 = $_POST['val2'];

    switch ($_POST['operation']) {
        case 'add':
            echo $val1 + $val2;
            break;
        case 'subtract':
            echo $val1 - $val2;
            break;
        case 'multiply':
            echo $val1 * $val2;
            break;
        case 'divide':
            echo $val1 / $val2;
            break;
        default:
            echo 'none is selected';
    }
}

?>