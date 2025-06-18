<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\password;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create mutiple users
        DB::table('users')->insert([
            [
                'username' => 'user1@teste.com.br',
                'password' => bcrypt('abc123456'),
                'created_at' => date('Y-m-d h:i:s')
            ],
            [
                'username' => 'user2@teste.com.br',
                'password' => bcrypt('abc123456'),
                'created_at' => date('Y-m-d h:i:s')
            ]
        ]);
    }
}
