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
$sql = "select * from barang where nama_brg LIKE '%".$cari."%'order by kode_brg desc";

$hasil = mysqli_query($kon, $sql);
if (!$hasil)
die("Gagal query..".mysqli_error($kon));
?>
<a href="barang_isi.php">INPUT DATA</a>
&nbsp; &nbsp; &nbsp;
<a href="barang_cari.php">CARI DATA</a> 
<table border="1">
<tr bgcolor="gold">	
<th>Nama Barang</th>
<th>Jenis Barang</th>
<th>Harga</th>
<th>Operasi</th>

</tr>
<?php
$no = 0;
while ($row = mysqli_fetch_array($hasil)){
echo " <tr> ";
echo " <td> ".$row['nama_brg']."</td>";
echo " <td> ".$row['jenis_brg']."</td>";
echo " <td> ".$row['harga']."</td>";
echo " <td> ";
echo " <a href='barang_edit.php?kode_brg=" . $row['kode_brg'] . " '>
		EDIT</a>";
echo " &nbsp;&nbsp;";
echo" <a href='barang_hapus.php?kode_brg=" . $row['kode_brg']. " '>
HAPUS</a>";
echo " </td>";		
echo " </tr> ";
}
?>
</table>
<body>
</html>


