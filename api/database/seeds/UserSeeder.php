<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::insert([
            'name' => 'pietro',
            'email' => 'pintonpietro@gmail.com',
            'password' => bcrypt('Pa$$w0rd')
        ]);

    }
}
