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
$sql = "select * from faktur_pembelian where id_faktur LIKE '%".$cari."%'order by id_faktur desc";
$hasil = mysqli_query($kon, $sql);
if (!$hasil)
die("Gagal query..".mysqli_error($kon));
?>
<a href="faktur_isi.php">INPUT DATA</a>
&nbsp; &nbsp; &nbsp;
<a href="faktur_cari.php">CARI DATA</a> 
<table border="1">
<tr bgcolor="gold">
<th>ID Faktur</th>	
<th>Tgl Faktur</th>
<th>ID Keuangan</th>
<th>ID Pembelian</th>
<th>Operasi</th>

</tr>
<?php
$no = 0;
while ($row = mysqli_fetch_array($hasil)){
echo " <tr> ";
echo " <td> ".$row['id_faktur']."</td>";
echo " <td> ".$row['tgl_faktur']."</td>";
echo " <td> ".$row['id_bag_keuangan']."</td>";
echo " <td> ".$row['id_bag_pembelian']."</td>";
echo " <td> ";
echo " <a href='faktur_edit.php?id_faktur=" . $row['id_faktur'] . " '>
		EDIT</a>";
echo " &nbsp;&nbsp;";
echo" <a href='faktur_hapus.php?id_faktur=" . $row['id_faktur']. " '>
HAPUS</a>";
echo " </td>";		
echo " </tr> ";
}
?>
</table>
<body>
</html>


