<?php 

$errors = '';
$myemail = 'd00245954@student.dkit.ie';

if(empty($_POST['name']) || 
   empty($_POST['email']) || 
   empty($_POST['message']) ||
   empty($_POST['gender']) ||
    empty($_POST['select']) ||
    empty($_POST['phone']) ||
    empty($_POST['terms']))
{
    $errors .= "\n Error: all fields are required";
}

$headers .= 'From: '.$myemail."\r\n".
    'Reply-To: '.$myemail."\r\n" .
    'X-Mailer: PHP/' . phpversion();


$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
$gender = $_POST['gender'];
$select = $_POST['select'];
$phone = $_POST['phone'];
$terms = $_POST['terms'];
$dob = 0;
if(!empty($_POST['dob'])) {
    $dob = $_POST['dob'];
}

if (!preg_match(
    "/^[a-zA-Z ]*$/",$name)) {
    $errors .= "\n Error: Only letters and white space allowed"; 
}

if (!preg_match(
    "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",$email_address)) {
    $errors .= "\n Error: Invalid email format"; 
}

if (!preg_match(
    "/^[0-9]{10}$/",$phone)) {
    $errors .= "\n Error: Invalid phone number"; 
}

if(empty($errors)) {
    $to = $myemail;
    $email_subject = "Contact form submission: $name";
    $email_body = "You have received a new message. ".
    "Here are the details:\n Name: $name \n 
    Email: $email_address \n 
    Message \n $message \n
    Gender: $gender \n
    Phone: $phone \n";

    mail($to,$email_subject,$email_body,$headers);
    header('Location: thank-you.php');
}




?>