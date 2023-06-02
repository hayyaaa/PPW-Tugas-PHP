<?php
    $kelompok = array("Hayya"=>"505619", "Lisa"=>"505926", "Fadhil"=>"505661", "Tsania"=>"505618", "Rua"=>"506193");
    foreach ($kelompok as $nama => $nim) {
        if ($nama == "Hayya") {
            echo $nama . " berperan sebagai Project Manager.<br>";
        }
        elseif ($nim % 2 == 0) {
            echo $nama . " berperan sebagai back-end developer.<br>";
        } else {
            echo $nama . " berperan sebagai front-end developer.<br>";   
        }
    }
?>