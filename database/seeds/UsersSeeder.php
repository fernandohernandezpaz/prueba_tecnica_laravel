<?php

use Illuminate\Database\Seeder;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $usuariosJSON = file_get_contents(base_path() . '/database/seeds/jsons/users.json');
        $usuarios = json_decode($usuariosJSON, true);
        $usuarios = $usuarios['users'];
        foreach ($usuarios as $usuario) {
            $usuario['password'] = bcrypt($usuario['password']);
        }
        \App\User::insert($usuarios);
    }
}
