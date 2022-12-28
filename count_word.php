<?php

function ceckWord($word)
{
    $pattern = "/[\'^£$%&*()}{@[#~?><>|=_+¬]/";
    preg_match_all($pattern, $word, $matches, PREG_OFFSET_CAPTURE);

    $x = count(explode(' ', $word));
    $y = count($matches[0]);

    echo ($x - $y . "\n");
}

ceckWord("Kemarin Shopia per[gi ke mall.");
ceckWord("Saat meng*ecat tembok, Agung dib_antu oleh Raihan.");
ceckWord("Berapa u(mur minimal[ untuk !mengurus ktp?");
ceckWord("Masing-masing anak mendap(atkan uang jajan ya=ng be&rbeda.");
