<?php 
require 'config.php';
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$json = [];
$check = true;
$validate = filter_var($email, FILTER_VALIDATE_EMAIL);
if(!$validate){
	$check = false;
	$json['email_error'] = 'Invalid email address.';
}
ob_start();
?>
<?php echo 'Hi,' . PHP_EOL . PHP_EOL; ?>
Name: <?php echo $name . PHP_EOL; ?>
Email: <?php echo $email . PHP_EOL; ?>
<?php if(!empty($subject)) : ?>
Subject: <?php echo $subject . PHP_EOL; ?>
<?php endif; ?>
<?php if(!empty($message)) : ?>
Message: <?php echo $message . PHP_EOL; ?>
<?php endif; ?>
<?php
$msg = ob_get_clean();
$to = PREMIX_RECIPIENT_EMAIL_ADDRESS;
$subject = ($subject) ? $subject : 'Email From Pixiefy';
$txt = $msg;
$mail = mail($to ,$subject ,$txt);
if($mail && $check) {
	$json['email_success'] = PREMIX_SUCCESS_MESSAGE;
}
echo json_encode($json);