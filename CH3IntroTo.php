<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>Test</h1>
    <hr>




    <!-- The below is the way that you open up and close a php statement. If the file only contains php the closing tag is
    unnecessary and redundant. Inside the statement is the keyword echo which outputs the following text string as is.
    All php statements end with a semi-colon and are strictly necessary to denote the end of a statement.
    -->

    <?php
        // echo "Hello World";

        // This is a comment in php
        /* This is a
        multi-line
        comment in PHP
        */

        // Below is an example of variable declaration. All variables must be preceded by $ so the interpreter can
        // easily spot the variables on the first pass through
        /*
        $mycounter = 1;
        $mystring = "Hello";
        $myarray = array("One", "Two", "Three");
        */

        // String variable declaration and use below. (The standalone . between $username and the empty space string is
        // the string concatenation operator in php
        /*
        $username = "Fred Smith";
        echo $username . " ";

        echo "<br>";

        $currentuser = $username;
        echo $currentuser;
        */

        // Numerical value assignment
        /*
        $count = 17;
        $floatcount = 17.5;
        */

        // Array example below (Array's are 0 indexed)
        /*
        $team = array("George", "Bill", "Susie", "Anne");
        echo $team[3];
        echo "<br>";
        */

        // Two dimensional array below. Tic Tac Toe (Nesting can create multi-dimensional arrays as needed)
        /*
        $oxo = array(array('x', ' ', 'o'),
                     array('o', 'x', 'o'),
                     array('o', ' ', 'x'));

        echo $oxo[1][2];
        */

        // Variable naming rules commented below
        /*
         * Variable names must start with a letter of the alphabet or an underscore _
         * Variable names can contain only the characters a-z, A-Z, 0-9 and _
         * Variable names may not contain spaces
         * Variable names are case sensitive
         */

        // Math operators below

        /*
         * + Add
         * - Subtract
         * * Multiply
         * / Divide
         * % Modulus
         * ++ Increment by 1
         * -- Decrement by 1
         */

        // Assignment Operators

        /*
         * = equals
         * += Adds value on right side to left side of operator
         * -= Subtracts value on right side from left side
         * *= Multiplies value on right side against left side
         * /= Divides left side by right side
         * .= String concatenation operand
         * %= Takes modulus of left hand side by right hand side
         */

        // Comparison Operators
        /*
         * == Check if equal to
         * != Check if not equal to
         * > Check if greater than
         * < Check if less than
         * >= Check if greater than or equal to
         * <= Check if less than or equal to
         */

        // Logical Operators (Refer to page 47 of book for full explanation)
        /*
         * && And
         * and Low-precedence and
         * || Or
         * or Low-precedence or
         * ! Not
         * xor Exclusive or
         */

        // Interesting subtle difference of iterative truth checking

        // Increment before checking == operand
        /*
        $x = 1;
        if (++$x == 10) echo $x;
        */

        // Increment after checking == operand
        /*
        $y = 2;
        if ($y++ == 10) echo $y;
        */

        // String Concatenation ( . )
        /*
        $menuitem = "pickled herring";
        echo "You have " . $menuitem . " on the menu for today!";
        */

        // Two different string types in PHP
        /*
         * Single quote '' are string literals and will print $variable as plain text
         * Double quote "" are not string literals and will print the value of $variable. Nice for clean string
         * concatenation as no . is required to include the value of a string variable. Term for this is
         * variable substitution
         */

        // Escape character is \ in PHP
        /*
        $textfail = 'My spelling's atroshus;
        $text = 'My spelling\'s still atroshus';
        $text1 = "She wrote upon it \"return to sender.\"";
        */

        // Special escape characters are available to format a string of text, but only in double quote strings
        // \t = tab  \n = new line  \r = return
        /*
        $heading = "Date\tTime\tPlace";
        echo $heading;
        */

        // Multi-line string echo statement
        /*
        $author = "Steve Balmer";

        echo "Developers, Developers, Developers, Developers, Developers, Developers, Developers, Developers.
        
        - $author.";
        */

        // Multi-line string assignment
        /*
        $author = "Bill Gates";

        $text = "Measuring programming progress by lines of code is like measuring aircraft building progress by 
                weight.
                
                - $author.";
        echo $text;
        */

        // Multi-line sequence (heredoc) Used to preserve all formatting. Alternative to string literal
        /*
        $author = "Brian W. Kernighan";

        echo <<<_END
        Debugging is twice as hard as writing the code in the first place. Therefore, if you write the code as 
        cleverly as possible, you are, by definition, not smart enough to debug it.
        
        - $author.
        
_END;
        */

        // Multi-line sequence with variable assignment
        /*
        $author = "Scott Adams";

        $out = <<<_END
        Normal people believe that if it ain't broke, don't fix it.
        Engineers believe that if it ain't broke, it doesn't have enough 
        features yet.
        
        - $author.
_END;
        echo $out;
        */

        // Variable Typing: PHP is a very loosely typed language

        // Example below of automatic conversion of number to string
        /*
        $number = 12345 * 67890;
        echo substr($number, 3, 1);
        */

        // Example below of automatic conversion of string to number
        /*
        $pi = "3.1415927";
        $radius = 5;
        echo $pi * ($radius * $radius);
        */

        // Constants and definition syntax below. Best practice to only use uppercase for constant definition
        /*
        define("ROOT_LOCATION", "/usr/local/www/");
        $directory = ROOT_LOCATION;
        */

        // Magic constants below
        /*
         * __LINE__ = Current line number of file
         * __FILE__ = Full path and filename of file
         * __DIR__ = The directory of the file
         * __FUNCTION__ = Function name. Returns function name as it was declared
         * __CLASS__ = Class name. ~~~~~~~~~
         * __METHOD__ = Method name. ~~~~~~~~
         * __NAMESPACE__ = Namespace name. ~~~~~~~~~
         */

        // Example of use-case for a couple magic constants below
        /*
        echo "This is line " . __LINE__ . " of file " . __FILE__;
        */

        // Difference between print and echo (Refer to page 55 in book)

        // Simple function declaration in php example below
        /*
        function longdate($timestamp) {
            return date("l F jS Y", $timestamp);
        }

        echo longdate(time());
        */

        // Variable Scope types below

        // Local variable scope example using function example. $temp is created and disposed of inside of the
        // longdate() function. Function's can only access variables created inside the function and variables outside
        // of functions can only be accessed by non-function code
        /*
        function longdate($timestamp) {
            $temp = date("l F jS Y", $timestamp);
            return "The date is $temp";
        }

        echo longdate(time());
        */

        // A solution to get around the variable scope limitations is to create variables outside of the function scope
        // and pass them to the function as arguments. Example below
        /*
        $temp = "The date is ";
        echo longdate($temp, time());

        function longdate($text, $timestamp) {
            return $text . date("l F jS Y", $timestamp);
        }
        */

        // Global variable declaration example below. Global variables should be used sparingly and best practice is to
        // is to declare the global variables you do have to use in all uppercase similar to constants. More info pg. 59
        /*
        global $IS_LOGGED_IN;
        */

        // Static variable example below. Use case example pg. 59
        /*
         * Function made to log how many times it's called by displaying a static variable that iterates its value up
         * by 1 every single call to the function
        function test(){
            static $count = 0;
            echo $count;
            $count++;
        }
        */

        // Super Globals should always be sanitized by using htmlentities() function



    ?>
</body>
</html>