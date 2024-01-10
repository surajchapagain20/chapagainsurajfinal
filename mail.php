<?php
        
if(isset($_POST["submit"])) {
                
    $name = $_POST["your_name"]; //User's name
    $email = $_POST["your_email"]; //User's email
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $from_name = "Suraj Chapagain Contact Page"; //From Name in email
    $from_email = "suraj@surajchapagain.com.np"; //Email from
    $to = "suraj@surajchapagain.com.np"; //Where email has to be delivered

    if( (strlen($name) < 1) || (strlen($email) < 1) || (strlen($message) < 1) ) {
                    
        echo "<strong>Error!</strong> Please fill the form completely.";

    } else {

        $email_message = "Name: ".$name."\n".
            "Email: ".$email."\n".
            "Subject: ".$subject."\n".
            "Message: ".$message."\n";

            $headers = "From: ".$from_name." <".$from_email.">\r\n";
            $headers .= "Reply-To: ".$email."\r\n";

            if(mail($to, "YourSite: $subject", $email_message, $headers, "-f".$from_email)) {
                echo "Thank you. You message has been sent.";
				echo "<meta http-equiv='refresh' content='0;url=http://surajchapagain.com.np/contact.html'>";
            } else {
                echo "Error sending email.";
            }



    }
} else {
    echo "Error in form submission.";
}

?>