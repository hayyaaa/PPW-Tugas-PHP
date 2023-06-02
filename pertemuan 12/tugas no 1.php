<?php
$name = strlen("Hayya");
    $date = date("d") - 2;
    if ($name == $date) {
        echo "Berhasil";
    } else if ($name < $date) {
        echo "Sedikit lagi";
    } else {
        echo "Coba lagi";
    }
?>