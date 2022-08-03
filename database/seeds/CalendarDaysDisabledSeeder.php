<?php

use Illuminate\Database\Seeder;

class CalendarDaysDisabledSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        $calendarDayDisabledJSON = file_get_contents(base_path() . '/database/seeds/jsons/calendar_days_disabled.json');
        $calendarDayDisabled = json_decode($calendarDayDisabledJSON, true);
        \App\Models\CalendarDaysDisabled::insert($calendarDayDisabled['calendar_days_disabled']);
    }
}
