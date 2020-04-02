<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$sah =(($username == 'pengguna' AND $password =='pengguna123'));
$_SESSION['id'] = $sah;

if($_SESSION['id'])
{
	
	echo "Anda berjaya log masuk!!!<br>
	<a href=\"kira.php\">Kalkulator</a>";
}
else
{
	echo "Log masuk tidak berjaya. Sila cuba sekali lagi<br>
	<a href=\"login.php\">Kembali</a>";
}
?>