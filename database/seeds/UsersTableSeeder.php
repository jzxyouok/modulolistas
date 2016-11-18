<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->username = 'prueba';
        $user->password = bcrypt('prueba1');
        $user->tipo_usuario_id = 'ADMIN';
        $user->save();
    }
}