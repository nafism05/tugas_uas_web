<?php
    echo "Nama: ".$_GET['nama']."</br>";
    echo "Password: ".$_GET['password']."</br>";
    echo "Jenis Kelamin: ".$_GET['gender']."</br>";
    echo "Keahlian: ";
    foreach ($_GET['keahlian'] as $value) {
        echo $value.", ";
    }
    echo "<br>";
    echo "Tempat Lahir: ".$_GET['tempat_lahir']."</br>";
    echo "Deskripsi Diri: ".$_GET['deskripsi']."</br>";
    ?>