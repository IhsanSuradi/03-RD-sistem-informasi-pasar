<?php

	if (isset($_POST["id"])){
		$id_barang = $_POST["id"];
	}
	else {
		die("ID Barang tidak boleh kosong!");
	}
	
	include "koneksi.php";
	include "init_session.php";
	
	$del_result = mysqli_query($dbconn, "DELETE FROM keranjang WHERE (id_session=$uid) AND (id_list=$id_barang);");
	
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