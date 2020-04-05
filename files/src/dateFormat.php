<?php
class DateFormat
{

    public function dateFormation($dateString)
    {
        $date_ar = explode(' ', $dateString);
        $dateString = $date_ar[1] . ' ' . $date_ar[2] . ' of ' . $date_ar[4] . ' ' . $date_ar[5];
        return date('Y-m-d', strtotime($dateString));
    }

}
