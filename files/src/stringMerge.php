<?php

class StringMerge
{

    public function mergeBetween($str1, $str2)
    {

        // Split both strings
        $str1 = str_split($str1, 1);
        $str2 = str_split($str2, 1);

        // Swap variables if string 1 is larger than string 2
        if (count($str1) >= count($str2)) {
            list($str1, $str2) = array($str2, $str1);
        }

        // Append the shorter string to the longer string
        for ($x = 0; $x < count($str1); $x++) {
            $str2[$x] .= $str1[$x];
        }

        return implode('', $str2);
    }

}

$stringObject = new StringMerge();
echo $stringObject->mergeBetween('MICHAEL', 'JORDAN');
