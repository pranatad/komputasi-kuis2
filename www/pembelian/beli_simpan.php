<?php

if(isset($_POST['kode_beli_brg'])){
$kode_beli_brg = $_POST['kode_beli_brg'];
$simpan = "EDIT";
}else{
	$simpan = "BARU";
}
	$kode_brg	= $_POST['kode_brg'];
	$tgl_beli	= $_POST['tgl_beli'];
	$qty	= $_POST['qty'];
	$id_bag_pembelian	= $_POST['id_bag_pembelian'];
	$id_bag_keuangan	= $_POST['id_bag_keuangan'];
	$id_faktur	= $_POST['id_faktur'];
	
	$dataValid = "YA";
		
	if (strlen(trim($kode_brg))==0){
		echo " Harus Diisi! <br/>";
		$dataValid = "TIDAK";
	}
		if (strlen(trim($tgl_beli))==0){
		echo "Harus Diisi! <br/>";
		$dataValid = "TIDAK";
	}
	if (strlen(trim($qty))==0){
		echo "Harus Diisi! <br/>";
		$dataValid = "TIDAK";
	}
	if (strlen(trim($id_bag_pembelian))==0){
		echo "Harus Diisi! <br/>";
		$dataValid = "TIDAK";
	}
	if (strlen(trim($id_bag_keuangan))==0){
		echo "Harus Diisi! <br/>";
		$dataValid = "TIDAK";
	}
		if (strlen(trim($id_faktur))==0){
		echo "Harus Diisi! <br/>";
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
		$sql = "update detail_beli_barang set
		kode_brg = '$kode_brg' ,
		tgl_beli = '$tgl_beli' ,
		qty = '$qty' ,
		id_bag_pembelian = '$id_bag_pembelian' ,
		id_bag_keuangan = '$id_bag_keuangan' , 
		id_faktur = '$id_faktur'  
		where kode_beli_brg = $kode_beli_brg ";
	}else{
		
	$sql = "insert into detail_beli_barang
			(kode_brg,tgl_beli,qty,id_bag_pembelian,id_bag_keuangan,id_faktur)
			values
			('$kode_brg','$tgl_beli','$qty' ,'$id_bag_pembelian','$id_bag_keuangan','$id_faktur') ";
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
	echo "<a href='beli_tampil.php'>Daftar Beli Barang</a>";
	exit;
								
?>
</hr>
<a href="beli_tampil.php" />DAFTAR Beli Barang</a> 