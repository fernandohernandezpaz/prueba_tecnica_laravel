<?php

use Illuminate\Database\Seeder;

class UserPlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        $userPlansJSON = file_get_contents(base_path() . '/database/seeds/jsons/user_plans.json');
        $userPlans = json_decode($userPlansJSON, true);
        \App\Models\UserPlans::insert($userPlans['user_plans']);
    }
}
