<?php 
header('Access-Control-Allow-Origin: *');  
$email_to = 'help@redpineimmigration.com';

if(!empty($_POST['name']) && !empty($_POST['email'])){   
    $name = $_POST['name'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
    $email = $_POST['email']; 
    $cemail = $_POST['cemail'];
    $phone = $_POST['phone'];
	$mstatus = $_POST['mstatus'];
	$education = $_POST['education'];
	$study = $_POST['study'];
    $children = $_POST['children']; 
    $residence = $_POST['residence'];
    $nationality = $_POST['nationality'];
	$relatives = $_POST['relatives'];
	$medical = $_POST['medical'];
	$ielts = $_POST['ielts'];
    $language = $_POST['language']; 
    $tef = $_POST['tef'];
    $aboutus = $_POST['aboutus'];
	$job = $_POST['job'];

    $headers = "From: $email"; 
    $subject = "Assessment Information of $name"; 

    $msg = "Sender Name	:\t$name\n"; 
	$msg .= "Gender	:\t$gender\n";
    $msg .= "Sender E-Mail	:\t$email\n"; 
    $msg .= "Phone Number	:\t$phone\n"; 
    $msg .= "Age	:\t$age\n"; 
	$msg .= "Marital Status	:\t$mstatus\n"; 
    $msg .= "Level Of Education	:\t$education\n"; 
    $msg .= "Field Of Study	:\t$study\n"; 
    $msg .= "Children	:\t$children\n"; 
	$msg .= "Country of Residence	:\t$residence\n"; 
	$msg .= "Nationality	:\t$nationality\n";
    $msg .= "Relatives who are citizens of Canada	:\t$relatives\n"; 
    $msg .= "Criminal/Security/Medical Issues	:\t$medical\n"; 
    $msg .= "IELTS or CELPIP	:\t$ielts\n"; 
	$msg .= "Languages You Speak	:\t$language\n"; 
    $msg .= "TEF Test Results	:\t$tef\n"; 
    $msg .= "How did you hear about us?	:\t$aboutus\n"; 
    $msg .= "Job	:\t$job\n";

    $sent = mail($email_to, $subject, $msg, $headers) ; 

    if($sent) {
        //alert("mail sent");
header("Location : http://www.redpineimmigration.com");

    } else {
        //alert("mail not sent");
    }
}else{
    
}