<?php
$user = $_POST['username'];
$pass = $_POST['password'];
if($user=="ADMIN" && $pass=='ADMIN123')
{
	echo "Welcome";
}
else
{
	echo "Wrong User Name or Password";
}
?>