<?php
	include "koneksi.php";
	$Username=$_POST['username']; // simpan data username dari form ke variabel
	$Password=$_POST['password']; // simpan data password dari form ke variabel
	$login=
	"SELECT * from user where username='$Username' AND password='$Password' AND hak_access='admin'";
	
	$login_query=mysqli_query($connect,$login);
	$data=mysqli_fetch_array($login_query);
	
	if($data)
	{	
		session_start();
		$_SESSION['usename'] = $data['usename'];
		$_SESSION['password'] = $data['password'];
		$_SESSION['hak_access'] = $data['hak_access'];
		$_SESSION['id'] = $data['id'];
		header('location:dashboard.php');
	}
	else
	{
        $a = 'aaa';
		echo "
		<script type='text/javascript'>
		alert('$Username atau $Password anda salah!')
		window.location='index.php';
		</script>";
	}
?>