<?php
function esPrimo($n, $i = 2) {
    if ($n <= 2) {
        return ($n == 2) ? true : false;
    }
    if ($n % $i == 0) {
        return false;
    }
    if ($i * $i > $n) {
        return true;
    }
    return esPrimo($n, $i + 1);
}

function sumaDigitos($n) {
    if ($n < 10) return $n;
    return $n % 10 + sumaDigitos(intval($n / 10));
}

function potencia($base, $exponente) {
    if ($exponente == 0) return 1;
    return $base * potencia($base, $exponente - 1);
}
function factorial($n) {
    return ($n <= 1) ? 1 : $n * factorial($n - 1);
}
function fibonacci($n) {
    if ($n <= 1) return $n;
    return fibonacci($n - 1) + fibonacci($n - 2);
}
