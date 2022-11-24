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
$sql = "select * from detail_barang where kode_brg LIKE '%".$cari."%'order by kode_brg desc";
$hasil = mysqli_query($kon, $sql);
if (!$hasil)
die("Gagal query..".mysqli_error($kon));
?>
<a href="detail_isi.php">INPUT DATA</a>
&nbsp; &nbsp; &nbsp;
<a href="detail_cari.php">CARI DATA</a> 
<table border="1">
<tr bgcolor="gold">
<th>Kode Detail Barang</th>	
<th>Kode Barang</th>
<th>Stok Barang</th>
<th>ID Gudang</th>
<th>Tgl_detail</th>
<th>Operasi</th>

</tr>
<?php
$no = 0;
while ($row = mysqli_fetch_array($hasil)){
echo " <tr> ";
echo " <td> ".$row['kode_det_brg']."</td>";
echo " <td> ".$row['kode_brg']."</td>";
echo " <td> ".$row['stok_brg']."</td>";
echo " <td> ".$row['id_bag_gudang']."</td>";
echo " <td> ".$row['tgl_det_brg']."</td>";
echo " <td> ";
echo " <a href='detail_edit.php?kode_det_brg=" . $row['kode_det_brg'] . " '>
		EDIT</a>";
echo " &nbsp;&nbsp;";
echo" <a href='detail_hapus.php?kode_det_brg=" . $row['kode_det_brg']. " '>
HAPUS</a>";
echo " </td>";		
echo " </tr> ";
}
?>
</table>
<body>
</html>


