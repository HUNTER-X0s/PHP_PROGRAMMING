<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PROGRAMMING</title>
</head>
<body>
    <div class="container">
    This is my first php website
    </div>
<?php

define('PI',3.14);

// PHP IS AN OPEN-SOURCE SCRIPTING LANGUAGE

// PHP IS USED TO EXECUTE ON SERVER AS A BACKEND LANGUAGE

// PHP IS A DYNAMICALLY TYPED LANGUAGE

// PHP IS NOT CASE SENSITIVE

    echo "<br>";
    echo "Hello world and this is printed using PHP";
    echo "<br><br>";
 // COMMENTS 

    // Single line comment
        /*
            This
            is 
            a
            multi
            line
            comment
        */

    $variable1 = 5;
    $variable2 = 2;
    echo $variable1;
    echo "<br>";
    echo $variable2;


echo "<h1> PHP OPERATORS </h1>";

echo "<h3> Arithmetic Operators </h3>"; 

    echo "The value of varible1 + variable2 is ";
    Echo $variable1 + $variable2;
    echo "<br>";
    echo "The value of varible1 - variable2 is : ";
    echo $variable1 - $variable2;
    echo "<br>";
    echo "The value of varible1 * variable2 is ";
    echo $variable1 * $variable2;
    echo "<br>";
    echo "The value of varible1 / variable2 is ";
    echo $variable1 / $variable2;
    echo "<br>";

echo "<h3> Assignment Operators </h3>";

    $newvar = $variable1;
    $newvar += 1;
    echo "The value of new variable is: ";
    echo $newvar;
    echo "<br>";
    $newvar = $variable1;
    $newvar -= 1;
    echo "The value of new variable is: ";
    echo $newvar;
    echo "<br>";
    $newvar = $variable1;
    $newvar *= 3;
    echo "The value of new variable is: ";
    echo $newvar;
    echo "<br>";
    $newvar = $variable1;
    $newvar /= 2.5;
    echo "The value of new variable is: ";
    echo $newvar;
    echo "<br>";

echo "<h3> Comparison Operators </h3>";
    echo "The value of 1==4 is :- ";
    echo var_dump(1==4);
    echo "<br>";

    echo "The value of 1!=4 is :- ";
    echo var_dump(1!=4);
    echo "<br>";

    echo "The value of 1>=4 is :- ";
    echo var_dump(1>=4);
    echo "<br>";

    echo "The value of 1<=4 is :- ";
    echo var_dump(1<=4);
    echo "<br>";

echo "<h3> Increment/Decrement Operators </h3>"; 
    echo $variable1++;
    echo "<br>";
    echo $variable1--;
    echo "<br>";
    echo ++$variable1;
    echo "<br>";
    echo --$variable1;
    echo "<br>";
    echo $variable1;

echo "<h3> Logical Operators </h3>";
    // and (&&)
    // or (||)
    // xor 
    // !

    $myVar = (true and true);
    echo "<br>";
    echo var_dump($myVar);
    $myVar = (false and true);
    echo "<br>";
    echo var_dump($myVar);
    $myVar = (false and false);
    echo "<br>";
    echo var_dump($myVar);
    $myVar = (true and false);
    echo "<br>";
    echo var_dump($myVar);
    $myVar = (true or false);
    echo "<br>";
    echo var_dump($myVar);
    $myVar = (true xor true);
    echo "<br>";
    echo var_dump($myVar);
    $myVar = (false xor true);
    echo "<br>";
    echo var_dump($myVar);
    $myVar = (false xor false);
    echo "<br>";
    echo var_dump($myVar);
    $myVar = (true xor false);
    echo "<br>";
    echo var_dump($myVar);

//DATA TYPES IN PHP
// 1.STRING
// 2.INTEGER
// 3.FLOAT
// 4.BOOLEAN
// 5.ARRAY
// 6.OBJECT

echo "<br><br>";

echo "<br> Data types <br>";

$var = "This is a string";
echo var_dump($var);
echo "<br>";

$var = 78;
echo var_dump($var);
echo "<br>";

$var = 34.0;
echo var_dump($var);
echo "<br>";

$var = true;
echo var_dump($var);
echo "<br>";

echo PI;


echo "<h1> IF-ELSE Statements </h1>";
    $age = 19;
    if($age>18){
        echo "You can go to the party";
    }
    else if($age==7){
        echo "You are 7 years old";
    }
    else if($age==6){
        echo "You are 6 years old";
    }
    else{
        echo "You can not go to the party";
    }

echo "<h1> ARRAYS </h1>";
    $languages = array("Python", "C++", "php", "NodeJs"); 
    echo count($languages); 
    echo "<br>";  
    echo $languages[0];   
    echo "<br>";
    echo $languages[1]; 
    echo "<br>";
    echo $languages[2]; 
    echo "<br>";
    echo $languages[3]; 

echo "<h1> LOOPS </h1>";
echo "<br>";
echo "<h3> While Loop </h3>";
    $a = 0;
    while ($a <= 10) {
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    }

echo "<h3> Iterating arrays in PHP using while loop </h3>";
    $a = 0;
    while ($a < count($languages)) {
        echo "<br>The value of language is: ";
        echo $languages[$a];
        $a++;
    }

echo "<h3> Do while loop </h3>";
    $a = 200;
    do {
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    } while ($a < 10);

echo "<h3> FOR loop </h3>";
    for ($a=0; $a <= 10; $a++) { 
        echo "<br>The value of a from the for loop is: ";
        echo $a;
    }

echo "<h3> FOR Each loop </h3>";
    foreach ($languages as $value) {
        echo "<br>The value from foreach loop is ";
        echo $value;
    }

    echo "<h1> FUNCTIONS </h1>";
    function print_number($number){
        echo "Your number is ";
        echo $number;
    }
    print_number(5);
    echo "<br>";
echo "<hr>";
?>


<?php
echo "<h1> STRING FUNCTIONS </h1>";

    $str = "This this this";
    echo $str. "<br>";
    $lenn = strlen($str);
    echo "The length of this string is ". $lenn . ". Thank you <br>";
    echo "The number of words in this string is ". str_word_count($str) . ". Thank you <br>";
    echo "The reversed string is ". strrev($str) . ". Thank you <br>";
    echo "The search for is in this string is ". strpos($str, "is") . ". Thank you <br>";
    echo "The replaced string is ". str_replace("is", "at", $str) . ". Thank you <br>";
    // echo $lenn;
?>
</body>
</html>