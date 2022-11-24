<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<body bgcolor="lightgreen" background="../pict/2.png" >
<?php
$kode_det_brg = $_GET["kode_det_brg"];
include "../koneksi2.php";
$sql = "select * from detail_barang where kode_det_brg = '$kode_det_brg'";
$hasil = mysqli_query($kon,$sql);
if(!$hasil) die ("Gagal query...");

$data = mysqli_fetch_array($hasil);
$kode_det_brg = $data["kode_det_brg"];
$kode_brg= $data["kode_brg"];
$stok_brg = $data["stok_brg"];
$id_bag_gudang = $data["id_bag_gudang"];
$tgl_det_brg= $data["tgl_det_brg"];
?>
<h2>~:: EDIT Detail Barang ::~</h2>
<form action="detail_simpan.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="kode_det_brg" value="<?php echo $kode_det_brg;?>" />
	<table border="1">
		<tr>
			<td>Kode Barang</td>
			<td><input text="text" name="kode_brg" value="<?php echo $kode_brg;?>"/></td>
		</tr>
		<tr>
			<td>Stok Barang</td>
			<td><input text="text" name="stok_brg" value="<?php echo $stok_brg;?>"/></td>
		</tr>
		<tr>
			<td>ID Gudang</td>
			<td><input text="text" name="id_bag_gudang" value="<?php echo $id_bag_gudang;?>" /></td>
		</tr>
		<tr>
			<td>Tgl Det Barang</td>
			<td><input text="text" name="tgl_det_brg" value="<?php echo $tgl_det_brg;?>" /></td>
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
