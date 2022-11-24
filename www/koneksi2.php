<?php
error_reporting(E_ALL ^ E_DEPRECATED);
	$host = "db";
	$user = "user";
	$pass = "test";
	$dbName = "id9226201_multi_user";
	
	$kon = mysqli_connect($host, $user, $pass);
	if (!$kon)
		 die("Gagal Koneksi...");
	
	$hasil = mysqli_select_db($kon, $dbName);
	if (!$hasil){
		$hasil = mysqli_query($kon, "CREATE DATABASE $dbName");
		if (!$hasil)
		 die("Gagal Buat Database");
	else
		$hasil = mysqli_select_db($kon, $dbName);
		if (!$hasil) die ("Gagal Konek Database");
	 }
	 
	 $sqlTabelbarang = "create table if not exists barang (
						kode_brg int auto_increment not null primary key,
						nama_brg varchar(10) not null,
						jenis_brg varchar(10) not null ,
						harga int(6) not null, 
						KEY (nama_brg) )";
	
	mysqli_query ($kon, $sqlTabelbarang) or die("Gagal Buat Tabel barang ");

	$sqlTabelpermintaan_barang = "create table if not exists permintaan_barang (
						kode_per_brg int auto_increment  not null primary key,
						kode_brg int (4) not null ,
						id_bag_pemasaran int (4)  not null ,
						id_bag_gudang int (4) not null ,
						qty int (4) not null ,
						tgl_per_brg varchar (10) not null,
						KEY (kode_brg) )";
	
	mysqli_query ($kon, $sqlTabelpermintaan_barang) or die("Gagal Buat Tabel permintaan_barang ");

	$sqlTabeldetail_jual_barang = "create table if not exists detail_jual_barang (
						kode_jual_brg int auto_increment  not null primary key,
						kode_brg int (4) not null ,
						qty int (3)  not null ,
						id_bag_pemasaran int (4) not null ,
						id_bag_keuangan int (4) not null ,
						tgl_jual varchar (10) not null,
						KEY (kode_brg) )";
	
	mysqli_query ($kon, $sqlTabeldetail_jual_barang) or die("Gagal Buat Tabel detail_jual_barang ");

	$sqlTabeldetail_barang = "create table if not exists detail_barang (
						kode_det_brg int auto_increment  not null primary key,
						kode_brg int (4) not null ,
						stok_brg int (3)  not null ,
						id_bag_gudang int (4) not null ,
						tgl_det_brg varchar (10) not null,
						KEY (kode_brg) )";
	
	mysqli_query ($kon, $sqlTabeldetail_barang) or die("Gagal Buat Tabel detail_barang ");

	$sqlTabelfaktur_pembelian = "create table if not exists faktur_pembelian (
						id_faktur int auto_increment  not null primary key,
						tgl_faktur varchar (10) not null ,
						id_bag_keuangan int (4) not null ,
						id_bag_pembelian int (4) not null,
						KEY (tgl_faktur) )";
	
	mysqli_query ($kon, $sqlTabelfaktur_pembelian) or die("Gagal Buat Tabel faktur_pembelian ");

	$sqlTabeldetail_beli_barang = "create table if not exists detail_beli_barang (
						kode_beli_brg int auto_increment  not null primary key,
						kode_brg int (4) not null ,
						tgl_beli varchar (10) not null,
						qty int (3) not null ,
						id_bag_pembelian int (4) not null,
						id_bag_keuangan int (4) not null ,
						id_faktur int(4),
						KEY (kode_brg) )";
	
	mysqli_query ($kon, $sqlTabeldetail_beli_barang) or die("Gagal Buat Tabel detail_beli_barang ");

	$sqlTabellaporan_keuangan = "create table if not exists laporan_keuangan (
						kode_keuangan int auto_increment  not null primary key,
						periode varchar (10) not null ,
						tgl_laporan varchar (10) not null,
						total int (3) not null ,
						id_bag_keuangan int (4) not null ,
						id_bag_pembelian int (4) not null,
						KEY (periode) )";
	
	mysqli_query ($kon, $sqlTabellaporan_keuangan) or die("Gagal Buat Tabel laporan_keuangan");
?>





