<?php 
    session_start();
	if(isset($_COOKIE["studentid"]))
	{}
    else
	{
		header('location: login.php');
	}
?>