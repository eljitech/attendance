<?php
    // TAG : 20012021.2 : Jelang Istirahat

    $SERVER = "localhost";
    $USERDB = "root";
    $KEYDB = "!!&21adi";
    $DBNAME = "db_presensi";

    $_AUTH = mysqli_connect($SERVER, $USERDB, $KEYDB, $DBNAME);

    if($_AUTH) {
        // echo "Koneksi bershasil dilakukan";
    } else {
        // echo "Koneksi gagal dilakukan";
    }
?>