<?php 
    // TO CHECK THIS PAGE VISIT
    // http://localhost:PORT/booleans.php
    
    // Booleans & Comparison

    $sampleNum = 1;
    
    if($sampleNum == 1) {
        echo true; // expected to return "1"
    } else {
        echo false; // expected to return ""
    }

    // numbers
    echo 5 < 10; // returns "true" comparison since 10 is greater than 5, but since this is true it will rather return a string of one "1"
    echo 5 > 10; // returns empty string ""
    echo 5 == 10; // false, expected "" empty string
    echo 5 == 5 . '<br />'; // true, expected "1" empty string
    echo 'br';
    echo 5 == 10;
    
    // only sing equal is used for assigning

    echo '<br />';

    // strings
    echo 'strings';
    echo 'a' > 'b'; // expected to return true, since a is the very first string in the alphabet. This only happens in strings
    echo '<br />';
    echo 'b' > 'a'; // expected to return false or empty string ""
    // an uppercase letter is seeing as less than the lowercase letter
    echo 'A' < 'a'; // expected to return true


    // loose vs strict equal comparison
    echo 5 == '5'; // returns true // loose comparison
    echo 5 === '5'; // returns false // strict comparison by using double equals


    // if a comparison is true or if the boolean is 'true', it shows a string of '1'
    // else if false, it shows nothing or an empty string

?>