<?php
    /*
        Task for 28/10/2020
        Title: Connecting to database using MYSQLI method
        Mentor: Taiwo
        Slack_Id: Oluwagbemiga
    */

    // Declaring database variables
    $db_server = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "sidehustle";

    // Initialization and connecting to the database
    @$conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);

    // Checking to confirm successful connection
    if (!$conn){
        echo "Database connection failed due to <strong>" . mysqli_connect_error() . "</strong>";
    } else{
        echo "Successful connection to the database";
    }

?>