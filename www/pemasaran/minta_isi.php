<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<body bgcolor="lightgreen" background="../pict/triangle-7.jpg" >
<h2 align="center">.:: Input Permintaan Barang ::.</h2>
<form action="minta_simpan.php" method="post" >
	<table border="1" align="center">
		<tr>
			<td>Kode Barang</td>
			<td><input text="text" name="kode_brg" size="10" /></td>
		</tr>
		<tr>
			<td>ID Pemasaran</td> 
			<td><input text="text" name="id_bag_pemasaran" /></td>
		</tr>
		<tr>
			<td>ID Gudang</td> 
			<td><input text="text" name="id_bag_gudang" />
			</td>
		</tr>
		<tr>
			<td>Quantity</td> 
			<td><input text="text" name="qty" /></td>
		</tr>
		<tr>
			<td>Tgl Permintaan barang</td> 
			<td><input text="text" name="tgl_per_brg" /></td>
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
