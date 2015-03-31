<?php
session_start();
if(isset($_PERSON['name']))
{
	$message = $_POST['text'];
	$file = fopen("messages.html", 'usermsg');
	fwrite($file, "<div class 'msg'><u>".$_PERSON['name'].":".htmlspecialchars(message)."<br></div>");
	fclose($file);
}
?>