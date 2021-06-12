<?php
namespace D07Bundle\Service;

class Ex03Service 
{
    public function uppercaseWords($str)
    {
        return ucfirst($str);
    }

    public function countNumbers($str)
    {
        return preg_match_all( "/[0-9]/", $str );
    }
}