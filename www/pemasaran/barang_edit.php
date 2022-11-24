<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<body bgcolor="lightgreen" background="../pict/2.png" >
<?php
$kode_brg = $_GET["kode_brg"];
include "../koneksi2.php";
$sql = "select * from barang where kode_brg = '$kode_brg'";
$hasil = mysqli_query($kon,$sql);
if(!$hasil) die ("Gagal query...");

$data = mysqli_fetch_array($hasil);
$kode_brg = $data["kode_brg"];
$nama_brg= $data["nama_brg"];
$jenis_brg = $data["jenis_brg"];
$harga = $data["harga"];
?>
<h2>~:: EDIT Barang ::~</h2>
<form action="barang_simpan.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="kode_brg" value="<?php echo $kode_brg;?>" />
	<table border="1">
		<tr>
			<td>Nama Barang</td>
			<td><input text="text" name="nama_brg" value="<?php echo $nama_brg;?>"/></td>
		</tr>
		<tr>
			<td>Jenis Barang</td>
			<td><input text="text" name="jenis_brg" value="<?php echo $jenis_brg;?>"/></td>
		</tr>
		<tr>
			<td>Harga Barang</td>
			<td><input text="text" name="harga" value="<?php echo $harga;?>" /></td>
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
