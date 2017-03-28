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

    // Basic do-while loop syntax
    /*
    $count = 1;
    do
        echo "$count times 12 is " . $count * 12 . "<br>";
    while (++$count <= 12);
    */

    // Basic for loop syntax below
    /*
    for ($count = 1; $count <= 12; ++$count) {
        echo "$count times 12 is " . $count * 12 . "<br>";
    }
    */

    // For loop with multiple operations in each parameter
    /*
    for ($i = 1, $j = 1; $i + $j < 10; $i++, $j++) {
        //
    }
    */

    // Breaking out of a loop. Fun little tidbit, you can break up multiple levels in nested statements i.e. break 2
    // breaks you up two levels.
    /*
    $fp = fopen("text.txt", 'wb');

    for($j = 0; $j < 100; $j++) {
        if (!fwrite($fp, "data")) break;
    }
    fclose($fp);
    */

    // Continue Statement skips current iteration to start running the next iteration based on if certain conditions
    // are met. Example below insures that you are never dividing by 0.
    /*
    $j = 10;

    while ($j > -10) {
        $j--;
        if ($j == 0) continue;
        $result = 10 / $j;
        echo $result . "<br>";
    }
    */

    // Implicit vs Explicit type casting
    /*
    $a = 56;
    $b = 12;
    $c = $a / $b;

    // Implicit type casting turns $c into a float for specificity sake
    echo $c;

    // Explicit type casting example below
    $c = (int) ($a / $b);

    echo $c;
    */

    
?>