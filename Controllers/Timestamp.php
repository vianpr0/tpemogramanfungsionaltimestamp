<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TimestampConverter\TimestampConverter;

class Timestamp extends Controller
{
    public function convertTimestamp()
    {
        $timestamp = time();

        $dateTime = TimestampConverter::toDateTime($timestamp);
        $convertedTimestamp = TimestampConverter::toTimestamp($dateTime);

        $formattedDate = TimestampConverter::getFormattedDate($timestamp);
        $monthNames = TimestampConverter::getMonthNames($timestamp);
        $fullDateTime = TimestampConverter::getFullDateTime($timestamp);
        $shortDate = TimestampConverter::getShortDate($timestamp);

        return view('timestamp', [
            'dateTime' => $dateTime,
            'convertedTimestamp' => $convertedTimestamp,
            'formattedDate' => $formattedDate,
            'monthNames' => $monthNames,
            'fullDateTime' => $fullDateTime,
            'shortDate' => $shortDate
        ]);
    }
}