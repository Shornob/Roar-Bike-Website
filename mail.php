<?php
// looking for inside my document to find the id of name and send the data that is written in the name field to my email

if(isset( $_POST['name'])) 
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];

// grabbing content form the name ID field.
$content="From: $name";
$recipient = "taofique9014@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Email sent!";
?> 