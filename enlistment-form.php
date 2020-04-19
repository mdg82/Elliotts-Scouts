<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo '<script>alert("ERROR! Please try again!")</script>';
	echo '<a href="http://www.elliottsscouts.net/"><h2>Return to site</h2></a>';
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
    echo '<script>alert("Name and email are mandatory!")</script>';
		exit;
}

/*$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}*/

if(IsInjected($email))
{
    echo "Bad email value!";
    exit;
}

$email_from = $email;//<== update the email address
$email_subject = "Elliott's Scouts Enlistment Form";
$email_body = '<html><body>';
$email_body .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$email_body .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . $name . "</td></tr>";
$email_body .= "<tr><td><strong>Email:</strong> </td><td>" . $email . "</td></tr>";
$email_body .= "<tr><td><strong>Cell Phone:</strong> </td><td>" . $cellPhone . "</td></tr>";
$email_body .= "<tr><td><strong>Work Phone:</strong> </td><td>" . $workPhone . "</td></tr>";
$email_body .= "<tr><td><strong>Address:</strong> </td><td>" . $address . "</td></tr>";
$email_body .= "<tr><td><strong>City:</strong> </td><td>" . $city . "</td></tr>";
$email_body .= "<tr><td><strong>State:</strong> </td><td>" . $state . "</td></tr>";
$email_body .= "<tr><td><strong>Zip:</strong> </td><td>" . $zip . "</td></tr>";
$email_body .= "<tr><td><strong>Dismounted or Mounted:</strong> </td><td>" . $cavUnit . "</td></tr>";
$email_body .= "<tr><td><strong>Own a horse:</strong> </td><td>" . $ownHorse . "</td></tr>";
$email_body .= "<tr><td><strong>Own a trailer:</strong> </td><td>" . $ownTrailer . "</td></tr>";
$email_body .= "<tr><td><strong>Spouse and/or children wanting to join:</strong> </td><td>" . $message . "</td></tr>";
$email_body .= "</table>";
$email_body .= "</body></html>";

$to = "melanie.green19@gmail.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $email \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
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
