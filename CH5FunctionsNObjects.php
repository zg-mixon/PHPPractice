<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Functions and Objects</title>
</head>
<body>

    <h1>Evaluated result of code below</h1>
    <hr>
<?php

    // Examples of built in functions that operate on strings
    /*
    echo strrev(" .dlrow olleH") . "<br>";
    echo str_repeat("Hip ", 2);
    echo strtoupper("hooray!");
    */

    // Function declaration syntax below
    /*
    function function_name ($parameter1, $parameter2) {
        $result = $parameter1 + $parameter2;
        echo $result;
    }
    */

    // Returning a value and nesting functions below. Evaluation on nested functions happens from the inside out.
    /*
    // echo ucfirst(strtolower("Any # or Nfihslas fuckEry."));

    echo fix_names("WILLIAM", "henry", "gatEs");

    function fix_names($n1, $n2, $n3) {
        $n1 = ucfirst(strtolower($n1));
        $n2 = ucfirst(strtolower($n2));
        $n3 = ucfirst(strtolower($n3));
        return $n1 . " "  . $n2 . " ". $n3;
    }
    */

    // Returning an array value in a function. The example below could be shortened by using a for loop to find to echo
    //the contents of the array with the built in length function sizeof()
    /*
    $names = fix_names("WILLIAM", "henry", "gatEs");
    echo $names[0] . " " . $names[1] . " " . $names[2];

    function fix_names($n1, $n2, $n3) {
        $n1 = ucfirst(strtolower($n1));
        $n2 = ucfirst(strtolower($n2));
        $n3 = ucfirst(strtolower($n3));
        return array($n1, $n2, $n3);
    }
    */

    // Syntax to include external libraries in your PHP files below. include_once is the best practice of the two to use
    /*
    include "library.php";
    include_once "Library.php";
    */

    // Syntax to not only include libraries, but require them for the PHP to even be executed, use require_once
    /*
    require_once "library.php";
    */

    // Checking if function exists in the version of PHP you're using
    /*
    if (function_exists("array_combine"))
    {
        echo "Function exists";
    }
    else
    {
        echo "Function doesn't exist.";
    }
    */

    // phpversion() checks the version of PHP you're running

    // Objects and Object Oriented Programming in PHP below

    // Class declaration example below. print_r() displays information about the object (Whether it was created by a
    // user or built in, it's properties, etc.)
    /*
    $object = new User;
    print_r($object);

    class User
    {
        public $name, $password;

        function save_user()
        {
            echo "Save user code goes here.";
        }
    }
    */

    // Extending the above code to include property declaration on the object $object from the User class as well as
    // a call to the save user function. print_r() thrown in at certain points to show progression of the new object
    // Accessing the properties or method of an object is done using -> i.e. $object->method().
    // It is generally best practice to place the class definitions at the end of a file.
    /*
    $object = new User;
    print_r($object); echo "<br>";

    $object->name = "Joe";
    $object->password = "password";
    print_r($object); echo "<br>";

    $object->save_user();

    class User
    {
        public $name, $password;

        function save_user()
        {
            echo "Save user code goes here.";
        }
    }
    */

    // Cloning an object. Constructors are not copied on clone, only on new. Clone does a "shallow copy" of the existing
    // object.
    /*
    $object1 = new User();
    $object1->name = "Alice";
    $object2 = clone $object1;
    $object2->name = "Amy";

    echo "object1 name = " . $object1->name . "<br>";
    echo "object2 name = " . $object2->name . "<br>";

    class User
    {
        public $name;
    }
    */

    // Constructors
    /*
    $user1 = new User();
    print_r($user1);

    class User
    {
        function __construct()
        {
            //TODO: No idea why the hell I am getting thrown an error on this, and a 255 at that. Not going to fix it so I can move on
            public $user_name = "Guest";
            echo $user_name;
        }
    }
    */

    // Destructors
    /*
    class User
    {
        function __destruct()
        {
            // Destructor code goes here
        }
    }
    */

    // Writing methods in classes. Pretty self explanatory. Also first use of $this in the book so far, which is self-
    // referential to the scope it is inside. i.e. the class User in this case.
    /*
    $object = new User();
    $object->password = "secret";

    echo $object->get_password();

    class User
    {
        public $name, $password;

        function get_password()
        {
            return $this->password;
        }
    }
    */

    // Static methods. Calling a static method syntax - Class_Name::method_name();
    /*
    User::pwd_string();

    class User
    {
        static function pwd_string()
        {
            echo "Please enter your password";
        }
    }
    */

    // Post class declaration property declaration. Works, but bad practice.
    /*
    $object1 = new User();
    $object1->name = "Alice";

    echo $object1->name;

    class User
    {

    }
    */

    // Default value declaration for class attributes in class declaration block. Default values must be constants.
    /*
    class Test
    {
        public $name = "Paul Smith";
        public $age = 42;
    }
    */

    // Constant Declaration. Best practice to declare constants with names in all uppercase letters
    /*
    Translate::lookup(); //Accessing a static function via :: syntax

    class Translate
    {
        const ENGLISH = 0;
        const SPANISH = 1;
        const FRENCH = 2;
        const GERMAN = 3;

        static function lookup()
        {
            echo self::SPANISH;
        }
    }
    */

    // Property and Method Scope keyword and explanations

    // public - default and implicit property scope level when declaring properties or methods
    // protected - these properties and methods can only be accessed by other methods inside of the same class or
    // subclass
    // private - these can only be accessed by members of the same class, not subclass
    // More info on pg. 116

    // Inheritance syntax - class class_name extends inherited_class_name
    /*
    $user1 = new Subscriber();
    $user1->name = "Fred Johnson";
    $user1->password = "pass";
    $user1->phone = "6788745382";
    $user1->email = "email@domain.com";

    $user1->display();

    class User
    {
        public $name, $password;

        function save_user()
        {
            echo "Save user code goes here";
        }
    }

    class Subscriber extends User
    {
        public $phone, $email;

        function display()
        {
            echo "Name: " . $this->name . "<br>";
            echo "Pass: " . $this->password . "<br>";
            echo "Phone: " . $this->phone . "<br>";
            echo "Email: " . $this->email . "<br>";
        }
    }
    */

    // Example of parent operator and method overriding. parent::method_name() references one scope up to the parent or
    // inherited class when there are names of methods duplicated and thus overriding
    /*
    $object = new Son();
    $object->test();
    $object->test2();

    class Dad
    {
        function test()
        {
            echo "[Class Dad] I am your Father<br>";
        }
    }

    class Son extends Dad
    {
        function test()
        {
            echo "[Class Son] I am Luke<br>";
        }

        function test2()
        {
            parent::test();
        }
    }
    */

    // Subclass constructors. Inheriting from a class doesn't automatically inherit constructors in PHP, thus a call to
    // the parent's constructor in the subclasses constructor is necessary if you want to extend that class's constructor
    // function
    /*
    $object = new Tiger();

    echo "Tigers have...<br>";
    echo "Fur: " . $object->fur . "<br>";
    echo "Stripes " . $object->stripes;

    class Wildcat
    {
        public $fur;

        function __construct()
        {
            $this->fur = "True";
        }
    }

    class Tiger extends Wildcat
    {
        public $stripes;

        function __construct()
        {
            parent::__construct();
            $this->stripes = "True";
        }
    }
    */




?>
</body>
</html>
