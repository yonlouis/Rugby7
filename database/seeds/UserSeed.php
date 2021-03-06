<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['id' => 1, 'name' => 'Admin', 'email' => 'admin@admin.com', 'password' => '$2y$10$9F.EaU5ERv8do/Uz3wO8YeNoTei.TcNmLPl4GluLZbekdw.GmiaUC', 'role_id' => 1, 'remember_token' => '',],
            ['id' => 2, 'name' => 'Kevin', 'email' => 'kevin@gmail.com', 'password' => '$2y$10$9F.EaU5ERv8do/Uz3wO8YeNoTei.TcNmLPl4GluLZbekdw.GmiaUC', 'role_id' => 0, 'remember_token' => '',],
            ['id' => 3, 'name' => 'Steven', 'email' => 'steven@gmail.com', 'password' => '$2y$10$9F.EaU5ERv8do/Uz3wO8YeNoTei.TcNmLPl4GluLZbekdw.GmiaUC', 'role_id' => 0, 'remember_token' => '',],
            ['id' => 4, 'name' => 'Tony', 'email' => 'tony@gmail.com', 'password' => '$2y$10$9F.EaU5ERv8do/Uz3wO8YeNoTei.TcNmLPl4GluLZbekdw.GmiaUC', 'role_id' => 0, 'remember_token' => '',],
        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
