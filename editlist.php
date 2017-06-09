<?php

                    include "koneksi.php";
                    $id_barang=$_POST['id_barang'];   

                    $list_result = mysqli_query($dbconn, "DELETE FROM list_barang WHERE id_barang=$id_barang");


                    echo "<html>";
                    echo "<head>";
                    echo "<meta http-equiv=\"refresh\"content=\"0; url=profile.php\" />";
                    echo "</head>";
                    echo "</html>";

?>