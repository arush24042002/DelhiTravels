<?php 
$name =$_POST['name']
$visitor_email=$_POST['email']
$subject=$_POST['subject']
$message=$_POST['message']

$email_from="akwebarena@gmail.com";

$email_subject="new form submission";

$email_body="user name:$name.\n";
             "user name:$visitor_email.\n";
                "user name:$subject.\n";
                   "user name:$message.\n";				

				  
	$to='ayush2442002@gmail.com'; 
	
	$header="from: $email_from\r\n";
	
	$header="reply-to: $visitor_email\r\n";
    
    mail($to,$email_subject,$email_body,$header);
	
	header("contact.html");
    	
?>