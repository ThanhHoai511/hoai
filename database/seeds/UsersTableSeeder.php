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
        DB::table('users')->insert([
			['name' => 'Admin', 'email' => 'admin@gmail.com', 'password' => Hash::make('1234567'), 'role' => 1, 'status' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Thanh Hoai', 'email' => 'hoaintt@gmail.com', 'password' => Hash::make('1234567'), 'role' => 0, 'status' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime,],
		]);
    }
}
