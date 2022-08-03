<?php

use Illuminate\Database\Seeder;

class RoutesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $routesJSON = file_get_contents(base_path() . '/database/seeds/jsons/routes.json');
        $routes = json_decode($routesJSON, true);
        \App\Models\Routes::insert($routes['routes']);
    }
}
