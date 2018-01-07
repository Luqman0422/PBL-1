<div align="center">
	<form action="indexUser.php?page=Simulasi" method="post">
			<h2>SIMULASI CICILAN</h2>
			<hr width="100%">
	<table border="0" align="center">
		<tr>
			<td>Harga Rumah </td>
			<td><input type="text" name="kredit" size="70" maxlength="30" placeholder="Rp." style="margin-top: 20px;" /></input></td>
		</tr>
		<tr>
			<td>Uang Muka</td>
			<td><input type="text" name="dana" size="70" maxlength="30" placeholder="Rp." style="margin-top: 20px;"/></input></td>
		</tr>
		<tr>
			<td>Suku Bunga</td>
			<td><input type="text" name="bunga" size="70" maxlength="30" placeholder="%" style="margin-top: 20px;"/></input></td>
		</tr>
		<tr>
			<td>Jangka Waktu (Tenor)</td>
			<td><input type="text" name="waktu" size="70" maxlength="30" placeholder="tahun" style="margin-top: 20px;"/></input></td>
		</tr>
				<tr>
			<td></td>
			<td><button name="btnsubmit"style="margin-top: 20px;"/>SIMULASI</button></td>
		</tr>
	</table>
		<?php
	
	if (isset($_POST['btnsubmit'])) {
$i=$_POST['kredit'];
$b=$_POST['dana'];
$n=$_POST['waktu'];
$p=$_POST['bunga'];
function PMT($i,$n,$p,$b){
$p/=1200;
$n*=12;
return ($i*$p)*(1/(1-(1/(pow((1+$p)-$b,$n)))));
}
$hasil=@PMT($i,$n,$p,$b);
$rupiah=@number_format($hasil,'0',',','.');
echo "<table>
<tr><td class=\"kolom\">Kredit</td><td>:</td><td class=\"spasi\"></td><td>".number_format($i,'0',',','.')."</td></tr>
<tr><td class=\"kolom\">Dana Pertama</td><td>:</td><td class=\"spasi\"></td><td>".number_format($b,'0',',','.')."</td></tr>
<tr><td class=\"kolom\">Waktu</td><td>:</td><td class=\"spasi\"></td><td>".$n." tahun</td></tr>
<tr><td class=\"kolom\">Bunga</td><td>:</td><td class=\"spasi\"></td><td>".$p." %</td></tr>
<tr><td class=\"kolom\">Cicilan</td><td>:</td><td class=\"spasi\"></td><td><b>".$rupiah."</b></td></tr>
</table>";
}
?>