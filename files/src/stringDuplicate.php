<?php
class StringDuplicate
{

    public function checkDuplicate($string)
    {
        $string = strtolower($string);
        $string = preg_replace('/[^a-z\d ]/i', '', $string);
        $count;

        //Counts each character present in the string
        for ($i = 0; $i < strlen($string); $i++) {
            $count = 1;
            for ($j = $i + 1; $j < strlen($string); $j++) {
                if ($string[$i] == $string[$j] && $string[$i] != ' ') {
                    $count++;
                    $string[$j] = '0';
                }
            }

            if ($count > 1 && $string[$i] != '0') {
                return false;
            }
        }

        return true;
    }
}
