<?php 
if(isset($_POST['submit'])){
    $to = "info@aceconference.ca"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $forward = "vanessacastiglione@aceconference.ca"; //forward email to
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Web Inquiry";
    $subject2 = "Ace Conference Form Submission";
    $message = $first_name . " " . $last_name . " (Email:" . $from . ")" . " wrote the following on the ACE Website (via contact us page):" . "\n\n" . $_POST['message'];
    $message2 = "Thanks, our team will be in touch with you! Here is a copy of your submitted message " . $first_name . ": \n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($forward,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    header('Location: contact_sent.html'); 
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>