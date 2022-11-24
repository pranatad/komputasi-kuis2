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
$sql = "select * from detail_jual_barang where kode_brg LIKE '%".$cari."%'order by kode_jual_brg desc";
$hasil = mysqli_query($kon, $sql);
if (!$hasil)
die("Gagal query..".mysqli_error($kon));
?>
<table border="1">
<tr bgcolor="gold">
<th>Kode Jual Barang</th>	
<th>Kode Barang</th>
<th>Qty</th>
<th>ID Pemasaran</th>
<th>ID Keuangan</th>
<th>Tgl_jual</th>

</tr>
<?php
$no = 0;
while ($row = mysqli_fetch_array($hasil)){
echo " <tr> ";
echo " <td> ".$row['kode_jual_brg']."</td>";
echo " <td> ".$row['kode_brg']."</td>";
echo " <td> ".$row['qty']."</td>";
echo " <td> ".$row['id_bag_pemasaran']."</td>";
echo " <td> ".$row['id_bag_keuangan']."</td>";
echo " <td> ".$row['tgl_jual']."</td>";
echo " </tr> ";
}
?>
</table>
<body>
</html>


