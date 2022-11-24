<?php

if(isset($_POST['kode_jual_brg'])){
$kode_jual_brg = $_POST['kode_jual_brg'];
$simpan = "EDIT";
}else{
	$simpan = "BARU";
}
	$kode_brg	= $_POST['kode_brg'];
	$qty	= $_POST['qty'];
	$id_bag_pemasaran = $_POST['id_bag_pemasaran'];
	$id_bag_keuangan = $_POST['id_bag_keuangan'];
	$tgl_jual	= $_POST['tgl_jual'];
	
	$dataValid = "YA";
	
		if (strlen(trim($kode_brg))==0){
		echo "Harus Diisi! <br/>";
		$dataValid = "TIDAK";
	}
	if (strlen(trim($qty))==0){
		echo " Harus Diisi! <br/>";
		$dataValid = "TIDAK";
	}
	if (strlen(trim($id_bag_pemasaran))==0){
		echo " Harus Diisi! <br/>";
		$dataValid = "TIDAK";
	}
		if (strlen(trim($id_bag_keuangan))==0){
		echo " Harus Diisi! <br/>";
		$dataValid = "TIDAK";
	}
		
		if (strlen(trim($tgl_jual))==0){
		echo " Harus Diisi! <br/>";
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
		$sql = "update detail_jual_barang set
		kode_brg = '$kode_brg' ,
		qty = '$qty',
		id_bag_pemasaran = '$id_bag_pemasaran' ,
		id_bag_keuangan = '$id_bag_keuangan' , 
		tgl_jual = '$tgl_jual'  
		where kode_jual_brg = $kode_jual_brg ";
	}else{
		
	$sql = "insert into detail_jual_barang
			(kode_brg,qty,id_bag_pemasaran,id_bag_keuangan,tgl_jual)
			values
			('$kode_brg','$qty','$id_bag_pemasaran','$id_bag_keuangan','$tgl_jual') ";
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
	echo "<a href='jual_tampil.php'>Daftar Penjualan barang</a>";
	exit;
								
?>
</hr>
<a href="jual_tampil.php" />DAFTAR Penjualan</a> 