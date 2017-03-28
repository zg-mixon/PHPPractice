<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Expressions and Control Flow</title>
</head>
<body>
    <h1>Current evaluated code result below</h1>
    <hr>
</body>
</html>
<?php

    // Basic if statement syntax in PHP
    /*
    $finished = 0;
    $gn = 1;

    if ($finished == 1 || $gn == 1) exit;
    */

    // Basic multi-line conditional statement
    /*
    $bank_balance = 12;

    if ($bank_balance < 100) {
        $money = 1000;
        $bank_balance += $money;
    }

    echo $bank_balance;
    */

    // Basic if-else syntax
    /*
    $bank_balance = 12;

    if ($bank_balance < 100) {
        $money = 1000;
        $bank_balance += $money;
    }
    else {
        $savings += 50;
        $bank_balance -= 50;
    }

    echo $bank_balance;
    */

    // Basic elseif syntax
    /*
    if ($bank_balance < 100) {
        $money = 1000;
        $bank_balance += $money;
    }
    elseif ($bank_balance > 200) {
        $savings += 100;
        $bank_balance -= 100;
    }
    else {
        $savings += 50;
        $bank_balance -= 50;
    }

    echo $bank_balance;
    */

    // Basic switch syntax. Note the default: is included in the event none of the case conditions are met.
    /*
    switch ($page) {
        case "Home":
            echo "You selected Home";
            break;
        case "About":
            echo "You selected About";
            break;
        case "News":
            echo "You selected News";
            break;
        case "Login":
            echo "You selected Login";
            break;
        case "Links":
            echo "You selected Links";
            break;
        default:
            echo "Unrecognized selection";
            break;
    }
    */

    // Ternary syntax with variable assignment of evaluating value example
    // Check's to see if $fuel is less than or equal to 1 and then if it evaluates true, it's false that you have enough
    // and True that you have enough if it evaluates false on the comparison.
    // TODO: Study this more, ternary has never really made sense to me.
    /*
    $fuel = 2;
    $enough = $fuel <= 1 ? False : True;
    */

    // Basic while loop example below
    /*
    $fuel = 10;

    while($fuel > 1) {
        echo nl2br("You have enough fuel. \n");
        $fuel--;
    }
    */

    






?>