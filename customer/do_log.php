
<?php
if (isset ($_POST["daftar"])) {
	$Username	= $_POST["Username"];
	$Email	= $_POST["Email"];
	$Password	= $_POST["Password"];
	$id = $_GET['id'];
	require ("connectdb.php");
	$quer	= "SELECT * FROM akun";
	$dat = mysqli_query($conn, $quer);
	$count = mysqli_num_rows($dat);
	if($count==0){
		$SQL	= "insert into akun (User,Email,Password) values ('$Username','$Email','$Password')";
		mysqli_query($conn, $SQL);
		$num = mysqli_affected_rows($conn);
		if($num > 0){
			header('Location: Login.php');	
		}
		else{
			header('Location: RegisterUser.php?stat=gagal');
		}
	}
	else{
		while($hasil = mysqli_fetch_array($dat)) {		
			if(empty($hasil['User'])){
				$SQL	= "insert into akun (User,Email,Password) values ('$Username','$Email','$Password')";
				mysqli_query($conn, $SQL);
				$num = mysqli_affected_rows($conn);
				if($num > 0){
					header('Location: Login.php');	
				}
				else{
					header('Location: RegisterUser.php?stat=gagal');
				}
			}
			else if($Username!=$hasil['User']){
				$SQL	= "insert into akun (User,Email,Password) values ('$Username','$Email','$Password')";
				mysqli_query($conn, $SQL);
				$num = mysqli_affected_rows($conn);
				if($num > 0){
					header('Location: Login.php?id='."$id".'');	
				}
				else{
					header('Location: RegisterUser.php?stat=gagal');
				}
			}
			else{
				header('Location: RegisterUser.php?stat=user');
			}

			
		}
	}
}

else
{
	echo "gagal";
}
?>
