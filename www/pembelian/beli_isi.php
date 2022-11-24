<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<body bgcolor="lightgreen" background="../pict/triangle-7.jpg" >
<h2 align="center">.:: Input Detail Beli Barang ::.</h2>
<form action="beli_simpan.php" method="post" >
	<table border="1" align="center">
		<tr>
			<td>Kode Barang</td>
			<td><input text="text" name="kode_brg"  /></td>
		</tr>
		<tr>
			<td>Tgl Beli</td>
			<td><input text="text" name="tgl_beli"  /></td>
		</tr>
		<tr>
			<td>Qty</td>
			<td><input text="text" name="qty"  /></td>
		</tr>
		<tr>
			<td>ID Pembelian</td> 
			<td><input text="text" name="id_bag_pembelian" /></td>
		</tr>
		<tr>
			<td>ID Keuangan</td> 
			<td><input text="text" name="id_bag_keuangan" /></td>
		</tr>
		<tr>
			<td>ID Faktur</td> 
			<td><input text="text" name="id_faktur" /></td>
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
