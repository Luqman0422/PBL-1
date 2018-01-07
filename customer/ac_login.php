<html>
<head>
	<title></title>
</head>
<body>
	<h2>Action Login</h2>
	<?php
	$id = $_GET['id'];
	if(isset($_POST['but'])){
		session_start();
		if($_SESSION["Captcha"]!=$_POST["nilaiCaptcha"]){
			header("location:Login.php");
		}else{
			require_once("connectdb.php");
			$Username = $_POST['User'];
			$Password = $_POST['Password'];
			$cekuser = mysqli_query($conn,"SELECT * FROM akun WHERE User = '$Username'");

			$jumlah = mysqli_num_rows($cekuser);
			$hasil = mysqli_fetch_array($cekuser);
			$id_akun = $hasil['id_akun'];
			if($jumlah == 0) {
				header('location:login.php?');
			} else {
				if($Password != $hasil['Password']) {
					header('location:login.php?');
				} else if (!empty('$id')){
					$id = $_GET['id'];
					$_SESSION['User'] = $hasil['User'];
					$_SESSION['$id_akun'] = $hasil['id_akun'];
					header('location:indexUser.php?page=Booking&id='."$id".'');
				} else{
					$_SESSION['User'] = $hasil['User'];
					$_SESSION['$id_akun'] = $hasil['id_akun'];
					header('location:indexUser.php?page=');
				}
			}
		}
	}
	?>
</body>
</html>




