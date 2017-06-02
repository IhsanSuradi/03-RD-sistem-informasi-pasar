<?php

	include "koneksi.php";
	
	$mid = 1;//$_SESSION['MM_MID'];
	$list_result = mysqli_query($dbconn, "SELECT * FROM list_barang WHERE id_toko=$mid;");
	if (mysqli_num_rows($list_result) > 0){
		while ($row_list = mysqli_fetch_assoc($list_result)){
			$id_barang = $row_list['id_barang'];
			$harga = $row_list['harga'];
			$banyak = $row_list['banyak'];
			$barang_result = mysqli_query($dbconn, "SELECT nama FROM barang WHERE id_barang=$id_barang;");
			if (mysqli_num_rows($barang_result) > 0){
				$row_barang = mysqli_fetch_assoc($barang_result);
				$nama_barang = $row_barang['nama'];
			}
			else {
				$nama_barang = '<Unknown>';
			}
			echo "<tr>";
            echo "<td>$nama_barang</td>";
            echo "<td class=\"text-center\"><strong>$banyak Kg </strong></td>";
            echo "<td class=\"text-center\"><strong>Rp. $harga,- </strong> </td>";
            echo "</tr>";
		}
	}

?>