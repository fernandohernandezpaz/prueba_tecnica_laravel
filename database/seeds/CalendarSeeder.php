<?php

use Illuminate\Database\Seeder;

class CalendarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $calendarsJSON = file_get_contents(base_path() . '/database/seeds/jsons/calendar.json');
        $calendars = json_decode($calendarsJSON, true);
        \App\Models\Calendar::insert($calendars['calendar']);
    }
}
