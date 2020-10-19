<?php

    //**************** Declare your variables below this comment *********************

    $num1 = 23;
    $num2 = 10;



    /*
        ==================

        ++++++++++++ Major Task For this Week Friday, 16th - Oct - 2020 +++++++++++++

        Perform arithemetic operation on each operators in the below code.

        Make sure to upload this file to your github repository.

        Deadline line for submission is 9pm on the same day.

        **********************************************
        !!!!!!!!!! Have a lovely Weekend !!!!!!!!!!!!!

        ==================
    */

    //Addition
    echo "<h1>Addition</h1>";
    echo "<p>This program adds two variables together</p>";
    $add = $num1 + $num2;
    echo "$num1 + $num2 = ".$add;


    //subtraction
    echo "<h1>Subtraction</h1>";
    echo "<p>This program subtract two variables from each other</p>";
    $subtract = $num1 - $num2;
    echo "$num1 - $num2 = ".$subtract;


    //multiplication
    echo "<h1>Multiplication</h1>";
    echo "<p>This program multiply two variables together</p>";
    $multiply = $num1 * $num2;
    echo "$num1 * $num2 = ".$multiply;


    //division
    echo "<h1>Division</h1>";
    echo "<p>This program divides two variables</p>";
    $division = $num1 / $num2;
    echo "$num1 / $num2 = ".$division;


    //Modulus
    echo "<h1>Modulus</h1>";
    echo "<p>This program divides two variables and return their remainder if there is any.</p>";
    $mod = $num1 % $num2;
    echo "$num1 % $num2 = ".$mod;

?>
