<?php
  $to = 'jonas.van.haeken@outlook.Be';
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $from_email = $_POST['email'];
  $from_name = $_POST['name'];

  $header = "From:$from_email\r\n";
  $header .= "MIME-Version: 1.0\r\n";
  $header .= "Content-type: text/html\r\n";

  $retval = mail($to,$subject,$message,$header);

  if ($retval) {
    echo("Bericht is verzonden");
  } else {
    echo("Er liep iets fout bij het verzenden");
  }

?>
