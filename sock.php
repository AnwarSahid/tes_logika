<?php


function ceckCoupleSock($data)
{
    sort($data); //Mengurutkan data
    $sum = 0; //inialisasi hasil
    $arrlength = count($data); //menghitung jumlah panjang array
    for ($i = 1; $i <= $arrlength - 1;) {
        if ($data[$i - 1] == $data[$i]) {
            $i += 2;
            $sum = $sum + 1;
        } else {
            $i++;
        }
    }
    echo ($sum . "\n");
}


ceckCoupleSock([5, 7, 7, 9, 10, 4, 5, 10, 6, 5]);
ceckCoupleSock([10, 20, 20, 10, 10, 30, 50, 10, 20]);
ceckCoupleSock([6, 5, 2, 3, 5, 2, 2, 1, 1, 5, 1, 3, 3, 3, 5]);
ceckCoupleSock([1, 1, 3, 1, 2, 1, 3, 3, 3, 3]);
