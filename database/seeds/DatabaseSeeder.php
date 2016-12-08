<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert(['email' => 'g@gmail.com', 'name' => 'Gians']);
        // $this->call(UsersTableSeeder::class);
    }
}
