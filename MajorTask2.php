<?php

    /*
        PHP MAJOR TASK
        Role: Junior Devloper at DEV-TECH Industries
        Assignment: Generating Random Usernames and Password
        Slack_id: @Oluwagbemiga
        Intern_id: SH-IT-0690

    */

    function userAndPasswordGenerator() {
        
        // *********************** VARIABLE DECLARATION ***********************
        
            // Default Username 
            $default_usernames = ["Tobi", "Samuel", "Gbenga", "Alli", "Precious"];
            // Password Headers
            $passwords_header = ["xes", "etr", "akf", "sde", "wqa"];
    
            // Generated Password
            // This is to ensure we have a storage for the generated items!!!!!!
            $gen_usernames = [];
            $gen_passwords = [];
        
            
    
        // *********************** GENERATOR ***********************

            //  ************Username Generator************ 
                foreach ($default_usernames as $username) {
                    if (strlen($username) <=7 ){
                        array_push($gen_usernames, $username . rand(100, 999));   
                    }else{
                        echo "<strong>$username</strong> -Username cannot be greater than 8 or less than 6 <br /><br />";
                    }
                }
    
            //  ************Password Generator************ 
                foreach ($passwords_header as $password) {
                    array_push($gen_passwords, $password.rand(100, 999).$password);
                }
    
            //  ************Username and password displayer************     
                echo "<h2>Successful Username and Password</h2>";
                for($x = 0; $x < count($gen_usernames); $x++) {
                    echo "<strong>Username:</strong> ".$gen_usernames[$x]."<br />";
                    echo "<strong>Password:</strong> ".$gen_passwords[$x]."<br />";
                    echo "<br>";
                }
    }

    // Username and Password Generator Init
    userAndPasswordGenerator();



    
    
    


    

    



?>