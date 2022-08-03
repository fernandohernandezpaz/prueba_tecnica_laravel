<?php

use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        $servicesJSON = file_get_contents(base_path() . '/database/seeds/jsons/services.json');
        $services = json_decode($servicesJSON, true);
        \App\Models\Services::insert($services['services']);
    }
}
