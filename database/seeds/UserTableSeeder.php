<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Eliabe Leal',
            'email'     => 'elyabeleal@yahoo.com.br',
            'password'  => bcrypt('123456'),

        ]);

        User::create([
            'name'      => 'Outro usuário',
            'email'     => 'contato@yahoo.com.br',
            'password'  => bcrypt('123456'),

        ]);
    }
}
