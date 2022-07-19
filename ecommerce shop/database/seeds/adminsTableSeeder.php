<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class adminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'id' => '1',
            'name' => 'Admin',
            'phone' => '6353510052',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('udemy12345'),


        ]);
    }
}
