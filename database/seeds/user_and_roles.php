<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role, App\Models\User;

class user_and_roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
			'title' => 'Administrator',
			'slug' => 'admin'
		]);

		Role::create([
			'title' => 'Editor',
			'slug' => 'editor'
		]);

		Role::create([
			'title' => 'User',
			'slug' => 'user'
		]);

		User::create([
			'username' => 'administrator',
			'email' => 'admin@omasters.com',
			'password' => bcrypt('admin'),
			'seen' => true,
			'role_id' => 1,
			'confirmed' => true
		]);

		User::create([
			'username' => 'contenteditor',
			'email' => 'writer@omasters.com',
			'password' => bcrypt('editor'),
			'seen' => true,
			'role_id' => 2,
			'valid' => true,
			'confirmed' => true
		]);

		User::create([
			'username' => 'guest',
			'email' => 'guest@omasters.com',
			'password' => bcrypt('guest'),
			'role_id' => 3,
			'confirmed' => true
		]);
    }
}
