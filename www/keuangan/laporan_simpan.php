<?php

if(isset($_POST['kode_keuangan'])){
$kode_keuangan = $_POST['kode_keuangan'];
$simpan = "EDIT";
}else{
	$simpan = "BARU";
}
	$periode	= $_POST['periode'];
	$tgl_laporan	= $_POST['tgl_laporan'];
	$total	= $_POST['total'];
	$id_bag_keuangan	= $_POST['id_bag_keuangan'];
	$id_bag_pembelian	= $_POST['id_bag_pembelian'];
	
	$dataValid = "YA";
		
	if (strlen(trim($periode))==0){
		echo "Nama barang Harus Diisi! <br/>";
		$dataValid = "TIDAK";
	}

	if (strlen(trim($tgl_laporan))==0){
		echo "Nama barang Harus Diisi! <br/>";
		$dataValid = "TIDAK";
	}
		if (strlen(trim($total))==0){
		echo "Harus Diisi! <br/>";
		$dataValid = "TIDAK";
	
	}
	if (strlen(trim($id_bag_keuangan))==0){
		echo "Harga Harus Diisi! <br/>";
		$dataValid = "TIDAK";
	}
	if (strlen(trim($id_bag_pembelian))==0){
		echo "Harga Harus Diisi! <br/>";
		$dataValid = "TIDAK";
	}
	if ($dataValid == "TIDAK"){
		echo "Masih Ada Kesalahan, silahkan perbaiki! <br/>";
		echo "<input type='button' value='kembali'
			  onClick = 'self.history.back()'> ";
		exit;
	}
	
	include "../koneksi2.php";
	
	if($simpan == "EDIT"){
		$sql = "update laporan_keuangan set
		periode = '$periode' ,
		tgl_laporan = '$tgl_laporan' ,
		total = '$total' , 
		id_bag_keuangan = '$id_bag_keuangan' ,
		id_bag_pembelian = '$id_bag_pembelian'  
		where kode_keuangan = $kode_keuangan ";
	}else{
		
	$sql = "insert into laporan_keuangan
			(periode,tgl_laporan,total,id_bag_keuangan,id_bag_pembelian)
			values
			('$periode','$tgl_laporan',$total,$id_bag_keuangan,$id_bag_pembelian) ";
	}		
	$hasil = mysqli_query($kon, $sql);

	
	if (!$hasil){
		echo "Gagal Simpan, silahkan ulangi! <br/>";
		echo mysqli_error($kon);
		echo "<br/> <input type='button' value'Kembali'
			onClick = 'self.history.back()'> ";
		exit;
	} else {
		echo "Simpan data berhasil" ;
	}
	echo "<a href='laporan_tampil.php'>Daftar Laporan</a>";
	exit;
								
?>
</hr>
<a href="laporan_tampil.php" />DAFTAR Laporan</a> 