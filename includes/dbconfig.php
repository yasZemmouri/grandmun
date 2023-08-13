<?php
        //Database credentials
        //at this point those are simple variable php have no idea what they mean nor what they are for.
        $hostname = "localhost"; // Change this to your database hostname
        $username = "root"; // Change this to your database username
        $password = ""; // Change this to your database password
        $database = "my_database"; // Change this to your database name

        //Establish Connection
        //we created an object of the class mysqli it's the class that connect to the db and has methods to deal with the db 
        $conn = new mysqli($hostname, $username, $password, $database);
        // Check connection
        // if there is an error in will be stored in the connect_error property 
        if ($conn->connect_error) {
            die('Connection failed: ' . $conn->connect_error);
        }
?>