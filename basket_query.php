<?php

	// Ambil user id session saat ini
	if (isset($uid)){
		
		// Ambil dulu dari keranjang
		$kr_result = mysqli_query($dbconn, "SELECT * FROM keranjang WHERE id_session=$uid;");
		if (mysqli_num_rows($kr_result) > 0){
			while ($row_kr = mysqli_fetch_assoc($kr_result)){
				// Ambil id dari list barang
				$id_list = $row_kr["id_list"];
				$list_result = mysqli_query($dbconn, "SELECT * FROM list_barang WHERE id=$id_list;");
				if (mysqli_num_rows($list_result) > 0){
					$row_list = mysqli_fetch_assoc($list_result);
					// Ambil semua properti dari tabel list barang
					$id_barang = $row_list["id_barang"];
					$id_toko = $row_list["id_toko"];
					$harga = $row_list["harga"];
					$banyak = $row_list["banyak"];
					// Fetch ke tabel barang, untuk dapatkan nama barang dan deskripsi
					$barang_result = mysqli_query($dbconn, "SELECT * FROM barang WHERE id_barang=$id_barang;");
					if (mysqli_num_rows($barang_result) > 0){
						$row_barang = mysqli_fetch_assoc($barang_result);
						$nama_barang = $row_barang["nama"];
						$deskripsi_barang = $row_barang["deskripsi"];
					}
					// Fetch ke tabel toko, ambil nama toko
					$toko_result = mysqli_query($dbconn, "SELECT * FROM toko WHERE id=$id_toko;");
					if (mysqli_num_rows($toko_result) > 0){
						$row_toko = mysqli_fetch_assoc($toko_result);
						$nama_toko = $row_toko["nama"];
					}
					// Buat hasilnya!
					echo "<tr>";
                    echo "<td>$nama_barang</td>";
                    echo "<td>$nama_toko</td>";
                    echo "<td class=\"text-center\"><strong>$banyak Kg</strong></td>";
                    echo "<td class=\"text-center\"><strong>Rp. $harga,-";
					echo "<form action=\"del_keranjang.php\" method=\"POST\">";
					echo "<input type=\"hidden\" name=\"id\" value=\"$id_list\">";
					echo "<input type=\"hidden\" name=\"origin\" value=\"keranjang.php\">";
					echo "<input type=\"submit\" name=\"Submit2\" value=\"HAPUS\" align=\"right\">";
					echo "</form></strong></td>";
					echo "</tr>";
				}
			}
		}
		else {
			echo "Anda belum mengisi keranjang!";
		}
	}
	else {
		echo "Query error: gagal mengakses id session!";
	}

?>