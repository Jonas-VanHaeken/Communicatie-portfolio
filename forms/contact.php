<?php
  $to = 'contact@vahajo.be';
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $from_email = $_POST['email'];
  $from_name = $_POST['name'];

  $header = "From:$from_email\r\n";
  $header .= "CC:$from_email\r\n";
  $header .= "MIME-Version: 1.0\r\n";
  $header .= "Content-type: text/html\r\n";

  if(mail($to,$subject,$message, $headers)) {
    echo "The email message was sent.";
} else {
    echo "The email message was not sent.";
}

?>
