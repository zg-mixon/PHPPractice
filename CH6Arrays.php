<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays</title>
</head>
<body>

<h1>Evaluated Code Result Below</h1>
<hr>

<?php

    // Basic array population and iteration over content
    /*
    $paper[] = "Copier";
    $paper[] = "Inkjet";
    $paper[] = "Laser";
    $paper[] = "Photo";

    for ($j = 0; $j < sizeof($paper); ++$j)
    {
        echo "$j: $paper[$j]<br>";
    }
    */

    // Associative arrays - key value pair arrays. Indices to call the value are textual instead of numerical
    /*
    $paper['copier'] = "Copier & Multipurpose";
    $paper['inkjet'] = "Inkjet Printer";
    $paper['laser'] = "Laser Printer";
    $paper['photo'] = "Photographic Paper";

    echo $paper['laser'];
    */

    // Assigning multiple items to an array at the same time
    /*
    //Assignment without associative index value pairings
    $p1 = array("Copier", "Inkjet", "Laser", "Photo");

    echo "p1 element: " . $p1[2] . "<br>";

    // Assignment with key value pairing
    $p2 = array(
        'copier' => "Copier and Multipurpose",
        'inkjet' => "Inkjet Printer",
        'laser' => "Laser Printer",
        'photo' => "Photographic paper"
    );

    echo "p2 element: " . $p2['laser'] . "<br>";
    */

    // Foreach...as Loop with a non-associative array
    /*
    $paper = array("Copier", "Inkjet", "Laser", "Photo");
    $i = 1;

    foreach($paper as $item)
    {
        echo "$i: $item<br>";
        $i++;
    }
    */

    // Foreach...as Loop with an associative array
    /*
    $p2 = array(
        'copier' => "Copier and Multipurpose",
        'inkjet' => "Inkjet Printer",
        'laser' => "Laser Printer",
        'photo' => "Photographic Paper"
    );

    foreach ($p2 as $item => $description)
    {
        echo "$item: $description.<br>";
    }
    */

    // Multidimensional arrays
    /*
    $products = array(

        'paper' => array(

            'copier' => "Copier and Multipurpose",
            'inkjet' => "Inkjet Printer",
            'laser' => "Laser Printer",
            'photo' => "Photographic Paper"
        ),

        'pens' => array(
            'ball' => "Ball Point",
            'hilite' => "Highlighters",
            'marker' => "Markers"
        ),

        'misc' => array(
            'tape' => "Sticky Tape",
            'glue' => "Adhesives",
            'clips' => 'Paperclips'
        )
    );

    echo "<pre>";

    foreach ($products as $section => $items)
    {
        foreach ($items as $key => $value)
        {
            echo "$section:\t$key\t($value)<br>";
        }
    }

    echo "</pre>";

    // Direct access to a multidimensional associative array element. The same can be achieved with non-associative
    // arrays by specifying the nested numerical index
    echo $products['misc']['glue'];
    */

    // Array functions

    // is_array() returns a boolean true value if the checked $variable is an array. Ternary expression below.
    /*
    $fred = 'person';
    echo (is_array($fred)) ? "Is an array" : "Is not an array";
    */

    // count($array) returns the amount of items in an array. count($array, 1) has a second argument to the built
    // in function to declare the mode of count. 1 = recursive count to check subarrays in a multidimensional array and
    // will return all the full count even in a multidimensional array. 0 will keep it non-recursive.
    /*
    $arr = array("Cat", "Dog", "Bird");
    echo count($arr,0); //Only necessary to declare a mode value if you need recursion. Default 0 mode
    */

    // sort($array, sort_flag) will sort depending on your desired outcome based on the sort_flag used. Example below
    // is an alphabetical sort. rsort() follows after with the same syntax, but reversed result. Acts on supplied array
    // and returns true or false depending on success of action.
    /*
    $arr = array("Cat", "Dog", "Bird");
    $j = 1;
    sort($arr, SORT_STRING);
    rsort($arr, SORT_STRING);

    foreach ($arr as $animal)
    {
        echo "$j: " . "$animal<br>";
        $j++;
    }
    */

    // shuffle($array) randomizes the order of the supplied array and returns on successful execution. New randomized
    // order of array on each call to the shuffle() function. i.e. on page reload, new order is established.
    /*
    $arr = array("Cat", "Dog", "Bird");
    shuffle($arr);


    foreach ($arr as $animal)
    {
        echo "$j: " . "$animal<br>";
        $j++;
    }
    */

    // explode() takes a delimiter (identifier of what spaces to explode on. Empty string in this case represents a
    // single whitespace) as the first argument and the string to explode as the second argument. Assignment to a
    // variable assigns the exploded string as an array.
    /*
    $sentence = "This is a seven word sentence, yo!";
    $temp_arr = explode(' ', $sentence);

    print_r($temp_arr);
    */

    // extract() will take a key value pair from an associative array (useful in $_GET & $_POST arrays generated during
    // http calls) and extract a key value and declare it as a variable with the value of it's value pair. Variable
    // overwriting is a concern, but can be addressed through adding prefixes with the extra args below.
    /*
    $paper['copier'] = "Copier & Multipurpose";
    $paper['inkjet'] = "Inkjet Printer";
    $paper['laser'] = "Laser Printer";
    $paper['photo'] = "Photographic Paper";

    $var = extract($paper, EXTR_PREFIX_ALL, 'frompaper');

    echo "$frompaper_copier"; //frompaper_ prefix is added to extracted variables and the key evaluates to its value pair
    */

    // compact() will create an array from variables and their values.
    /*
    $fname = "Doctor";
    $sname = "Who";
    $planet = "Gallifery";
    $system = "Gridlock";
    $constellation = "Kasterborous";

    $contact = compact('fname', 'sname', 'planet', 'system', 'constellation');

    print_r($contact);
    */

    // compact() can be coupled with explode() in order to create a nice little debugging function. Useless since I have
    // breakpoints though. Example below.
    /*
    $j = 23;
    $hello = "temp";
    $address = "1 Old Street";
    $age = 61;

    print_r(compact(explode(' ', 'j hello address age')));
    */

    // reset() will return the code to the start of the array during any interaction on an array. PHP has an internal
    // pointer to keep track of where you are inside of an array based on what actions the program has already taken at
    // runtime or later through events

    // end() does the inverse of reset and immediately jumps to the end of the array and returns the final value.

?>

</body>
</html>

