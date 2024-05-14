<?php

namespace TimestampConverter;

use Carbon\Carbon;

class TimestampConverter
{
    public static function toDateTime($timestamp)
    {
        return Carbon::createFromTimestamp($timestamp)->format('Y-m-d H:i:s');
    }

    public static function toTimestamp($dateTime)
    {
        return Carbon::parse($dateTime)->timestamp;
    }

    public static function getFormattedDate($timestamp = null)
    {
        $date = $timestamp ? Carbon::createFromTimestamp($timestamp) : Carbon::now();
        $months = [
            1 => 'Januari', 2 => 'Februari', 3 => 'Maret', 4 => 'April', 5 => 'Mei', 6 => 'Juni',
            7 => 'Juli', 8 => 'Agustus', 9 => 'September', 10 => 'Oktober', 11 => 'November', 12 => 'Desember'
        ];

        $day = $date->day;
        $month = $months[$date->month];
        $year = $date->year;

        return "{$day} {$month} {$year}";
    }

    public static function getMonthNames($timestamp = null)
    {
        $date = $timestamp ? Carbon::createFromTimestamp($timestamp) : Carbon::now();
        $months = [
            1 => ['long' => 'Januari', 'short' => 'Jan'],
            2 => ['long' => 'Februari', 'short' => 'Feb'],
            3 => ['long' => 'Maret', 'short' => 'Mar'],
            4 => ['long' => 'April', 'short' => 'Apr'],
            5 => ['long' => 'Mei', 'short' => 'Mei'],
            6 => ['long' => 'Juni', 'short' => 'Jun'],
            7 => ['long' => 'Juli', 'short' => 'Jul'],
            8 => ['long' => 'Agustus', 'short' => 'Agu'],
            9 => ['long' => 'September', 'short' => 'Sep'],
            10 => ['long' => 'Oktober', 'short' => 'Okt'],
            11 => ['long' => 'November', 'short' => 'Nov'],
            12 => ['long' => 'Desember', 'short' => 'Des'],
        ];

        $month = $date->month;

        return $months[$month];
    }

    public static function getFullDateTime($timestamp = null)
    {
        $date = $timestamp ? Carbon::createFromTimestamp($timestamp) : Carbon::now();
        return $date->format('d F Y H:i:s');
    }

    public static function getShortDate($timestamp = null)
    {
        $date = $timestamp ? Carbon::createFromTimestamp($timestamp) : Carbon::now();
        return $date->format('d-m-Y');
    }
}
