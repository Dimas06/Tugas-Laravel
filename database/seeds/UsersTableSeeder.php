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
       \App\User::insert([
            [
              'id'  			=> 1,
              'name'  			=> 'dhyanputri - Admin',
              'username'		=> 'admin123',
              'email' 			=> '123456@dhyanputri@gmail.com',
              'password'		=> bcrypt('admin123'),
              'gambar'			=> NULL,
              'level'			=> 'admin',
              'remember_token'	=> NULL,
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
            [
              'id'  			=> 2,
              'name'  			=> 'afidah - User',
              'username'		=> 'user123',
              'email' 			=> '654321@afidah@gmail.com',
              'password'		=> bcrypt('user123'),
              'gambar'			=> NULL,
              'level'			=> 'user',
              'remember_token'	=> NULL,
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ]
        ]);
    }
}
