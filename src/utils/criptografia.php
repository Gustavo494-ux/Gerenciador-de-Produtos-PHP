<?php
namespace Utils;

class CriptografiaHandler{
    public static function gerarHashSHA512($string) {
        return hash('sha512', $string);
    }
}