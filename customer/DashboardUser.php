
<div align="center">
	<h2>WELCOME TO </h2>
	<h3>GRAND ROYAL RESIDENCE 2</h3>
	<hr width="100%">
</div>
<div align="center">
	<h3>Selamat Datang <?php echo "$_SESSION[User]"; ?></h3>
</div>
<div style="margin-left: 50px;">
	<div>
		<h3>Data Pemesanan :</h3>
		<hr width="170px" align="left">
	</div>
	<br>
	<div>
		<?php
		$SQL = "SELECT * FROM akun where id_akun = '$id_akun'";
		$data = mysqli_query($conn, $SQL);
		$hasil = mysqli_fetch_array($data);
		$SQL1 = "SELECT * FROM booking where id_booking = '$hasil[id_booking]'";
		$data1 = mysqli_query($conn, $SQL1);
		$hasil1 = mysqli_fetch_array($data1);
		if($hasil1){
			?>
			<h3>Tipe Rumah : <?php echo "$hasil1[type]"; ?></h3>
			<?php
		}
		else{
			?>
			<h3>Tipe Rumah : -</h3>
			<?php
		}
		?>
	</div>
	<br>
	<div>
		<?php
		if($hasil1){
			if($hasil1['verifikasi_order']>0){
				?>
				<h3>Status : Diterima admin</h3>
				<?php
			}
			else if ($hasil1['verifikasi_order']==0){
				?>
				<h3>Status : Menunggu verifikasi admin</h3>	
				<?php
			}
			else{

			}
		}	
		?>
	</div>
	<br>
	<?php 
	if($hasil1){
		if($hasil1['verifikasi_order']>0){
			?>
			<div>
				<?php
				$quer	= "SELECT * FROM persyaratan where id_akun = '$id_akun'";
				$dat = mysqli_query($conn, $quer);

				$count = mysqli_num_rows($dat);
				if($count==0){
					?>
					<h3>Status Upload Persyaratan : Belum Upload</h3>
					<?php
				}
				else{
					?>
					<h3>Status Upload Persyaratan : Sudah Upload</h3>
					<?php		
				}
				?>
			</div>
			<br>
			<?php
		}
	}
	?>
</div>
