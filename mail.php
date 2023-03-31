<?php
if(isset($_POST['email'])){
//	Change your email here
		$mailTo = "info@elegance.com";
		$subject = "e-mail from web";
		$body = "New message from web
<br><br>
FROM: ".$_POST['email']."<br>
NAME: ".$_POST['name']."<br>
COMMENTS: ".$_POST['message']."<br>";	
		$headers = "To: Elegance <".$mailTo.">\r\n";
		$headers .= "From: ".$_POST['name']." <".$_POST['email'].">\r\n";
		$headers .= "Content-Type: text/html";
		//send email
		$mail_success =  mail($mailTo, utf8_decode($subject), utf8_decode($body), $headers);		
}
?>  