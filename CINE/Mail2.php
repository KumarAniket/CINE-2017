
<?php
$to = $_POST["email"];
$subject = $_POST["subject"];
$txt = $_POST["message"];
$headers = "From: cine2017.sce@kiit.ac.in" . "\r\n" .


mail($to,$subject,$txt,$headers);
?>