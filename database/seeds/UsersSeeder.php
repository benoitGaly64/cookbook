<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::create([
            'name' => 'benoit',
            'email' => 'galy.benoit.64@gmail.com',
            'password' => bcrypt('test'),
        ]);

        $user2 = User::create([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'password' => bcrypt('test'),
        ]);
    }
}
