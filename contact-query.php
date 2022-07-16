<?php
    $name = "";
    $email = "";
    $number = "";
    $query = "";
    $errors = array(); 
    $success = array(); 
    if (isset($_GET['submit-query'])) {
        $name = $_GET['name'];
        $email = $_GET['email'];
        $number = $_GET['number'];
        $query = $_GET['query'];
        
        //Checking required field to be empty
        // if (empty($name)) {
        //     array_push($errors, "Name is required.");
        // }

        if (empty($email)) {
            array_push($errors, "Email is required");
        }

        if (empty($number)) {
            array_push($errors, "Phone Number is required");
        }

        
        if (count($errors) == 0) {
            $postedQuery = "INSERT INTO t_contact_query (name,email,number,posted_query) VALUES ('$name', '$email', '$number', '$query');";
            
            //echo $postedQuery;
            include('connection.php');
            if(!$db) {
                array_push($errors, "Error : Unable to make connection!\n");
            } else {
                //echo "Opened database successfully\n";
                $result = mysqli_query($db, $postedQuery);
                if(!$result) {
                    array_push($errors, "Something went wrong! Please try again.");
                } else {
                    array_push($success, "Your query has been submitted. We will contact you shortly");
                    $from = "info@ztesting.shouryaacademyedu.com"; // this is your Email address
					$to = $email; // this is the sender's Email address
					$subject = "Thanks For Contact Us";
					$message = "Dear,\n\n Greetings From Shourya Academy!\n\n Thanks for subscribing us and we are really appreciate to reach out to us.\n\nPlease have a patience, we will get back to you soon.\n\nFor any query please feel free to connect us (cell:+91 9798451257)\n\n\n\n\n\n\n\nCheers\nShourya Academy\nAddress: New Colony, Jharna Tola,\nKunrathat New Kalawati Marriage Hall,\nGorakhpur, Uttar Pradesh";
					$message2 = "Hi,\n" . $email . "  sends some enquiry request------\nPlease connect with the sender.";
					$headers = 'From: info@ztesting.shouryaacademyedu.com' . "\r\n" . 'Reply-To: info@ztesting.shouryaacademyedu.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
					
					mail($to,$subject,$message, $headers); // sends a copy of the message to the sender
					mail($from,$subject,$message2);
                }
                    
                    //header('location: successfull-trasaction.php');
            }
            
        //echo $resource_query;
        
        }
        else{
            //echo "Something went wrong. Please try again.";
        }
    }
?>