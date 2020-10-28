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

    try {
        // Intialization of the connection
        $conn = new PDO("mysql:host=$db_server;dbname=$db_name", $db_username, $db_password);

        // Catching error (if any)
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Displaying success message
        echo "Database connection successful";
    }
    catch (PDOException $e) {
        echo "Database Connection Failed ". $e->getMessage();
    }

?>