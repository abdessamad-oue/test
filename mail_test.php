<?php

$from       = "no-reply@editus.com";
$to         = "ab.samad@gmail.com";
$subject    = "Test depuis Dell Precision - Linux";
$msg        = "Hello - lorem ipsum";
$headers    = "From:" . $from;


if(mail($to, $subject, $msg, $headers)) {

  echo "The email was Sent \n";
}

?>
