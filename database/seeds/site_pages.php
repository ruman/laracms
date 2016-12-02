<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Site_Page, App\Models\User;

class site_pages_data extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Site_Page::create([
			'title' => 'First Page Title',
			'slug' => 'testpage',
			'summary' => 'Default summary',
			'content' => 'something new',
			'active' => true,
			'parent' => 0,
			'order'	 => 0,
			'user_id' => 1
		]);
    }
}
