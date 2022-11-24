<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<body bgcolor="lightgreen" background="../pict/triangle-7.jpg" >
<h2 align="center">.:: Input Detail Barang ::.</h2>
<form action="detail_simpan.php" method="post" >
	<table border="1" align="center">
		<tr>
			<td>ID Barang</td>
			<td><input text="text" name="kode_brg"  size="10"/></td>
		</tr>
		<tr>
			<td>Stok Barang</td>
			<td><input text="text" name="stok_brg" size="10" /></td>
		</tr>
		<tr>
			<td>ID Gudang</td> 
			<td><input text="text" name="id_bag_gudang" /></td>
		</tr>
		<tr>
			<td>Tgl Detail Barang</td> 
			<td><input text="text" name="tgl_det_brg" /></td>
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
