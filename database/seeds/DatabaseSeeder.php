<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        // $this->call(user_and_roles::class);
        $this->call(site_pages_data::class);


        // $this->call('UsersTableSeeder');
    }
}
