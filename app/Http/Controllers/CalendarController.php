<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class CalendarController extends Controller
{
    public function index()
    {
        $today = Carbon::now();
        $calendar = [];

        for ($i = 0; $i < 12; $i++) {
            $month = $today->copy()->addMonths($i);
            $calendar[$month->format('F Y')] = $this->generateMonth($month);
        }

        return view('calendar', compact('calendar'));
    }

    private function generateMonth($date)
    {
        $calendar = [];
        $daysInMonth = $date->daysInMonth;
        $startOfMonth = $date->copy()->startOfMonth();
        $endOfMonth = $date->copy()->endOfMonth();

        $week = [];
        $dayOfWeek = $startOfMonth->dayOfWeek;

        // Fill in empty days at the start
        for ($i = 1; $i < $dayOfWeek; $i++) {
            $week[] = null;
        }

        for ($day = 1; $day <= $daysInMonth; $day++) {
            $week[] = $day;

            if (count($week) == 7) {
                $calendar[] = $week;
                $week = [];
            }
        }

        // Fill in empty days at the end
        while (count($week) < 7 && !empty($week)) {
            $week[] = null;
            if (count($week) == 7) {
                $calendar[] = $week;
            }
        }

        return $calendar;
    }
}

