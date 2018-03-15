
<?php

require_once 'PHPMailerAutoload.php';
 
$results_messages = array();
 
$mail = new PHPMailer(true);
$mail->CharSet = 'utf-8';
 
class phpmailerAppException extends phpmailerException {}
 
try {
$to = 'charles.cabalin@get2square1.com';
if(!PHPMailer::validateAddress($to)) {
  throw new phpmailerAppException("Email address " . $to . " is invalid -- aborting!");
}
$mail->isSMTP();
//$mail->SMTPDebug  = 2;
$mail->Host       = "smtp.gmail.com";
$mail->Port       = "587";
$mail->SMTPSecure = "tls";
$mail->SMTPAuth   = true;
$mail->Username   = "info.precisioneye@gmail.com";
$mail->Password   = "gosquared";
$mail->From       = "info@precisioneye.net";
$mail->FromName   = "Precision Eye Services Website";
$mail->addAddress("charles.cabalin@get2square1.com", "Square 1 Admin");
$mail->Subject  = "Contact Form from Precision Eye Services";

$frm_name = stripcslashes($_POST['name']);
$frm_pname = stripcslashes($_POST['pname']);
$frm_email = stripcslashes($_POST['email']);
$frm_phone = stripcslashes($_POST['phone']);
$frm_message = stripcslashes($_POST['message']);
$frm_con = stripcslashes($_POST['contact']);
$frm_sub = stripcslashes($_POST['subscribe']);


$body = "Name: $frm_name\r\n<br/>Practice Name: $frm_pname\r\n<br/>Email: $frm_email\r\n<br/>Phone: $frm_phone\r\n<br/><br/>Message: $frm_message\r\n<br/><br/>Contact: $frm_con\r\n<br/>Subscribe: $frm_sub";

$mail->WordWrap = 80;
$mail->msgHTML($body, dirname(__FILE__), true); //Create message bodies and embed images
 
try {
  $mail->send();
  $results_messages[] = "Message has been sent using SMTP";
}
catch (phpmailerException $e) {
  throw new phpmailerAppException('Unable to send to: ' . $to. ': '.$e->getMessage());
}
}
catch (phpmailerAppException $e) {
  $results_messages[] = $e->errorMessage();
}
 
if (count($results_messages) > 0) {
  echo "<h2>Run results</h2>\n";
  echo "<ul>\n";
foreach ($results_messages as $result) {
  echo "<li>$result</li>\n";
}
echo "</ul>\n";
}


//
//function validateEmail($email) {
//   if(preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email))
//	  return true;
//   else
//	  return false;
//}
//
//if((strlen($frm_name) < 1 ) || (strlen($frm_email) < 1 ) || (strlen($frm_message) < 1 ) || validateEmail($frm_email) == FALSE ) {
//
//	echo($error_message);
//
//} else {
//
//	if( mail($mailto, $subject, $message, $headers) ) {
//		
//		echo($success_message);
//
//	} else {
//
//		echo($error_message);
//
//	}
//
//}

?>
