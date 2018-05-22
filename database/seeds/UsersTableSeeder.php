<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
        	'id' => 1, 
        	'name' => 'Gus Arisna', 
        	'email' => 'agus.aris83@gmail.com', 
        	'password' => bcrypt('password'),
        	'img_profile' => 'test.png', 
        	'gender' => 1, 
        	'birthday' => '1998-06-21', 
        	'address' =>  'Br. Karang Dalem 2'
        ]);
    }
}
