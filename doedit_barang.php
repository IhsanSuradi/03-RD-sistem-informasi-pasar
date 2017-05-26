<?php

	include "koneksi.php";
	
	$id_list = $_POST["idlist"];
	$nama_barang = $_POST["namabarang"];
	$jumlah_stock = $_POST["jumlahstock"];
	$harga_barang = $_POST["hargabarang"];
	
	$edit_result = mysqli_query($dbconn, "UPDATE list_barang SET banyak=$jumlah_stock, harga=$harga_barang WHERE id=$id_list;");
	
	//$check
	
	if (isset($_POST["origin"])){
		$origin = $_POST["origin"];
		header("HTTP/1.1 302 Moved Temporarily");
		header("Location: $origin");
	}
	else {
		header("HTTP/1.1 302 Moved Temporarily");
		header("Location: index.php");
	}

?>