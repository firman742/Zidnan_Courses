<?php

use Carbon\Carbon;

if (!function_exists('carbon')) {
    function carbon($datetime = null, $timezone = 'Asia/Jakarta')
    {
        if (!$datetime) {
            return Carbon::now($timezone);
        }

        return Carbon::parse($datetime, $timezone);
    }
}