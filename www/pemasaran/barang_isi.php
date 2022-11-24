<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<body bgcolor="lightgreen" background="../pict/triangle-7.jpg" >
<h2 align="center">.:: Input Barang ::.</h2>
<form action="barang_simpan.php" method="post" >
	<table border="1" align="center">
		<tr>
			<td>Nama Barang</td>
			<td><input text="text" name="nama_brg"  size="10"/></td>
		</tr>
		<tr>
			<td>Jenis Barang</td>
			<td><input text="text" name="jenis_brg" size="10" /></td>
		</tr>
		<tr>
			<td>Harga Barang</td> 
			<td><input text="text" name="harga" /></td>
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
