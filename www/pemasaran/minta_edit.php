<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<body bgcolor="lightgreen" background="../pict/2.png" >
<?php
$kode_per_brg = $_GET["kode_per_brg"];
include "../koneksi2.php";
$sql = "select * from permintaan_barang where kode_per_brg = '$kode_per_brg'";
$hasil = mysqli_query($kon,$sql);
if(!$hasil) die ("Gagal query...");

$data = mysqli_fetch_array($hasil);
$kode_brg = $data["kode_brg"];
$id_bag_pemasaran = $data["id_bag_pemasaran"];
$id_bag_gudang = $data["id_bag_gudang"];
$qty = $data["qty"];
$tgl_per_brg= $data["tgl_per_brg"];
?>
<h2>~:: EDIT Permintaan Barang ::~</h2>
<form action="minta_simpan.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="kode_per_brg" value="<?php echo $kode_per_brg;?>" />
	<table border="1">
		<tr>
			<td>Kode Barang</td>
			<td><input text="text" name="kode_brg" value="<?php echo $kode_brg;?>"/></td>
		</tr>
		<tr>
			<td>ID Pemasaran</td>
			<td><input text="text" name="id_bag_pemasaran" value="<?php echo $id_bag_pemasaran;?>" /></td>
		</tr>
		<tr>
			<td>ID Gudang</td>
			<td><input text="text" name="id_bag_gudang" value="<?php echo $id_bag_gudang;?>" /></td>
		</tr>
		<tr>
			<td>Qty</td>
			<td><input text="text" name="qty" value="<?php echo $qty;?>" /></td>
		</tr>
		<tr>
			<td>Tgl Per Barang</td>
			<td><input text="text" name="tgl_per_brg" value="<?php echo $tgl_per_brg;?>" /></td>
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
