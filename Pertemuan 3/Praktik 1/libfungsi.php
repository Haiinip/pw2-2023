<?php

    function winRate($jumlahMenang, $jumlahKalah) {
        $totalMatch = $jumlahMenang + $jumlahKalah;
        $wr = $jumlahMenang / $totalMatch;

        return $wr;
    }

    function cek_tier($winRate) {

        if ($winRate >= 0.7) {
            return 'Mythic';
        } elseif ($winRate >= 0.45) {
            return 'Legend';
        } elseif ($winRate >= 0.2) {
            return 'Epic';
        } else {
            return 'Master';
        }
        
    }


    function predikat($winRate){

        switch (cek_tier($winRate)) {
            case "Mythic":
                return 'Sangat memuaskan';
                break;
            case "Legend":
                return 'Memuaskan';
                break;
            case "Epic":
                return 'Mengecewakan';
                break;
            default;
                return 'Sangat mengecewakan';
                break;

        }   
    }
?>