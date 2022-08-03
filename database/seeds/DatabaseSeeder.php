<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
         $this->call(UsersSeeder::class);
         $this->call(CalendarSeeder::class);
         $this->call(RoutesSeeder::class);
         $this->call(RouteDataSeeder::class);
         $this->call(UserPlansSeeder::class);
         $this->call(ServicesSeeder::class);
         $this->call(CalendarDaysDisabledSeeder::class);
         $this->call(ReservationsSeeder::class);
    }
}
