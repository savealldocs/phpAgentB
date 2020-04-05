<?php

class SumNum
{

    public function sumNumber($numVal)
    {
        $sum = 0;
        while (1) {
            while ($numVal != 0) {

                $rem = $numVal % 10;
                $numVal = $numVal / 10;

                $sum = $sum + $rem;
            }
            if ($sum > 9) {
                $numVal = $sum;
                $sum = 0;
            } else {
                return $sum;
            }

        }
    }

}
