<?php
if (isset($_POST['sumbit'])){
	$name=$_POST['name'];
	$subject=$_POST['subject'];
	$mailFrom=$_POST['mail'];
	$message=$_POST['message'];

	$mailTo="afni04fahtima@gmail.com";
	$headers="From: ".$emailFrom;
	$txt = "You have received an e-mail from ".$name.".\n\n".$message;

	mail($mailTo, $subject, $txt,$headers);
	header("Location: contact.php?mailsend");

}


?>
