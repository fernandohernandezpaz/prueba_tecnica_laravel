<?php

use Illuminate\Database\Seeder;

class ReservationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reservationsJSON = file_get_contents(base_path() . '/database/seeds/jsons/reservations.json');
        $reservations = json_decode($reservationsJSON, true);
        \App\Models\Reservations::insert($reservations['reservations']);
    }
}
