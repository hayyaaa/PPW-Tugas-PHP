<?php
    $Nama = array("H", "A", "Y", "Y", "A");
    $Kota = array("Lampung", "Riau", "Jambi", "Bengkulu", "Makassar", "Kendari", "Gorontalo", "Samarinda", "Papua", "Nusa Tenggara Barat");
    $Kota_KKN = "Jawa Timur";
    foreach ($Nama as $i) {
        foreach ($Kota as $j) {
            if ($i == substr($j, 0, 1)) {
                $Kota_KKN = $j;
            }
        }
        if ($Kota_KKN != "Jawa Timur") {
            break;
        }
    }
    echo "Kota KKN : " . $Kota_KKN;
?>