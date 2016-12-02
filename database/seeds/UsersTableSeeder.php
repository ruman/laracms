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
	    DB::table('users')->insert(array(
	        'name'     => 'Ruman',
	        'username' => 'ruman',
	        'email'    => 'ruman@omasters.com',
	        'password' => bcrypt('awesome'),
	    ));
    }
}
