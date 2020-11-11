<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create([
            'name' => 'Administrador',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456789'),
            'is_admin' => true,
        ]);



        factory(App\User::class)->create([
            'name' => 'Usuario1',
            'email' => 'usuario1@gmail.com',
            'password' => bcrypt('123456789'),

            
        ]);
    }
}
