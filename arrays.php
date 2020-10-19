<?php

    /*

        //***********Description***********
        This file contains array major task for Side Hustle PHP Internship
        These arrays include:
        * Numeric Arrays
        * Associative Arrays
        * Multi-Dimensional Arrays

        //*********** Author Details
        Name: Taiwo Oluwagbemiga
        Slack_id: Oluwagbemiga
        Channel: Backend(PHP)
        Tutor: Lanre Sam

    */

    echo "<h1>PHP Arrays</h1>";
    echo "<p>This is an example of PHP Arrays using the school environment as the sample</p>";

    // *********** Numeric Arrays ***********
    echo "<h2>Numeric Array</h2>";

    // Variable Declaration
    $studentNames = array("Gbenga", "Tosin", "Bola", "Funke", "Dele", "Tobi");

    // Outputing the names of the students
    echo "<h3>The name of our students:</h3>";
    echo "The name of the 1st student is <strong>".$studentNames[0]."</strong><br />";
    echo "The name of the 2nd student is <strong>".$studentNames[1]."</strong><br />";
    echo "The name of the 3rd student is <strong>".$studentNames[2]."</strong><br />";
    echo "The name of the 4th student is <strong>".$studentNames[3]."</strong><br />";
    echo "The name of the 5th student is <strong>".$studentNames[4]."</strong><br />";
    echo "The name of the 6th student is <strong>".$studentNames[5]."</strong><br />";

    
    // *********** Associative Arrays ***********
    echo "<h2>Associative Array</h2>";

    // Variable Declaration
    $studentClass = array(
                            "$studentNames[0]" => "JSS 1",
                            "$studentNames[1]" => "JSS 2",
                            "$studentNames[2]" => "JSS 3",
                            "$studentNames[3]" => "SSS 1",
                            "$studentNames[4]" => "SSS 2",
                            "$studentNames[5]" => "SSS 3");

    // Outputing the class of the students
    echo "<h3>The Class of our students:</h3>";
    echo "The class of the $studentNames[0] is <strong>".$studentClass[$studentNames[0]]."</strong><br />";
    echo "The class of the $studentNames[1] is <strong>".$studentClass[$studentNames[1]]."</strong><br />";
    echo "The class of the $studentNames[2] is <strong>".$studentClass[$studentNames[2]]."</strong><br />";
    echo "The class of the $studentNames[3] is <strong>".$studentClass[$studentNames[3]]."</strong><br />";
    echo "The class of the $studentNames[4] is <strong>".$studentClass[$studentNames[4]]."</strong><br />";
    echo "The class of the $studentNames[5] is <strong>".$studentClass[$studentNames[5]]."</strong><br />";
    
    
    // *********** Multi-Dimensional Arrays ***********
    echo "<h2>Multi Dimensional Array</h2>";
    
    // Variable Declaration
    $schoolDetails = array(
                            "subject" => array("English", "Mathematics", "Physics", "Government", "Account", "PHE"),
                            "teacherNames" => array("Titi", "Samuel", "Samson", "Sola", "Sade", "Dipo")
    );
    
    // Output the names of the class teachers and their subjects
    echo "<h3>The name of our teachers and their subject</h3>";
    echo "Teacher ".($schoolDetails["teacherNames"][0])." is the teacher handling <strong>". ($schoolDetails["subject"][0])."</strong><br />";
    echo "Teacher ".($schoolDetails["teacherNames"][1])." is the teacher handling <strong>". ($schoolDetails["subject"][1])."</strong><br />";
    echo "Teacher ".($schoolDetails["teacherNames"][2])." is the teacher handling <strong>". ($schoolDetails["subject"][2])."</strong><br />";
    echo "Teacher ".($schoolDetails["teacherNames"][3])." is the teacher handling <strong>". ($schoolDetails["subject"][3])."</strong><br />";
    echo "Teacher ".($schoolDetails["teacherNames"][4])." is the teacher handling <strong>". ($schoolDetails["subject"][4])."</strong><br />";
    echo "Teacher ".($schoolDetails["teacherNames"][5])." is the teacher handling <strong>". ($schoolDetails["subject"][5])."</strong><br />";

?>
