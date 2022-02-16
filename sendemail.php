<?php

(function () {
  // hard-coded receiptant
  $to = "211252@vistacollege.nl";
  $subject = "";
  $msg = "";

  // if the user has filled in a name, concat the name to
  // the subject
  if (isset($_POST["name"])) {
    $subject .= "Name: " . $_POST["name"] . "\n";
  } else return;

  // if the user has filled in an email, concat the email
  // to the subject
  if (isset($_POST["email"])) {
    $subject .= "Email: " . $_POST["email"] . "\n";
  } else return;

  // if the user has filled in a message, concat the
  // message to the message
  if (isset($_POST["message"])) {
    $msg .= $_POST["message"] . "\n";
  } else return;

  // send the mail, and check for errors
  $hasMailed = mail(
    $to,
    $subject,
    $msg
  );

  // if there were no errors we can end it here
  if ($hasMailed) {
    // return the user to the contact page
    // header("Location: Contact.php");
    echo "Mail sent";
    return;
  }

  // if there were errors, we need to display them
  echo "Something went wrong. Please try again later.";
})();

?>

<img src="https://c.tenor.com/OGrH1Ge8AmEAAAAC/shrek-bright-eyes.gif">
<!--https://www.phpflow.com/php/how-to-send-email-from-localhost-using-php/ check instructions if hosting is known -->