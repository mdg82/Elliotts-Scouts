<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$email = $_POST['email'];
$cellPhone = $_POST['cellPhone'];
$workPhone = $_POST['workPhone'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$cavUnit = $_POST['cavUnit'];
$ownHorse = $_POST['ownHorse'];
$ownTrailer = $_POST['ownTrailer'];
$message = $_POST['message'];

//Validate first
if(empty($name)||empty($email))
{
    echo "Name and email are mandatory!";
    exit;
}

if(IsInjected($email))
{
    echo "Bad email value!";
    exit;
}

$email_from = $email;//<== update the email address
$email_subject = "Elliott's Scouts Enlistment Form";
$email_body = "Name: $name\n". "Email: $email\n".
							"Cell Phone: $cellPhone\n". "Work Phone: $workPhone\n".
							"Address: $address\n". "City: $city\n". "State: $state\n".
							"Zip: $zip\n". "Dismounted or Mounted: $cavUnit\n".
							"Own a horse: $ownHorse\n". "Own a trailer: $ownTrailer\n".
							"Spouse and/or children wanting to join:\n $message".

$to = "melanie.green19@gmail.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: form-submission.html');

// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
 ?>
