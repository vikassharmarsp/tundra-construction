<?php 
header('Access-Control-Allow-Origin: *');  
$email_to = 'info@tundraconstructionllc.com';

if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){   
    $host = "relay-hosting.secureserver.net";
    $port = "26";
    $name = $_POST['name'];
    $email = $_POST['email']; 
    // $phone = $_POST['phone'];
    $message = $_POST['message'];

    $headers = "From: $email"; 
    $subject = $_POST['subject']; 

    $msg = "Sender Name:\t$name\n"; 
    $msg .= "Sender E-Mail:\t$email\n"; 
    // $msg .= "Message Phone:\t$phone\n"; 
    $msg .= "Message:\t$message\n\n"; 

    $sent = mail($email_to, $subject, $msg, $headers) ; 

    if($sent) {
        header("location: http://www.tundraconstructionllc.com/contact?msg=success");
        exit();
    } else {
        header("location: http://www.tundraconstructionllc.com/contact?msg=failed");
        exit();
    }
}else{
    header("location: http://www.tundraconstructionllc.com/contact?msg=failed");
    exit();
}
?>