<?php

	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$msg=$_REQUEST['msg'];
	
	if (empty($name) || empty($email) || empty($msg))
	{echo "please fill all the fields";}
else
{ mail("afni04fahtima@gmail.com", "Webtech Message", $msg, "From : $name<$email>");
 echo "<script>";
}
?>
