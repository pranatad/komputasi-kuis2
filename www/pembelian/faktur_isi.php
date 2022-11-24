<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<body bgcolor="lightgreen" background="../pict/triangle-7.jpg" >
<h2 align="center">.:: Input Detail Barang ::.</h2>
<form action="faktur_simpan.php" method="post" >
	<table border="1" align="center">
		<tr>
			<td>Tgl Faktur</td>
			<td><input text="text" name="tgl_faktur"  /></td>
		</tr>
		<tr>
			<td>ID Keuangan</td>
			<td><input text="text" name="id_bag_keuangan" size="10" /></td>
		</tr>
		<tr>
			<td>ID Pembelian</td> 
			<td><input text="text" name="id_bag_pembelian" /></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
			 <input type="submit" value="Simpan" name="proses" />
			 <input type="reset" value="Reset" name="reset" />
			</td>
		</tr>
	</table>
</form>
</body>
</html>
