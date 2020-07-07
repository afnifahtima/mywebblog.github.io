<?php
if (isset($_POST['sumbit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$msg=$_POST['msg'];

	$to='afni04fahtima@gmail.com';
	$subject='Form Submission';
	$message="Name: ".$name."\n"."phone: ".$phone."\n"."Wrote the following: "."\n\n".$msg;
	$headers="From: ".$email;


	if(mail($to, $subject, $message, $headers)){
	echo"<h1>sent Succesfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
}

else{
	echo "Something went wrong!";
}

}
?>
