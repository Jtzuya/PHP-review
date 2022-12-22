<?php
// https://www.php.net/manual/en/timezones.php
// Philippines same timezone
// Singapore, Macau, Brunei, Irkutsk

date_default_timezone_set("Asia/Irkutsk");
$dayToday = strtoupper(date('l')); // day of the week (mon, tue, wed, thu, fri, saturday, sunday)
$timeRightNowHours = date('h'); // in hours 1-12
$timeRightNowMins = date('i'); // in minutes 0-59
$timeSet = date('a'); // (am or pm)
//echo 'Time right now: ' . $timeRightNowHours . ':' . $timeRightNowMins . $timeSet . '<br/>';
//echo 'Day of the week: ' . $dayToday . '<br/>';

//echo "The time is " . date("h:i:sa");

switch ($dayToday) {
    case 'Monday' || 'Tuesday' || 'Wednesday' || 'Thursday' || 'Friday':
        print "<p>Today is " . "<strong>$dayToday</strong>" . " & it is grind day! <strong>💪</strong></p>";
        print "<h6>$timeRightNowHours : $timeRightNowMins $timeSet</h6>";
        print "<h5>TIMECHECK</h5>";
        break;
    default:
        print "<p>Today is " . $dayToday . " & it is break day. 💤</p>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>

    <style>
        body {
            height: 100vh;
            display: grid;
            place-content: center;
        }

        p,
        h5,
        h6 {
            font-family: monospace;
        }

        strong {
            font-size: 6rem;
            animation: coolors 0.75s infinite alternate;
        }

        p {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 500;
            text-transform: capitalize;
        }

        @keyframes coolors {
            0% {
                color: black;
                text-shadow: 1px 1px 0px #ff0000;
            }

            15% {
                color: crimson;
                text-shadow: 1px 1px 3px #ff0000;
            }

            30% {
                color: teal;
                text-shadow: 1px 1px 7px #ff0000;
            }

            45% {
                color: palegoldenrod;
                text-shadow: 1px 1px 0px #ff0000;
            }

            60% {
                color: palegreen;
                text-shadow: 1px 1px 3px #ff0000;
            }

            75% {
                color: tomato;
                text-shadow: 1px 1px 7px #ff0000;
            }

            90% {
                color: turquoise;
                text-shadow: 1px 1px 0px #ff0000;
            }

            100% {
                color: blueviolet;
                text-shadow: 1px 1px 3px #ff0000;
            }
        }

        h6 {
            text-decoration: underline;
            font-size: 2rem;
            text-align: center;
            line-height: 113%;
            margin: 0;
        }

        h5 {
            font-size: 4rem;
            text-align: center;
            line-height: 113%;
            margin: 0;
        }
    </style>
</head>

<body>

</body>

</html>