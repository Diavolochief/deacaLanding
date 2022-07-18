<?php 
    $to = "info@example.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $phone = $_POST['phone'];
    $last_name = $_POST['name'];
    $subject = "Get Quote Form";
    $message = "Quote: " . $first_name . " " . $phone . " wrote the following:" . "\n\n" . $_POST['message'];
    
    $headers = "From:" . $from . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject,$message,$headers2); // sends a copy of the message to the sender
    // echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
?>