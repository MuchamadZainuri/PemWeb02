<?php

    function kelulusan($_nilai){
        if ($_nilai > 55) {
        return 'lulus' ;
    } elseif($_nilai < 56){
        return 'Tidak Lulus';
    } else{
        return 'Tidak valid';
    }
}

    function grade($_nilai) {
        if ($_nilai <= 35) {
            return 'E';
        } elseif ($_nilai <= 55) {
            return 'D';
        } elseif ($_nilai <= 69) {
            return 'C';
        } elseif ($_nilai <= 84) {
            return 'B';
        } elseif ($_nilai <= 100) {
            return 'A';
        } else {
            return 'Tidak valid';
        }
    }

?>