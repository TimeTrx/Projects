<?php
if(filesize("message.html") >= 0)
{
		$logfile = fopen("log.html", "r");
		$allmessages = fread($logfile, filesize("message.html"));
		fclose($logfile);
}	

?> 