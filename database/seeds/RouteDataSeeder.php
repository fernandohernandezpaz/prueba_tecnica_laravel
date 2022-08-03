<?php

use Illuminate\Database\Seeder;

class RouteDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $routeDataJSON = file_get_contents(base_path() . '/database/seeds/jsons/route_data.json');
        $routeData = json_decode($routeDataJSON, true);
        \App\Models\RouteData::insert($routeData['routes_data']);
    }
}
