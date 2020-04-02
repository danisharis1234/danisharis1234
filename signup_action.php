
<?php
include('config.php');

$username=$_POST['username'];
$password=$_POST['password'];
echo"<br>";

$iquery="INSERT INTO pendaftaran_pengguna(username,password) VALUES('$username','$password')";
if(mysqli_query($conn,$iquery)){
	echo "<center>Pendaftaran Berjaya !!! Sila Login Semula</center>";
	echo "<a href=\"login.php\">Daftar Masuk</a>";}
else
	{
		echo "<center>Pendaftaran Tidak Barjaya!!! Sila Cuba Lagi <br>
		<a href='daftar.php'>Cuba Lagi</a></center>";}
?>
