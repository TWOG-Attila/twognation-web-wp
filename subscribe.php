<?php    
    require_once('../../../wp-config.php');

    $email = $_POST["email"];
        
    // Check if entered email is valid
    if ( filter_var($email, FILTER_VALIDATE_EMAIL) ) {

        // Create connection
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        // Check connection
        if ( $conn->connect_error ) {

            echo "<label class='msg error'>There was an error contacting the database. Please try again later.</label>";

            $conn->close();

        } else {

            // Check if entered email already exists in the database           
            $result = $conn->query("SELECT email FROM wp_subscriptions WHERE email = '" . $email . "'");

            if ( $result->num_rows > 0 ) {

                echo "<label class='msg error'>The email address you have entered is already in use.</label>";

                $conn->close();

            } else {

                // Prepare a statement
                $stmt = $conn->prepare("INSERT INTO wp_subscriptions (email) VALUES (?)");

                // Insert parameter
                $stmt->bind_param("s", $email);

                // Insert entered email into database
                if ( $stmt->execute() ) {

                    echo "<label class='msg success'>You are now subscribed to TwogNation!</label>";

                } else {

                    echo "<label class='msg error'>There was a problem processing your request. Please try again later.</label>";

                }

                $stmt->close();

                $conn->close();
                
            }
    
        }
        
    } else {

        echo "<label class='msg error'>The email address you have entered is invalid.</label>";

    }  
?>