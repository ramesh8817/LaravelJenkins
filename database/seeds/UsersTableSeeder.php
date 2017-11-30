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
        
	    $user = array(
	        'name'     => 'Ramesh Prajapti',
	        'email'    => '123@test.com',
	        'password' => Hash::make('1234'),
	    ); 

	    DB::table('users')->insert($user);
    }
}
