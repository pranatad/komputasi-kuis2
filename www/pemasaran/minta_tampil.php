<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<body bgcolor="lightgreen" background="../pict/1.png" >
<?php
$cari="";
if(isset($_POST["cari"]))
$cari = $_POST["cari"];
include "../koneksi2.php";
$sql = "select * from permintaan_barang where kode_brg LIKE '%".$cari."%'order by kode_per_brg desc";

$hasil = mysqli_query($kon, $sql);
if (!$hasil)
die("Gagal query..".mysqli_error($kon));
?>
<a href="minta_isi.php">INPUT DATA</a>
&nbsp; &nbsp; &nbsp;
<a href="minta_cari.php">CARI DATA</a> 
<table border="1">
<tr bgcolor="gold">
<th>Kode Per Barang</th>	
<th>Kode Barang</th>
<th>ID Pemasaran</th>
<th>ID Gudang</th>
<th>Qty</th>
<th>Tgl_per_brg</th>
<th>Operasi</th>

</tr>
<?php
$no = 0;
while ($row = mysqli_fetch_array($hasil)){
echo " <tr> ";
echo " <td> ".$row['kode_per_brg']."</td>";
echo " <td> ".$row['kode_brg']."</td>";
echo " <td> ".$row['id_bag_pemasaran']."</td>";
echo " <td> ".$row['id_bag_gudang']."</td>";
echo " <td> ".$row['qty']."</td>";
echo " <td> ".$row['tgl_per_brg']."</td>";
echo " <td> ";
echo " <a href='minta_edit.php?kode_per_brg=" . $row['kode_per_brg'] . " '>
		EDIT</a>";
echo " &nbsp;&nbsp;";
echo" <a href='minta_hapus.php?kode_per_brg=" . $row['kode_per_brg']. " '>
HAPUS</a>";
echo " </td>";		
echo " </tr> ";
}
?>
</table>
<body>
</html>


