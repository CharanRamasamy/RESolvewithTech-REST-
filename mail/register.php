<?php
// Check for empty fields
if(empty($_POST['fname'])      ||
	empty($_POST['lname'])      ||
	empty($_POST['username'])      ||
	empty($_POST['password'])      ||
	empty($_POST['code'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['address'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   } else{
	  return true;
/*$fname = strip_tags(htmlspecialchars($_POST['fname']));
$lname = strip_tags(htmlspecialchars($_POST['lname']));
$username = strip_tags(htmlspecialchars($_POST['username']));
$code = strip_tags(htmlspecialchars($_POST['code']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['address']));*/
   
// Create the email and send the message
/*$to = 'yourname@yourdomain.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $fname";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $fname\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);*/
  
   }       
?>
