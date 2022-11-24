<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<body bgcolor="lightgreen" background="../pict/2.png" >
<?php
$kode_beli_brg = $_GET["kode_beli_brg"];
include "../koneksi2.php";
$sql = "select * from detail_beli_barang where kode_beli_brg = '$kode_beli_brg'";
$hasil = mysqli_query($kon,$sql);
if(!$hasil) die ("Gagal query...");

$data = mysqli_fetch_array($hasil);
$kode_brg = $data["kode_brg"];
$tgl_beli= $data["tgl_beli"];
$qty= $data["qty"];
$id_bag_pembelian = $data["id_bag_pembelian"];
$id_bag_keuangan = $data["id_bag_keuangan"];
$id_faktur = $data["id_faktur"];
?>
<h2>~:: EDIT Detail Beli Barang ::~</h2>
<form action="beli_simpan.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="kode_beli_brg" value="<?php echo $kode_beli_brg;?>" />
	<table border="1">
		<tr>
			<td>Kode Barang</td>
			<td><input text="text" name="kode_brg" value="<?php echo $kode_brg;?>"/></td>
		</tr>
		<tr>
			<td>Tgl Beli</td>
			<td><input text="text" name="tgl_beli" value="<?php echo $tgl_beli;?>"/></td>
		</tr>
		<tr>
			<td>Qty</td>
			<td><input text="text" name="qty" value="<?php echo $qty;?>"/></td>
		</tr>
		<tr>
			<td>ID Pembelian</td>
			<td><input text="text" name="id_bag_pembelian" value="<?php echo $id_bag_pembelian;?>" /></td>
		</tr>
	<tr>
			<td>ID Keuangan</td>
			<td><input text="text" name="id_bag_keuangan" value="<?php echo $id_bag_keuangan;?>"/></td>
		</tr>
		<tr>
			<td>ID Faktur</td>
			<td><input text="text" name="id_faktur" value="<?php echo $id_faktur;?>"/></td>
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
